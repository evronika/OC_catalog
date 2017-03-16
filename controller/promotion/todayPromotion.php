<?php
	class ControllerPromotionTodayPromotion extends Controller {
		public function index(){
			$this->load->model('pricelist/price');
			$tmp_categories = $this->model_pricelist_price->get_subcategories($category_id);
			$this->language->load('pricelist/price');
			$this->language->get('heading_title');
			$this->language->get('footer_title');
			$this->data['category'] = $this->category;
	} 
	}