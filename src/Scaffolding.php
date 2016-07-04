<?php
	namespace Scaffolding;

	use System\Controller\Controller;
	use System\Template\Template;

	/**
	 * Class Scaffolding
	 * @package Scaffolding
	 */

	class Scaffolding extends Controller{

		/**
		 * @return string
		 * @access public
		 */

		public function actionHome(){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/home', 'scaffolding-home'))
				->assign('title', 'Home')
				->show();
		}

		/**
		 * @param string $entity
		 * @return string
		 * @access public
		 */

		public function actionEntity($entity){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/entity', 'scaffolding-entity'))
				->assign('title', $entity)
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 */

		public function actionInsert($entity, $id){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/insert', 'scaffolding-insert'))
				->assign('title', $entity.' - insert')
				->assign('id', $id)
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 */

		public function actionInsertSave($entity, $id){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/insert', 'scaffolding-insert'))
				->assign('title', $entity.' - insert')
				->assign('id', $id)
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 */

		public function actionUpdate($entity, $id){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/update', 'scaffolding-update'))
				->assign('title', $entity.' - update')
				->assign('id', $id)
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 */

		public function actionUpdateSave($entity, $id){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/insert', 'scaffolding-insert'))
				->assign('title', $entity.' - insert')
				->assign('id', $id)
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 */

		public function actionDelete($entity, $id){
			return (new Template('.vendor/gcsystem/scaffolding/src/template/delete', 'scaffolding-delete'))
				->assign('title', $entity.' - delete')
				->assign('id', $id)
				->show();
		}
	}