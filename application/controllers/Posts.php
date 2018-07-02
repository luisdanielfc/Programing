<?php
    class Posts extends CI_Controller{
        public function index(){ 
            //$this->load->model("posts_model");
            $data["title"] = "Ultimos Posts";
            $data["posts"] = $this->posts_model->get_posts();
            //print_r($data["posts"]);
            $this->load->view("templates/header");
            //Esto se debe llamar igual que la pagina en que va a utilizar
            $this->load->view("posts/index", $data);
            $this->load->view("templates/footer");
        }

        public function view($slug = NULL){
            $data["post"] = $this->posts_model->get_posts($slug);

            if(empty($data["post"])){
                print_r("ESTA VACIO");
            }

            $data["title"] = $data["post"]["title"];
            $this->load->view("templates/header");
            //Esto se debe llamar igual que la pagina en que va a utilizar
            $this->load->view("posts/view", $data);
            $this->load->view("templates/footer");
        }

        public function create(){
            $data["title"] = "create Post";

            $this->form_validation->set_rules("title", "Title", "required");
            $this->form_validation->set_rules("body", "Body", "required");

            if($this->form_validation->run() == FALSE){
                $this->load->view("templates/header");
                //Esto se debe llamar igual que la pagina en que va a utilizar
                $this->load->view("posts/create", $data);
                $this->load->view("templates/footer");
                //print_r("NO SE VALE");
            }
            else {
                $this->posts_model->create_post();
                redirect("posts");
            }    
        }

        public function delete($id){
            $this->posts_model->delete_post($id);
            redirect("posts");
        }

        public function edit($slug){
            $data["post"] = $this->posts_model->get_posts($slug);

            if(empty($data["post"])){
                print_r("ESTA VACIO");
            }

            $data["title"] = "Edit Posts";
            $this->load->view("templates/header");
            //Esto se debe llamar igual que la pagina en que va a utilizar
            $this->load->view("posts/edit", $data);
            $this->load->view("templates/footer"); 
        }

        public function update(){
            $this->posts_model->update_post();
            redirect("posts"); 
        }

    }
?>