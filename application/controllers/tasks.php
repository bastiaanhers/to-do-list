<?php
    class tasks extends CI_Controller{
        public function index(){

            $data['title'] = "Your task lists";
            $data['tasks'] = $this->tasks_model->get_tasks();

            $this->load->view('templates/header');
            $this->load->view('tasks/index' , $data);
            $this->load->view('templates/footer');
           
        }
        public function create($id){
            $data['id'] = $id;
            //validate post values
            $this->form_validation->set_rules('Name', 'Name','required');

            //check if validation passed
            if($this->form_validation->run() == FALSE){
                //stay on create is validation fails  
                $this->load->view('templates/header');
                $this->load->view('tasks/create' , $data);
                $this->load->view('templates/footer');
            } else {
                //save list to db
                $this->tasks_model->create_task($id);
                //load index
                redirect('lists/view/'.$id);
            }
        }
    }