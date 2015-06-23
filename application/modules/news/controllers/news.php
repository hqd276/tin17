<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelnews');
		$this->load->model('admin/modelcategory');

		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($type = 0,$cat = 0){
		$dataR = Modules::run('right',$type);
		$this->template->set_partial('right','right',$dataR);

		$data = array();
		$data['title'] = "News";
		$data['page'] = "news";

		if ($cat>0){
			$category = $this->modelcategory->getCategoryById($cat);
			$data['cat'] = $category;
			$list_news = $this->modelnews->getNews(array('category_id'=>$cat),' LIMIT 0,5');
		}else{
			$data['cat'] = array('type'=>$type,'id'=>0,'name'=>'');
			$list_news = $this->modelnews->getNews(array('type'=>$type),' LIMIT 0,5');
		}

		$data['list_news'] = $list_news;
		$this->template->build('news',$data);
	}
	public function index_t($slug = '',$page = 1){
		$dataR = Modules::run('right',0);
		$this->template->set_partial('right','right',$dataR);

		if($page<1)
			$page=1;
		$item_per_page = 20;
		$begin = ($page-1) * $item_per_page;

		$data = array();

		$category = $this->modelcategory->getCategoryBy('slug',$slug);
		if ($category){
			$data['cat'] = $category;
			$data['title'] = $category['name'];
			$data['description'] = $category['description'];
			$list_news = $this->modelnews->getNews(array('category_id'=>$category['id'])," LIMIT ".$begin.",".($item_per_page+1),' id DESC');
		}
		
		$newer_link = '';
		if(count($list_news)>$item_per_page){
			$newer_link = base_url().'danh-muc/'.$slug.'/'.($page+1);
			unset($list_news[$item_per_page]);
		}
		$older_link = '';
		if ($page>1) {
			$older_link = base_url().'danh-muc/'.$slug.'/'.($page-1);
		}
		$data['newer_link'] = $newer_link;
		$data['older_link'] = $older_link;

		$data['list_news'] = $list_news;
		$this->template->build('news',$data);
	}
	public function detail($id=0) {
		if ($id<=0) 
			redirect(base_url().'news');

		$detail_news = $this->modelnews->getNewsById($id);
		if (!$detail_news)
			redirect(base_url().'news');

		$other_news = array();
		if($detail_news['category_id']>0){
			$category = $this->modelcategory->getCategoryById($detail_news['category_id']);
			if ($category)
				$other_news = $this->modelnews->getNews(array('category_id'=>$category['id']),' LIMIT 0,5');
			else
				$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"");
		}else{
			$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"");
			$other_news = $this->modelnews->getNews(array('type'=>$detail_news['type']),' LIMIT 0,5');
		}
		

		$dataR = Modules::run('right',$detail_news['type']);
		$this->template->set_partial('right','right',$dataR);

		$data['other_news'] = $other_news;
		$data['item'] = $detail_news;
		$data['cat'] = $category;
		$this->template->build('news-detail',$data);
	}

	public function detail_t($slug='') {
		if ($slug == '') 
			redirect(base_url().'news');

		$detail_news = $this->modelnews->getNewsBy($slug,'slug');
		if (!$detail_news)
			redirect(base_url().'news');

		$other_news = array();
		if($detail_news['category_id']>0){
			$category = $this->modelcategory->getCategoryById($detail_news['category_id']);
			if ($category)
				$other_news = $this->modelnews->getNews(array('category_id'=>$category['id']),' LIMIT 0,5');
			else
				$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"","slug"=>"");
		}else{
			$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"","slug"=>"");
			$other_news = $this->modelnews->getNews(array('type'=>$detail_news['type']),' LIMIT 0,5');
		}
		$strTags = '';
		if ($detail_news['tag']!=''){
			$tags = explode(',', $detail_news['tag']);
			foreach ($tags as $key => $value) {
				$strTags .= "<a href='".base_url('/search?txtsearch='.$value)."'>".$value."</a> , ";
			}
		}
		$detail_news['tags'] = $strTags;
		
		$this->modelnews->updateNewsBy('slug',$slug,array('views'=>$detail_news['views']+1));

		$dataR = Modules::run('right',$detail_news['type']);
		$this->template->set_partial('right','right',$dataR);

		$data['title'] = $detail_news['title'] ;
		$data['other_news'] = $other_news;
		$data['item'] = $detail_news;
		$data['cat'] = $category;
		$this->template->build('news-detail',$data);
	}
}