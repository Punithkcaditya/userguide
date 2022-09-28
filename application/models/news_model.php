<?php 

class News_model extends CI_Model
{

    // get all news
    function get_all()
    {
        $query = $this->db->get('blogs');
        return $query->result_array();
    }
    // get one news article by its id
    function get_one($ne_id)
    {
        // $this->db->get_where('blogs', array('id' => $ne_id));
        // $query = $this->db->get('blogs');
        // return $query->row();
		$query = $this->db->get_where('blogs', ['id' => $ne_id]);
		return $query->row();
    }


	function get_view($ne_id)
    {
        // $this->db->get_where('blogs', array('id' => $ne_id));
        // $query = $this->db->get('blogs');
        // return $query->row();
		$query = $this->db->get_where('description', ['blogs_id' => $ne_id]);
		return $query->row();
    }

}

?>


