<?php
	namespace Scaffolding;

	use System\Controller\Controller;

	class Scaffolding extends Controller{
		public function actionHome(){
			return self::Template('.vendor/gcsystem/scaffolding/template/home', 'scaffolding-home')->show();
		}

		public function actionEntity($entity){
			return self::Template('.vendor/gcsystem/scaffolding/template/entity', 'scaffolding-entity')->show();
		}

		public function actionInsert($entity){
			return self::Template('.vendor/gcsystem/scaffolding/template/', 'scaffolding-insert')->show();
		}

		public function actionUpdate($entity){
			return self::Template('.vendor/gcsystem/scaffolding/template/', 'scaffolding-update')->show();
		}

		public function actionDelete($entity){
			return self::Template('.vendor/gcsystem/scaffolding/template/', 'scaffolding-delete')->show();
		}
	}