<?php
	namespace Scaffolding;

	use System\Controller\Controller;
	use System\Template\Template;

	class Scaffolding extends Controller{
		public function actionHome(){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/home', 'scaffolding-home'))
				->assign('title', 'Home')
				->show();
		}

		public function actionEntity($entity){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/entity', 'scaffolding-entity'))
				->assign('title', $entity)
				->show();
		}

		public function actionInsert($entity){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/insert', 'scaffolding-insert'))
				->assign('title', $entity.' - insert')
				->show();
		}

		public function actionUpdate($entity, $id){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/update', 'scaffolding-update'))
				->assign('title', $entity.' - update')
				->assign('id', $id)
				->show();
		}

		public function actionDelete($entity, $id){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/delete', 'scaffolding-delete'))
				->assign('title', $entity.' - delete')
				->assign('id', $id)
				->show();
		}
	}