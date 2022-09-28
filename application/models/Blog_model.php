<?php 
class Blog_model extends CI_Model{

function get_blogs($slug = FALSE, $limit = FALSE, $offset = FALSE){
	$numbers = array(1,2);
if ($limit) {
$this->db->limit($limit, $offset);
}

if ($slug===FALSE) {
$this->db->select('b.*,e.title as catle');
$this->db->order_by('b.id', 'DESC');
// $this->db->join('description as c', 'c.blogs_id = b.id');
$this->db->join('categories as e', 'e.id = b.category_id');
$this->db->where_in('b.created_by',$numbers);
$this->db->where('e.type',1);
$this->db->limit(2); 
$query = $this->db->get('blogs as b');
return $query->result_array();
}


// if ($slug===FALSE) {
// 	$this->db->select('b.*,GROUP_CONCAT(c.blogs_id SEPARATOR ',') as description.blogs_id,description.description_id,description.description,description.created_on,description.created_by');
// 	$this->db->join('description as c', 'c.blogs_id = b.id');
// 	$this->db->where('c.created_by','2');
// 	$query = $this->db->get('blogs as b');
// 	return $query->result_array();
// }
else{
$this->db->select('b.*,c.*');
$this->db->join('description as c', 'c.blogs_id = b.id');
$query = $this->db->get_where('blogs as b', array('slug' =>  $slug));
return $query->row_array();
}


}


// ems


function get_blogs_ems($slug = FALSE, $limit = FALSE, $offset = FALSE){
	$numbers = array(1,2);
if ($limit) {
$this->db->limit($limit, $offset);
}

if ($slug===FALSE) {
$this->db->select('b.*,e.title as catle');
$this->db->order_by('b.id', 'DESC');
// $this->db->join('description as c', 'c.blogs_id = b.id');
$this->db->join('categories as e', 'e.id = b.category_id');
$this->db->where_in('b.created_by',$numbers);
$this->db->where('e.type',2);
$this->db->limit(2); 
$query = $this->db->get('blogs as b');
return $query->result_array();
}

// if ($slug===FALSE) {
// 	$this->db->select('b.*,GROUP_CONCAT(c.blogs_id SEPARATOR ',') as description.blogs_id,description.description_id,description.description,description.created_on,description.created_by');
// 	$this->db->join('description as c', 'c.blogs_id = b.id');
// 	$this->db->where('c.created_by','2');
// 	$query = $this->db->get('blogs as b');
// 	return $query->result_array();
// }
else{
$this->db->select('b.*,c.*');
$this->db->join('description as c', 'c.blogs_id = b.id');
$query = $this->db->get_where('blogs as b', array('slug' =>  $slug));
return $query->row_array();
}


}

// ems





// get type start

  // Get cities
  function getType(){

	$response = array();
	
	// Select record
	$this->db->select('*');
	$q = $this->db->get('type');
	$response = $q->result_array();

	return $response;
}



// get type end

