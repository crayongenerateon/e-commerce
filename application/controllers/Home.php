<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
        //$data['show_banner'] = $this->Setting_model->get(array('key' => 'show_banner'));
        
        //$data['banner'] = $this->Banner_model->get(array('limit' => 5));
        $data['title'] = 'Home';
        //$data['catalogCategory'] = $this->Catalog_model->get_category(array('limit' => 5));
        //$data['catalogBrand'] = $this->Brand_model->get(array('limit' => 5));
        //$data['catalog'] = $this->Catalog_model->get(array('limit' => 8, 'publish' => 1));
        //$data['posting'] = $this->Posting_model->get(array('limit' => 5, 'status' => 1));

        $data['main'] = 'main';
        //$data['widget'] = 'widget/category-brand';
        $this->load->view('layout', $data);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */