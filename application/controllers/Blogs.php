<?php 
class Blogs extends CI_Controller
{
public function __construct(){
parent::__construct();
$this->load->library('form_validation');
$this->load->helper('url'); 
$this->load->model('blog_model');
$this->load->model('news_model');
$this->load->model('comment_model');
}

public function index($offset = 0)
{


	//pagination config get_innerwat
	$config['base_url'] = base_url() . 'index.php/blogs/index/';
	$config['total_rows'] = $this->db->count_all('blogs');
	$config['per_page'] = 3;
	$config['uri_segment'] = 3;
	$config['attributes'] = array('class' => 'pagination-link');
	
	//init pagination
	$this->pagination->initialize($config);
	$data['sidebar'] = $this->get_innerwat();
	$data['blogs'] = $this->blog_model->get_blogs(FALSE, $config['per_page'], $offset);
	$this->load->view('headerfour',array('title'=>'Welcome to Fitness Blog!'));
	$this->load->view('index',$data);
	$this->load->view('footer');
	$ne_id = $this->input->post('ne_id');
if(isset($ne_id)){
	$this->addcommentnew();
}
}




public function ems($offset = 0)
{


	//pagination config get_innerwat
	$config['base_url'] = base_url() . 'index.php/blogs/index/';
	$config['total_rows'] = $this->db->count_all('blogs');
	$config['per_page'] = 3;
	$config['uri_segment'] = 3;
	$config['attributes'] = array('class' => 'pagination-link');
	
	//init pagination
	$this->pagination->initialize($config);
	$data['sidebar'] = $this->get_innerwat();
	$data['blogs'] = $this->blog_model->get_blogs_ems(FALSE, $config['per_page'], $offset);
	$this->load->view('headerfour',array('title'=>'Welcome to Fitness Blog!'));
	$this->load->view('ems',$data);
	$ne_id = $this->input->post('ne_id');
	if(isset($ne_id)){
		$this->addcommentnewems();
	}

}



//  blogs comments two
public function adminpanel($offset = 0)
{
//pagination config
$config['base_url'] = base_url() . 'index.php/blogs/adminpanel/';
$config['total_rows'] = $this->db->count_all('blogs');
$config['per_page'] = 3;
$config['uri_segment'] = 3;
$config['attributes'] = array('class' => 'pagination-link');

//init pagination
$this->pagination->initialize($config);

$data['blogs'] = $this->blog_model->get_blogs(FALSE, $config['per_page'], $offset);

$this->load->view('header',array('title'=>'Welcome to Fitness Blog!'));
$this->load->view('adminpanel', $data);
$this->load->view('footer');

}






public function view($slug = NULL,$id)
{
$data['blog'] = $this->blog_model->get_blogs($slug);

if (empty($data['blog'])) {
show_404();
}

$data['title'] = $data['blog']['title'];
// $id= $data['blog']['id'];
$data['counts'] = $this->blog_model->countComt($id);
$this->load->view('header',array('title'=>$data['title']));
$this->load->view('blogs/view', $data);
$this->load->view('footer');

}

public function addcombox($slug = NULL,$id){
	$data['blog'] = $this->blog_model->get_blogs_two($slug);
	if (empty($data['blog'])) {
		show_404();
		}
		$data['title'] = $data['blog']['title'];
		$data['counts'] = $this->blog_model->countComt($id);
		$this->load->view('headertwo',array('title'=>$data['title']));
		$this->load->view('blogs/addcombox',$data);
		$this->load->view('footer');
}

public function addcomboxtwo($slug = NULL,$id){
	$data['blog'] = $this->blog_model->get_blogs_two($slug);
	if (empty($data['blog'])) {
		show_404();
		}
		$data['title'] = $data['blog']['title'];
		$data['counts'] = $this->blog_model->countComt($id);
		$this->load->view('headerfour',array('title'=>$data['title']));
		$this->load->view('blogs/addcomboxtwo',$data);
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

public function  addcommentnew(){

	$ne_id = $this->input->post('ne_id'); 
	$user_name =  $this->input->post('user_name'.$ne_id.''); 
$comments_data =  $this->input->post('comments'.$ne_id.''); 
if($comments_data!=''){
$data = array(
	'blog_id'	=> $ne_id,
	'comments' => $comments_data,
	'user_name' => $user_name,
	'createdOn'=>date('Y-m-d H:i:s')
);
$this->load->model('blog_model');
$result= $this->blog_model->addcomment($data);
redirect("blogs/");
}else{
	redirect("blogs/");
}
}

public function  addcommentnewems(){
	$ne_id = $this->input->post('ne_id'); 
$comments_data =  $this->input->post('comments'.$ne_id.''); 
if($comments_data!=''){
$data = array(
	'blog_id'	=> $ne_id,
	'comments' => $comments_data,
	'createdOn'=>date('Y-m-d H:i:s')
);
$this->load->model('blog_model');
$result= $this->blog_model->addcomment($data);
redirect("blogs/ems");
}else{
	redirect("blogs/ems");
}
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
// $this->load->view('footer');
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


// third interface start

public function gettingstarted($offset = 0){
	$config['base_url'] = base_url() . 'index.php/blogs/index/';
	$config['total_rows'] = $this->db->count_all('blogs');
	$config['per_page'] = 3;
	$config['uri_segment'] = 3;
	$config['attributes'] = array('class' => 'pagination-link');
	$data['sidebar'] = $this->get_innerwat();
	//init pagination
	$this->pagination->initialize($config);
	$data['blogs'] = $this->blog_model->get_blogs(FALSE, $config['per_page'], $offset);
	$this->load->view('headerfour',array('title'=>'Welcome to Fitness Blog!'));
	$this->load->view('gettingstarted', $data);
}



// third interface end 


// save two start


public function savetwo()
{

if (!$this->session->userdata('logged_in')) {
redirect('home/login');
}

$data['title'] = 'Create Blogs';

$data['categoriesopt'] = $this->blog_model->get_categories();
// $precio_total = $this->input->post('count_items');
$this->form_validation->set_rules('title', 'Title', 'required');
$this->form_validation->set_rules('v_url', $this->lang->line('v_url'), 'trim|required|htmlspecialchars');

if ($this->form_validation->run() === FALSE) {
$this->load->view('headertwo',array('title'=>$data['title']));
$this->load->view('blogs/savetwo', $data);
// $this->load->view('footer');
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
redirect("blogs/");
}
}



// save two end


// save three
public function savefour()
{

if (!$this->session->userdata('logged_in')) {
redirect('home/login');
}

$data['title'] = 'Create Blogs';

$data['categoriesopt'] = $this->blog_model->get_categories();
$data['cities'] = $this->blog_model->getType();
// $precio_total = $this->input->post('count_items');
$this->form_validation->set_rules('title', 'Title', 'required');
$this->form_validation->set_rules('v_url', $this->lang->line('v_url'), 'trim|required|htmlspecialchars');

if ($this->form_validation->run() === FALSE) {
$this->load->view('headerfour',array('title'=>$data['title']));
$this->load->view('blogs/savefour', $data);
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
redirect("blogs/");
}
}




// save three end


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
$this->blog_model->delete_description($id);
$this->session->set_flashdata('blog_deleted', 'Your blog has been deleted');

redirect('blogs');
}




// function to delete image



public function getcategory(){
	// POST data
	$postData = $this->input->post();

	//load model
	$this->load->model('blog_model');

	// get data
	$data = $this->blog_model->getcategory($postData);

	echo json_encode($data);
}








// edit function start

public function edit($id){
$this->load->view('header',array('title'=>'Edit Blog'));
$blog_model = new blog_model;
$data['blog'] = $blog_model->editModel($id);
$data['description'] = $blog_model->editDescription($id);
$data['count'] = $blog_model->countDescription($id);
$this->load->view('blogs/edit', $data);
$this->load->view('footertwo');

}
// edit function two

public function edittwo($id){
	$this->load->view('headertwo',array('title'=>'Edit Blog'));
	$blog_model = new blog_model;
	$data['blog'] = $blog_model->editModel($id);
	$data['description'] = $blog_model->editDescription($id);
	$data['count'] = $blog_model->countDescription($id);
	$data['categoriesopt'] = $this->blog_model->get_categories();
	$this->load->view('blogs/edittwo', $data);
	$this->load->view('footertwo');
	
	}


	public function editfour($id, $catgory_id){
		$this->load->view('headerfour',array('title'=>'Edit Blog'));
		$blog_model = new blog_model;
		$data['blog'] = $blog_model->editModel($id);
		$data['description'] = $blog_model->editDescription($id);
		$data['count'] = $blog_model->countDescription($id);
		$catype = $this->blog_model->get_categoriesoftype($catgory_id);
		$data['categoriesopt'] = $this->blog_model->get_categoryies($catype);
		$this->load->view('blogs/editfour', $data);
		$this->load->view('footertwo');
		
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
$count_itemscryto=$this->input->post('count_itemscryto');
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
'category_id' 	=> $this->input->post('category_id'),
'modified_by'	=> $this->session->userdata('user_id')
];

$blog_model = new blog_model;
$res = $blog_model->updateModel($data,$id);
$ser = $blog_model->updateDesc($count_itemscryto,$id);
$this->session->set_flashdata('blog_updated', 'Your blog has been updated');

redirect('blogs');

}
else{
return $this->edittwo($id);
}
}



public function savedescription(){
	$this->output->set_content_type('application/json');
	echo json_encode(array('check' => 'check'));
}

// edit function end


// 
// comment section


function add_comment($ne_id)
{

	// get a post id based on news id
	$data['news'] = $this->news_model->get_one($ne_id);

	//set validation rules
	$this->form_validation->set_rules('comment_name', 'Name', 'required|trim|htmlspecialchars');
	// $this->form_validation->set_rules('comment_email', 'Email', 'required|valid_email|trim|htmlspecialchars');
	$this->form_validation->set_rules('comment_body', 'comment_body', 'required|trim|htmlspecialchars');
	if ($this->form_validation->run() == FALSE) {
		// if not valid load comments
		$this->session->set_flashdata('error_msg', validation_errors());
		redirect('blogs');
	} else {
		//if valid send comment to admin to tak approve
		// $data['blogs'] = $this->blog_model->get_blogstwo($ne_id);
		$this->comment_model->add_new_comment();
		// $this->load->view('blogs/view', $data);
		$this->show_one($ne_id);
		$this->session->set_flashdata('error_msg', 'Your comment is awaiting moderation.');
		// redirect('blogs');
	}
}



function show_one($ne_id)
{
		// $data['top_section'] = $this->load->view('blogs/view', '', TRUE);
	// get a post news based on news id
		// get a post COMMENTS based on news id and send it to view
	// $slug = $this->input->post('slug');
	$data['news'] = $this->news_model->get_one($ne_id);
	$data['comments'] = $this->show_tree($ne_id);
	$this->load->view('header',array('title'=>'Welcome to Fitness Blog!'));
	$this->load->view('show_one', $data);
$this->load->view('footer');
	
}