  // Get City departments
  function getcategory($postData){
	$response = array();	
	// Select record
	$this->db->select('id,title');
	$this->db->where('published','1');
	$this->db->where('type', $postData['city']);
	$q = $this->db->get('categories');
	$response = $q->result_array();

	return $response;
}



function get_blogs_two($slug = FALSE, $limit = FALSE, $offset = FALSE){
	$numbers = array(1,2);
	if ($limit) {
	$this->db->limit($limit, $offset);
	}
	
	if ($slug===FALSE) {
	$this->db->select('b.*,e.title as catle,c.*');
	$this->db->order_by('b.id', 'DESC');
	$this->db->join('description as c', 'c.blogs_id = b.id');
	$this->db->join('categories as e', 'e.id = b.category_id');
	$this->db->where('c.created_by',$numbers);
	$this->db->where_in('b.created_by',$numbers);
	$query = $this->db->get('blogs as b');
	return $query->result_array();
	}
	
	else{
	$this->db->select('b.*,c.*');
	$this->db->join('description as c', 'c.blogs_id = b.id');
	$query = $this->db->get_where('blogs as b', array('slug' =>  $slug));
	return $query->row_array();
	}
	
	
	}



public function save_blog($post_image,$video_id,$video_title){
$slug = url_title($this->input->post('title'));

$data = array(
'title' 		=> $this->input->post('title'),
'category_id' 	=> $this->input->post('category_id'),
'slug' 			=> $slug,
'description' 	=> $this->input->post('description'),
'v_name' 	=> $video_title,
'v_url' 	=> $video_id,
'created_by' 	=> $this->session->userdata('user_id'),
'blog_image' 	=> $post_image,
'created_on'	=> date('Y-m-d H:i:s')
);

return $this->db->insert('blogs', $data);
}


public function create_blog($precio_total){

$precio_total = $this->input->post('count_items');
for($i=1;$i<=$precio_total;$i++){
$data[] = array(
'description' 	=> $this->input->post('description'.$i.''),
'blogs_id' => $this->db->insert_id(),
'order_no' => $i,
'created_by' 	=> $this->session->userdata('user_id'),
'created_on'	=> date('Y-m-d H:i:s')
);
}


try {
//code...
for($x=0;$x<$precio_total; $x++){
	$this->db->insert('description', $data[$x]);	
}
return 'sucess';
} catch (Exception $e) {
//throw $th;
return 'failed';
}

}

public function delete_blog($id)
{
$image_file_name = $this->db->select('blog_image')->get_where('blogs', array('id' => $id))->row()->blog_image;
$cwd = getcwd(); // saving the current working directory
$image_file_path = $cwd."\\application\\assets\\images\\blogs\\";
//var_dump($cwd,$image_file_path,$image_file_name);die;
chdir($image_file_path);
unlink($image_file_name);
chdir($cwd); // Restore the previous working directory
$this->db->where('id', $id);
$this->db->delete('blogs');
return true;
}

public function delete_description($id)
{
	$this -> db -> where('blogs_id', $id);
    $this -> db -> delete('description');
}


// **********************



public function db_update($data,$id)
{
$this->db->where('id', $id);       
$this->db->update('blogs', $data);
}


public function editModel($id){
$query = $this->db->get_where('blogs', ['id' => $id]);
return $query->row();

// $query1 = $this->db->get('description');
// $query2 = $this->db->query("SELECT * FROM  blogs WHERE id='$id'");
// $return array('description' => $query1, 'blogs' => $query2);
}



public function editDescription($id){
// $query = $this->db->get_where('description', ['blogs_id' => $id]);
// return $query->row();
$this->db->select('*');
$this->db->from('description');
$this->db->where('blogs_id',$id);
$query=$this->db->get();
return $query;
}

public function updateModel($data,$id){
return   $this->db->update('blogs', $data, ['id' => $id]);   	
}




public function updateDesc($count_itemscryto,$id){

$count_itemscryto = $this->input->post('count_itemscryto');
for($i=1;$i<=$count_itemscryto;$i++){
$data[] = array(
	'description' 	=> $this->input->post('description'.$i.'')
	// 'order_no' => $i,
	);
	$datanew[] = array(
		'description' 	=> $this->input->post('description'.$i.''),
		'blogs_id' => $id,
		'order_no' => $i,
		'created_by' 	=> $this->session->userdata('user_id'),
		'created_on'	=> date('Y-m-d H:i:s')
		);
}


try {
	//code...
	for($x=0, $k=1;$x<$count_itemscryto && $k<=$count_itemscryto; $x++,$k++){
		$array = array('blogs_id' => $id, 'order_no' => $k);
		$this->db->where($array);
		$q = $this->db->get('description');
		if ( $q->num_rows() > 0 ) 
		{
		$this->db->update('description', $data[$x],$array);	
		}
		else {
			$this->db->insert('description', $datanew[$x]);
		 }
	}
	return 'sucess';
} catch (Exception $e) {
	//throw $th;
	return 'failed';
}

}










public function countDescription($id){
$this->db->where('blogs_id',$id);
return $this->db->get('description')->num_rows();
}


public function update_blog1($post_image,$video_id,$video_title)
{
$slug = url_title($this->input->post('title'));

$data = array(
'title' 		=> $this->input->post('title'),
'slug' 			=> $slug,
'v_name' 	=> $video_title,
'v_url' 	=> $video_id,
'blog_image' 	=> $post_image,
'description'	=> $this->input->post('description'),
'modified_by'	=> $this->session->userdata('user_id')
);

$this->db->where('id', $this->input->post('id'));
return $this->db->update('blogs', $data);
}

public function update_blog2($video_id,$video_title)
{
$slug = url_title($this->input->post('title'));

$data = array(
'title' 		=> $this->input->post('title'),
'slug' 			=> $slug,
'v_name' 	=> $video_title,
'v_url' 	=> $video_id,
'description'	=> $this->input->post('description'),
'modified_by'	=> $this->session->userdata('user_id')
);

$this->db->where('id', $this->input->post('id'));
return $this->db->update('blogs', $data);
}



//************************** */

public function update_blog()
{
$slug = url_title($this->input->post('title'));

$data = array(
'title' 		=> $this->input->post('title'),
'slug' 			=> $slug,
'description'	=> $this->input->post('description'),
'v_url' 	=> $this->input->post('v_url'),
'modified_by'	=> $this->session->userdata('user_id')
);

$this->db->where('id', $this->input->post('id'));
return $this->db->update('blogs', $data);
}

public function get_categoryies($catype)
{
$this->db->order_by('title');
$this->db->where('published','1');
$this->db->where('type',$catype);
$query = $this->db->get('categories');
return $query->result_array();
}

public function get_categories()
{
$this->db->order_by('title');
$this->db->where('published','1');
$query = $this->db->get('categories');
return $query->result_array();
}


// 2.25 getting type

public function get_categoriesoftype($catgory_id) {
 
	$this->db->from('categories');
	
	$this->db->where('id', $catgory_id);
	
	$query = $this->db->get();
	
	if($query->num_rows()>0) {
	
	$data = $query->row_array();
	
	$value = $data['type'];
	
	return $value;
	
	} else {
	
	return false;
	
	}
	}
	
	


// 2.25 getting type end






// public function get_blogs_by_category($category_id){
// 	$this->db->order_by('blogs.id', 'DESC');
// 	$this->db->join('categories', 'categories.id = blogs.category_id');
// 		$query = $this->db->get_where('blogs', array('category_id' => $category_id));
// 		return $query->result_array();
// }



public function get_blogs_by_category($category_id){
$this->db->order_by('blogs.id', 'DESC');
$this->db->join('description', 'blogs.id = description.description_id');
$this->db->join('categories', 'categories.id = blogs.category_id');
$query = $this->db->get_where('blogs', array('id' => $category_id));
return $query->result_array();
}

public function search($query = '', $cat, $limit = FALSE, $offset = FALSE){
$this->db->select('b.*,c.title as `category_title`');

if(!empty($query))
$this->db->like('b.title',$query);

if ($cat != 'AllCategory')
$this->db->where('c.id',$cat);

$this->db->join('categories as c','c.id = b.category_id','left');
$this->db->order_by('b.id', 'DESC');
$this->db->where('c.published','1');
if ($limit) {
$this->db->limit($limit, $offset);
}
//var_dump($this->db->get_compiled_select('blogs as b'));die;
$query = $this->db->get('blogs as b');
return $query->result_array();
}



// comments section two


// 1


