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
        public function view($id){
            //get data for index page
            $data['listID'] = $id;
            $data['list'] = $this->lists_model->get_list($id);
            //load index page
            $this->load->view('templates/header');
            $this->load->view('lists/view' , $data);
            $this->load->view('templates/footer');   
        }

        public function delete($listID){
            $this->lists_model->delete_list($listID);
            redirect('lists');
        }

        public function edit($listID){
            $data['title'] = 'edit list';
            $data['listID'] = $listID;
            $data['list'] = $this->lists_model->get_list($listID);

            $this->load->view('templates/header');
            $this->load->view('lists/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($listID){
                $this->lists_model->update_list($listID);
                redirect('lists/view/'.$listID);
        }
        
    }
?>