function show_tree($ne_id)
{
	// create array to store all comments ids
	$store_all_id = array();
	// get all parent comments ids by using news id
	$id_result = $this->comment_model->tree_all($ne_id);
	// loop through all comments to save parent ids $store_all_id array
	foreach ($id_result as $comment_id) {
		array_push($store_all_id, $comment_id['parent_id']);
	}
	// return all hierarchical tree data from in_parent by sending
	//  initiate parameters 0 is the main parent,news id, all parent ids

	return  $this->in_parent(0,$ne_id, $store_all_id);
}





function get_innerwat(){
	$html = "";
	$categories = $this->categories_model->get_published_cat();
	$html .=   "<ul class='navi-acc' >";
	foreach ($categories as $category) {
$catid = $category['id'];
$result = $this->categories_model->get_innercat($catid);
		$html .="<li><a href='#".$category['title']."' id='".$category['id']."' class='dashboard'>".$category['title']."</a>";
		$html .= "<ul class='childtree'>";
		foreach ($result as $re) {
			$html .= "<li><a href='dashboard".$re['id'].".html'>".$re['title']."</a></li>";
			// $html .= "</li>";
		}
		$html .=  "</ul></li>";
	}
	$html .=  "</ul>";
	return $html;

}


function in_parent($in_parent,$ne_id,$store_all_id) {
	// this variable to save all concatenated html
	$html = "";
	// build hierarchy  html structure based on ul li (parent-child) nodes
	if (in_array($in_parent,$store_all_id)) {
		$result = $this->comment_model->tree_by_parent($ne_id,$in_parent);
		$html .=  $in_parent == 0 ? "<ul class='tree'>" : "<ul class='childtree'>";
		foreach ($result as $re) {
			$html .= " <li class='comment_box'>
			<div class='container mt-5'>

            <div class='row  d-flex justify-content-center'>

                <div class='col-md-8'>

                    <div class='headings d-flex justify-content-between align-items-center mb-3'>					
					</div>
					<div class='card p-3'>
					<div class='d-flex justify-content-between align-items-center'>
				  <div class='user d-flex flex-row align-items-center'>
					<img src='https://i.imgur.com/hczKIze.jpg' width='30' class='user-img rounded-circle mr-2'>
					<span><small class='font-weight-bold text-primary'>".$re['comment_name']."</small> <small class='font-weight-bold'>".$re['comment_email']."</small></span>               
					</div>
					<small>".date("F j, Y", $re['comment_created'])."</small>
					<div class='action d-flex justify-content-between mt-2 align-items-center'>
					<div class='reply px-4'>
					<a  href='#comment_form' class='reply' id='" . $re['comment_id'] . "'>Replay </a>
					</div>
					<div class='icons align-items-center'>
					<i class='fa fa-star text-warning'></i>
					<i class='fa fa-check-circle-o check-icon'></i>               
				</div>                
				</div>           
			</div>
			<div class='body'><p>".$re['comment_body']."</p></div>       
		</div>   
	</div>
	</div>";
	$html .=$this->in_parent($re['comment_id'],$ne_id, $store_all_id);
	$html .= "</li>";
		}
		$html .=  "</ul>";
	}

	return $html;
}








