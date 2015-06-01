<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util_helper')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelnews');
		$this->load->model('admin/modelcategory');

		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data);
		$data['is_news_page'] = false;
		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index(){
		$dataR = Modules::run('right');
		$this->template->set_partial('right','right',$dataR);

		$data = array();

		$search = $this->input->get('txtsearch'); 

		$list_news = $this->modelnews->getNews(array('status'=>1,'title'=>$search),' LIMIT 0,5','created DESC');
		
		$data['list_news'] = $list_news;
		$this->template->build('search',$data);
	}
}