<?php

class Books extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('book_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['books'] = $this->book_model->get_books();
        $this->load->view('books/index', $data);
    }

    public function add() {
        $this->load->view('books/add');
    }

    public function store() {
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price')
        );

        $this->book_model->add_book($data);
        redirect('books/index');
    }

    public function edit($id) {
        $data['book'] = $this->book_model->get_book($id);
        $this->load->view('books/edit', $data);
    }

    public function update($id) {
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price')
        );

        $this->book_model->update($id, $data);
        redirect('books/index');
    }

    public function delete($id) {
        $this->book_model->delete_book($id);
        redirect('books/index');
    }
}
?>
