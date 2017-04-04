<?php
class ControllerModuleTGtechstoreRevolutionSlider extends Controller {
	public function index($setting) {
		
		$this->load->model('slider/tg_techstore_revolution_slider');

		$data['slider'] = $this->model_slider_tg_techstore_revolution_slider->getSlider($setting['slider_id']);
		
		$data['language_id'] = $this->config->get('config_language_id');

		return $this->load->view('module/tg_techstore_revolution_slider', $data);
	}
}
?>