public function createperson()
	{
		$name = $this->input->post('name');
		$message = $this->input->post('message');
		$age = $this->input->post('age');

		$data = array(
			'name'	=> $name,
			'message' => $message,
			'age'	=> $age,
		);
		$this->load->model('blog_model');
		$insert = $this->blog_model->createData($data);
		echo json_encode($insert);
	}




// blogs  comments two

// 1

public function addcomment()
{
	# code...
	// $user_name = $this->input->post('user_name'); 
	$comments = $this->input->post('comments');
	$user_name = $this->input->post('user_name');
	$ne_id = $this->input->post('ne_id');  
	date_default_timezone_set('Asia/Kolkata');
	$data = array(
		'blog_id'	=> $ne_id,
		'comments' => $comments,
		'user_name' => $user_name,
		'createdOn'=>date('Y-m-d H:i:s')
	);
	$this->load->model('blog_model');
	$result= $this->blog_model->addcomment($data);
	if ($result) {
		# code...
		// $user_id = $this->input->post('user_name'); 
		 $comments = $this->input->post('comments'); 
		 $letasrow=$this->blog_model->affected_comment($comments);
		 if ($letasrow) {
			 # code...
			 echo json_encode($letasrow);
		 }


	}
	return true;
	 
}


// 2

public function addreply()
{
	# code...
	$result= $this->blog_model->addreply();
	return true;
	 
}







// 3




public function allComment()
{
	# code...
 $response='';
 $response1='';
 $ne_id = $this->input->post('ne_id');
 $created_by = $this->input->post('created_by');  
 $this->load->model('blog_model');
$result= $this->blog_model->allComment($ne_id);
  foreach ($result as  $value) {
	# code...
$result1= $this->blog_model->comment_replies($value->id);
  if ($result1) {
	  # code...
		foreach ($result1 as  $value1) {
		# code... '.$value->user_name.'
			$response1.= '<div class="comment">
			
			<div class="usercomment">'.$value1->reply.'</div>
			</div>';                       
		}
}

		  $response.= '<div class="comment">
					<div class="user"><span class="username">'.$value->user_name.'</span><span class="time"> '.date("d-m-y", strtotime($value->createdOn)).'</span></div>
					<div class="usercomment">'.$value->comments.'</div>
					<div class="reply" id="will"><a href="javascript:void(0)" class="btn-default btn roaga ravn" data-commentID='.$value->id.' onclick="reply(this)">REPLY</a></div>						
					<div class="replies">'.$response1.'</div>					
				</div>';                       
		 $response1='';

	}
	echo json_encode($response);
}



// last


public function topComment()
{
	# code...
 $response='';
 $response1='';
 $hid_id = $this->input->post('hid_id');
 $created_by = $this->input->post('created_by');  
 $this->load->model('blog_model');
$result= $this->blog_model->topComment($hid_id);
  foreach ($result as  $value) {
	# code...
$result1= $this->blog_model->comment_replies($value->id);
  if ($result1) {
	  # code...
		foreach ($result1 as  $value1) {
		# code... '.$value->user_name.'
			$response1.= '<div class="comment">
			
			<div class="usercomment">'.$value1->reply.'</div>
			</div>';                       
		}
}

		  $response.= '<div class="comment">
					<div class="user"><span class="time"> '.date("Y-m-d", strtotime($value->createdOn)).'</span></div>
					<div class="usercomment">'.$value->comments.'</div>
					<div class="reply" id="will"><a href="javascript:void(0)" class="btn-default btn roaga"  data-commentID='.$value->id.' onclick="reply(this)">REPLY</a></div>						
					<div class="replies">'.$response1.'</div>					
				</div>';                       
		 $response1='';

	}
	echo json_encode($response);
}





}

?>
