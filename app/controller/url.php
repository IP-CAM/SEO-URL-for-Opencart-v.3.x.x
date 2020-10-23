<?php
/**
 * @author		Dmitriy Sokolenko
 * @copyright	Copyright (c) 2020
 * @license		https://opensource.org/licenses/GPL-3.0
 */

/**
 * ControllerToolUrl class
 */
class ControllerToolUrl extends Controller {
	/**
	 * @return void
	 */
	public function index() {
		if (!empty($this->request->post)) {
			$this->load->model('tool/url');

			$result = array();

			foreach ($this->request->post as $language_id => $name) {
				$result[$language_id] = $this->model_tool_url->rewrite($name);
			}

			$json['result'] = $result;
		} else {
			$json['result'] = '';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}