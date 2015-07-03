<?php
	namespace Scaffolding;

	use System\Controller\Controller;

	class Scaffolding extends Controller{
		public function actionHome(){
			return self::Template('.vendor/gcsystem/scaffolding/src/template/home', 'scaffolding-home')->show();
		}

		public function actionEntity($entity){
			return self::Template('.vendor/gcsystem/scaffolding/src/template/entity', 'scaffolding-entity')->show();
		}

		public function actionInsert($entity, $id){
			return self::Template('.vendor/gcsystem/scaffolding/src/template/', 'scaffolding-insert')->show();
		}

		public function actionUpdate($entity, $id){
			return self::Template('.vendor/gcsystem/scaffolding/src/template/', 'scaffolding-update')->show();
		}

		public function actionDelete($entity, $id){
			return self::Template('.vendor/gcsystem/scaffolding/src/template/', 'scaffolding-delete')->show();
		}
	}