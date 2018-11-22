<?php
class Ajax extends CI_Controller {
        
        /** Carga la vista del formulario de alta (con Ajax clásico)
         */
        public function comprobar_email_clasico() {
            $this->load->view('view_ajax_clasico');
        }

        /** Recibe la petición de Ajax, con el email del usuario por POST.
         *  Devuelve un texto (email OK o email en uso)
         */
        public function check_email() {
            $this->load->model("model_ajax");
            $r = $this->model_ajax->check_email($this->input->get_post("email"));
            if ($r)
                $this->output->set_output("Email OK");
            else
                $this->output->set_output("Ese email ya está en uso en el sistema");
        }
?>