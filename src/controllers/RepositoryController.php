<?php

class RepositoryController extends Controller {

	public function __construct(ViewModel $model) {
		parent::__construct($model);
	}

	public function lst() {
		// razeni
		if(isset($_GET['sort']) && isset($_GET['order'])) {
			$this->model->setSort($_GET['sort'], $_GET['order']);
		}
		// strankovani
		if(isset($_GET['page'])) {
			$this->model->setPage($_GET['page']);
		}
		// filtrovani
		if(isset($_GET['criterium'])) {
			$this->search($_GET['criterium']);
		}
	}
	// PRIDAT
	public function add() {
		if(count($_POST))
			$this->model->save($_POST, $_FILES);
	}
	// FILTR
	private function search($criterium = '') {
		$this->model->setCriteria($criterium);
	}
	// SMAZANI
	public function delete($id) {
			$this->model->delete($id);
	}
	// SMAZANI
	public function deleteElement($id) {
			$this->model->deleteElement($id);
	}
	// CLEAR
	public function clear($id) {
			$this->model->clear($id);
	}
	// DETAIL
	public function show($id = 0) {
		$this->model->setId($id);
	}

	public function edit($id = 0) {
		$this->model->setId($id);
		if(count($_POST))
			$this->model->edit($_POST, $_FILES);
	}
}

?>