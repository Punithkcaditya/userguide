<?php 
class Blogs extends CI_Controller
{
public function __construct(){
	parent::__construct();
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
	//check login
	if (!$this->session->userdata('logged_in')) {
		redirect('home/login');
	}

	$data['title'] = 'Create Blogs';

	$data['categories'] = $this->blog_model->get_categories();

	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('description', 'Description', 'required');
	$this->form_validation->set_rules('vi_url', $this->lang->line('vi_url'), 'trim|required|htmlspecialchars');

	if ($this->form_validation->run() === FALSE) {
		$this->load->view('header',array('title'=>$data['title']));
		$this->load->view('blogs/create', $data);
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

		$url = $this->input->post('vi_url');
		parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
		// parse youtube url to get id
		$video_id = $my_array_of_vars['v'];
		// Output: AyLY1CYtB_8
		$video_title =  $this->get_youtube_title($video_id);
		// send id and video title to database table
		$this->videos_model->create_videos($video_id,$video_title);

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

		$this->blog_model->create_blog($blog_image);

		//set messages
		$this->session->set_flashdata('blog_error', $error);

		redirect('blogs');
	}
}

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

public function edit($slug)
{
	//check login
	if (!$this->session->userdata('logged_in')) {
		redirect('home/login');
	}

	$data['blog'] = $this->blog_model->get_blogs($slug);

	//check user
	if ($this->session->userdata('user_id') != $this->blog_model->get_blogs($slug)['created_by']) {
		redirect('blogs');
	}

	$data['categories'] = $this->blog_model->get_categories();

	if (empty($data['blog'])) {
		show_404();
	}

	$data['title'] = 'Edit blog';

	$this->load->view('header',array('title'=>'Edit Blog'));
	$this->load->view('blogs/edit', $data);
	$this->load->view('footer');

}

public function update()
{
	//check login
	if (!$this->session->userdata('logged_in')) {
		redirect('home/login');
	}

	$this->blog_model->update_blog();

	$this->session->set_flashdata('blog_updated', 'Your blog has been updated');

	redirect('blogs');
}
}

?>
