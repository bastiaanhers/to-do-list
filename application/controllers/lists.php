<?php
    class lists extends CI_Controller{
        public function index(){
            //get data for index page
            $data['title'] = "Your task lists";
            $data['lists'] = $this->lists_model->get_lists();

            //load index page
            $this->load->view('templates/header');
            $this->load->view('lists/index' , $data);
            $this->load->view('templates/footer');   
        }

        public function create(){
            //get date for create page
            $data['title'] = "create list";
            $data['lists'] = $this->lists_model->get_lists();

            //validate post values
            $this->form_validation->set_rules('Name', 'Name','required');

            //check if validation passed
            if($this->form_validation->run() == FALSE){
                //stay on create is validation fails  
                $this->load->view('templates/header');
                $this->load->view('lists/create' , $data);
                $this->load->view('templates/footer');
            } else {
                //save list to db
                $this->lists_model->create_list();
                //load index
                redirect('lists');
            }
        }
    }
?>