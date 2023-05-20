<?php
class Book_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    
	public function get_books() {
		return $this->db->get('books')->result_array();
	}
	
    public function get_book($id) {
        return $this->db->get_where('books', array('id' => $id))->row_array();
    }

    public function add_book($data) {
        $this->db->insert('books', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('books', $data);
    }

    public function delete_book($id) {
        $this->db->where('id', $id);
        $this->db->delete('books');
    }
}
?>
