<?php
  class Test1 extends MY_Controller
  {
    public function view($page = 'view1') {
      if(!file_exists(APPPATH.'themes/default/admin/views/sample-views/'.$page.'.php')) {
        show_404();
      }

      // Pass variables from this controller to the view page
      $data['someVariable'] = 1;

      // Here we pass as title the name of our $page
      // ucfirst makes sure first letter is capitalized
      $data['title'] = ucfirst($page);

      // Load our view
      // $this->load->view('themes/default/admin/views/sample-views/view1')

      // Load our view and pass data
      // $data is an array of variables
      $this->load->view('themes/default/admin/views/sample-views/'.$page, $data);
    }
  }
