<?php 
class Categories_model extends CI_Model{

	public function get_categories(){
		$this->db->select('c.*,u.name');
		$this->db->order_by('title');
		$this->db->join('users as u','u.id = c.created_by');
		$query = $this->db->get('categories as c');

		return $query->result_array();
	}

	public function get_published_cat(){
		$this->db->select('c.*');
		$this->db->order_by('title');
		$this->db->where('c.published','1');
		$this->db->where('c.type','1');
		$query = $this->db->get('categories as c');
		return $query->result_array();	
	}

	public function get_published_cat_ems(){
		$this->db->select('c.*');
		$this->db->order_by('title');
		$this->db->where('c.published','1');
		$this->db->where('c.type','2');
		$query = $this->db->get('categories as c');
		return $query->result_array();	
	}


    function get_max_data() {
        $result = $this->db->query("SELECT t1.* FROM (SELECT t2.* FROM blogs AS t2 ORDER BY t2.id DESC LIMIT 2) AS t1 ORDER BY t1.id ASC")->result_array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
    }

	public function get_innercat($catid){
		$this->db->select('*');
		$this->db->from('blogs');
		$this->db->where('category_id',$catid);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function get_inner_desc($id){
		$this->db->select('*');
		$this->db->from('description');
		$this->db->where('blogs_id',$id);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function create(){
		$title	=	 $this->input->post('categoryName');
		$type 	= $this->input->post('category_id');
		if ( empty( trim( $title ) ) ) {
			return false;
		}

		$data['title']			= $title;
		$data['type']			= $type;
		$data['created_by']		= $this->session->userdata('user_id');
		$data['created_on']		= date('Y-m-d H:i:s');
		$data['published']		= '1';

		return $this->db->insert('categories', $data);

	} 

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('categories');
		return true;
	}
	public function edit($id,$created_by,$data){
		$this->db->set($data);
		$this->db->where(array('id'=> $id,'created_by'=>$created_by));
		return $this->db->update('categories');
	}

}
