<?php

namespace controllers;


class Home extends \classes\Controller{
	protected function Index(){
		$viewModel = new models\HomeModel();
		$this->ReturnView($viewModel->Index(), true);
	}
}