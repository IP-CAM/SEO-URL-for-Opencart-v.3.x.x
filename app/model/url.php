<?php
class ModelToolUrl extends Model {
	public function rewrite($name, $options = array()) {
		$str = mb_convert_encoding((string)$name, 'UTF-8', mb_list_encodings());

		$str = preg_replace('/[^\p{L}\p{Nd}]+/u', '-', $str);

		$str = preg_replace('/(' . preg_quote('-', '/') . '){2,}/', '$1', $str);

		$str = trim($str, '-');

		return mb_strtolower($str, 'UTF-8');
	}
}