<?php
	namespace Scaffolding\Controller;

	use System\Controller\Controller;

	class Scaffolding extends Controller{
		public function actionInsert(){
			return $this->showDefault();
		}
	}