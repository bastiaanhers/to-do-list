<?php
    class tasks extends CI_Controller{
        public function index(){

            $data['title'] = "Your task lists";
            $data['tasks'] = $this->tasks_model->get_tasks();

            $this->load->view('templates/header');
            $this->load->view('tasks/index' , $data);
            $this->load->view('templates/footer');
            print_r($data);
        }
    }