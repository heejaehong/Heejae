<?php
class ControllerModuleTGtechstoreMegamenu extends Controller {
		public function index($setting) {
		
		$this->load->model('menu/tg_techstore_megamenu');

		$data['menu'] = $this->model_menu_tg_techstore_megamenu->getMenu();

		$lang_id = $this->config->get('config_language_id');
		$data['settings'] = array(
			
			'animation' => $setting['animation'],
			'animation_time' => $setting['animation_time'],
		);

		$data['lang_id'] = $this->config->get('config_language_id');

		return $this->load->view('module/tg_techstore_megamenu', $data);
	}
}
?>