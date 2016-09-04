<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        render($this, 'main');
    }

    public function christopherme() {       
        
        $this->data['title'] = 'Chris Page';
        render($this, 'main');
    }

}
