<?php

class ErrorController extends Controller { 

	public function __construct(ViewModel $model) {
		parent::__construct($model);
	}

	public function auth() {
		$this->model->setMessage('K zobrazení této stránky nemáte oprávnění.');
	}

}

?>