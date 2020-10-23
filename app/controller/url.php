<?php
class ControllerToolUrl extends Controller {
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