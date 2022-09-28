<?php 
class Blogs extends CI_Controller
{
public function __construct(){
parent::__construct();
$this->load->library('form_validation');
$this->load->helper('url'); 
$this->load->model('blog_model');
}

public function index($offset = 0)
{
//pagination config
$config['base_url'] = base_url() . 'index.php/blogs/index/';
$config['total_rows'] = $this->db->count_all('blogs');
$config['per_page'] = 3;
$config['uri_segment'] = 3;
$config['attributes'] = array('class' => 'pagination-link');

//init pagination
$this->pagination->initialize($config);

$data['blogs'] = $this->blog_model->get_blogs(FALSE, $config['per_page'], $offset);

$this->load->view('header',array('title'=>'Welcome to Fitness Blog!'));
$this->load->view('index', $data);
$this->load->view('footer');
}

public function view($slug = NULL)
{
$data['blog'] = $this->blog_model->get_blogs($slug);

if (empty($data['blog'])) {
show_404();
}

$data['title'] = $data['blog']['title'];

$this->load->view('header',array('title'=>$data['title']));
$this->load->view('blogs/view', $data);
$this->load->view('footer');

}

public function create()
{

$precio_total = $this->input->post('count_items');
for($i=1;$i<=$precio_total;$i++){
$editor_data =  $this->input->post('description'.$i.''); 
$url = $this->input->post('v_url');
// where editor1 is the name of html element
// $this->form_validation->set_rules('description'.$i.'', 'Description', 'required');
// Read POST data  remeber to uncomment below
}


$this->blog_model->create_blog($precio_total);

}






// save function **********

public function save()
{

if (!$this->session->userdata('logged_in')) {
redirect('home/login');
}

$data['title'] = 'Create Blogs';

$data['categories'] = $this->blog_model->get_categories();
// $precio_total = $this->input->post('count_items');
$this->form_validation->set_rules('title', 'Title', 'required');
$this->form_validation->set_rules('v_url', $this->lang->line('v_url'), 'trim|required|htmlspecialchars');

if ($this->form_validation->run() === FALSE) {
$this->load->view('header',array('title'=>$data['title']));
$this->load->view('blogs/save', $data);
$this->load->view('footer');
} else {
//upload image
$config['upload_path'] 		= 'E:\xampp\htdocs\CodeIgniter-Blog-project\application\assets\images\blogs';
$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
$config['encrypt_name'] 	= TRUE;
$config['max_size'] 		= '2048';
$config['max_width'] 		= '2000';
$config['max_height'] 		= '2000';
// *************************************************** \\
// video url start
$url = $this->input->post('v_url');
parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
// parse youtube url to get id
$video_id = $my_array_of_vars['v'];
// Output: AyLY1CYtB_8
$video_title =  $this->get_youtube_title($video_id);
// send id and video title to database table
// here
// $this->videos_model->create_videos($video_id,$video_title);

//  video url end

// *************************************************** \\

$this->load->library('upload', $config);

if (!$this->upload->do_upload()) {
$errors = $this->upload->display_errors();
$blog_image = 'noimage.jpg';
} else {
$data = array('upload_data' => $this->upload->data());
$blog_image = $data['upload_data']['file_name'];
}

$this->blog_model->save_blog($blog_image,$video_id,$video_title);
// $this->blog_model->create_blog($precio_total);
$this->create();
//set messages
$this->session->set_flashdata('blog_error', $error);
$slug = url_title($this->input->post('title'));
redirect("blogs/".$slug);
}
}


// save function end %%%%%%%%%%%%

// video function
function get_youtube_title($video_id){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com/oembed?url=http://www.youtube.com/watch?v='.$video_id.'&format=json');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);

if ($response) {
$result =json_decode($response, true);
return  $result['title'];
} else {
return error_get_last();
}
}

// video function







public function delete($id)
{
//check login
if (!$this->session->userdata('logged_in')) {
redirect('home/login');
}

$this->blog_model->delete_blog($id);

$this->session->set_flashdata('blog_deleted', 'Your blog has been deleted');

redirect('blogs');
}




// function to delete image











// edit function start

public function edit($id){


$this->load->view('header',array('title'=>'Edit Blog'));
$blog_model = new blog_model;
$data['blog'] = $blog_model->editModel($id);
$data['description'] = $blog_model->editDescription($id);
$data['count'] = $blog_model->countDescription($id);
$this->load->view('blogs/edit', $data);
$this->load->view('footer');

}



public function update($id)
{
$this->form_validation->set_rules('title', 'Title', 'required');
$this->form_validation->set_rules('v_url', $this->lang->line('v_url'), 'trim|required|htmlspecialchars');


$id=$this->input->post("id");
//check login
if (!$this->session->userdata('logged_in')) {
redirect('home/login');
}


if($this->form_validation->run()){
$old_prod_image=$this->input->post('old_prod_image');
// $new_img=$this->input->$_FILES["new_img"]["name"];
// $new_img=$this->input->$_FILES["userfile"]["name"];
// $_FILES['file']['tmp_name']
// if($new_img == TRUE){
	if($_FILES['userfile']['tmp_name']!="")
{
$config['upload_path'] 		= 'E:\xampp\htdocs\CodeIgniter-Blog-project\application\assets\images\blogs';
$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
$config['encrypt_name'] 	= TRUE;
$config['max_size'] 		= '2048';
$config['max_width'] 		= '2000';
$config['max_height'] 		= '2000';
// **********************************

$this->load->library('upload', $config);

if (!$this->upload->do_upload()) {
$errors = $this->upload->display_errors();
$blog_image = $old_prod_image;
} else {
$data = array('upload_data' => $this->upload->data());
$blog_image = $data['upload_data']['file_name'];
}
}
else{
	$blog_image = $old_prod_image;
}



$url = $this->input->post('v_url');
parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
// parse youtube url to get id
$video_id = $my_array_of_vars['v'];
// Output: AyLY1CYtB_8
$video_title =  $this->get_youtube_title($video_id);
$slug = url_title($this->input->post('title'));

$data = [
	'slug'          => $slug,
	'title' 		=> $this->input->post('title'),
	'blog_image' 	=> $blog_image,
	'v_name' 	=> $video_title,
	'v_url' 	=> $video_id,
	'description'	=> $this->input->post('description'),
	'modified_by'	=> $this->session->userdata('user_id')
];

$blog_model = new blog_model;
$res = $blog_model->updateModel($data,$id);
$this->session->set_flashdata('blog_updated', 'Your blog has been updated');

redirect('blogs');

}
else{
return $this->edit($id);
}
}

// edit function end

}

?>