	public function Count_Comment()
	{

		// $ne_id = $this->input->post('ne_id');
		$all_users=$this->db->select()
						->from('commentstwo')
						// ->where('blog_id',$ne_id)
						->get();
		return $all_users->num_rows();

		// $all_users=$this->db->select()
		// 				    ->get('commentstwo');
		// return $all_users->num_rows();
	}


// 1.2




public function countComt($id)
{

	
	$all_users=$this->db->select()
					->from('commentstwo')
					->where('blog_id',$id)
					->get();
	return $all_users->num_rows();

}


// 2



	public function Count_replies()
	{
		$all_users=$this->db->select()
						    ->get('comments_replies');
		return $all_users->num_rows();
	}


// 3



	public function affected_comment($comments)
	{

		 $one_post=$this->db->select()
							->from('commentstwo')
							// ->where('commentstwo.user_name',$uid)
							->where('commentstwo.comments',$comments)
							->order_by('commentstwo.id','DESC')
							->limit(1)
							->get();
		   return $one_post->row();	
	}


// 4



	public function createData($data)
	{
		$query = $this->db->insert('person',$data);
		return $query;
	}


// 5
	


   public function addcomment($data)
	{

	
		$this->db->insert('commentstwo', $data);
		if ($this->db->affected_rows() >0) {
			# code...
			return true;
		}
		else{
			return false;
		}

	}




// 6

	public function addreply()
	{
		# code...
		date_default_timezone_set('Asia/Kolkata');

		$field  = array('comment_id' => $this->input->post('commentid'), 
						'reply' => $this->input->post('replycomment'), 
						'createdOn'=>date('Y-m-d H:i:s')
			);
		$this->db->insert('comments_replies', $field);
		if ($this->db->affected_rows() >0) {
			# code...
			return true;
		}
		else{
			return false;
		}

	}




// 7 		

    public function allComment($ne_id)
	{

		$all_users=$this->db->select('')
							->from('commentstwo')
							->where('blog_id',$ne_id)
						    ->order_by('id', 'DESC')
						    ->get();
		return $all_users->result();
	}





// 10



public function get_allcomment($id){
	$this->db->select('*');
	$this->db->from('commentstwo');
	$this->db->where('blog_id',$id);
	$query=$this->db->get();
	return $query->result_array();
}


public function get_allreplies($id){
	$this->db->select('*');
	$this->db->from('comments_replies');
	$this->db->where('comment_id',$id);
	$query=$this->db->get();
	return $query->result_array();
}




// 8



public function comment_replies($cid)
{
	# code...
	$query= $this->db->select('')
					->from('comments_replies')
					->where('comments_replies.comment_id',$cid)
					->get();
	if ($query->num_rows()>0) {
		# code...
		return $query->result();
	}
	else{
			return false;
	}
}








// 9


public function topComment($ne_id)
{

	$all_users=$this->db->select('')
						->from('commentstwo')
						->where('blog_id',$ne_id)
						->order_by('id', 'DESC')
						->get();
	return $all_users->result();
}




}
?>
