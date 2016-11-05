<?php
	namespace Scaffolding;

	use System\Controller\Controller;
	use System\Template\Template;

	/**
	 * Class Scaffolding
	 * @package Scaffolding
	 * @Before(class="\Scaffolding\Scaffolding", method="init")
	 */

	class Scaffolding extends Controller{

		/**
		 * @return string
		 * @access public
		 * @Routing(name="gcs.scaffolding.default", url="/gcs/scaffolding(/*)", method="get")
		 */

		public function actionHome(){
			return (new Template('.' . VENDOR_PATH . 'gcsystem/scaffolding/src/template/home', 'scaffolding-home'))
				->assign('title', 'Home')
				->show();
		}

		/**
		 * @param string $entity
		 * @return string
		 * @access public
		 * @Routing(name="gcs.scaffolding.insert", url="/gcs/scaffolding/insert/([a-zA-Z]+)(/*)", vars="entity", method="get")
		 */

		public function actionInsert($entity){
			return (new Template('.' . VENDOR_PATH . 'gcsystem/scaffolding/src/template/insert', 'scaffolding-insert'))
				->assign('title', $entity)
				->show();
		}

		/**
		 * @param string $entity
		 * @return string
		 * @access public
		 * @Routing(name="gcs.scaffolding.insert-save", url="/gcs/scaffolding/insert/([a-zA-Z]+)(/*)", vars="entity", method="post")
		 */

		public function actionInsertSave($entity){
			return (new Template('.' . VENDOR_PATH . 'gcsystem/scaffolding/src/template/entity', 'scaffolding-entity'))
				->assign('title', $entity.' - insert')
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 * @Routing(name="gcs.scaffolding.update", url="/gcs/scaffolding/update/([a-zA-Z]+)/([0-9]+)(/*)", vars="entity,id", method="get")
		 */

		public function actionUpdate($entity, $id){
			return (new Template('.' . VENDOR_PATH . 'gcsystem/scaffolding/src/template/update', 'scaffolding-update'))
				->assign('title', $entity.' - update')
				->assign('id', $id)
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 * @Routing(name="gcs.scaffolding.update", url="/gcs/scaffolding/update/([a-zA-Z]+)/([0-9]+)(/*)", vars="entity,id", method="put")
		 */

		public function actionUpdateSave($entity, $id){
			return (new Template('.' . VENDOR_PATH . 'gcsystem/scaffolding/src/template/entity', 'scaffolding-entity'))
				->assign('title', $entity)
				->show();
		}

		/**
		 * @param string $entity
		 * @param string $id
		 * @return string
		 * @access public
		 * @Routing(name="gcs.scaffolding.delete", url="/gcs/scaffolding/delete/([a-zA-Z]+)/([0-9]+)(/*)", vars="entity,id", method="get")
		 */

		public function actionDelete($entity, $id){
			return (new Template('.' . VENDOR_PATH . 'gcsystem/scaffolding/src/template/delete', 'scaffolding-delete'))
				->assign('title', $entity.' - delete')
				->assign('id', $id)
				->show();
		}

		/**
		 * @param string $entity
		 * @return string
		 * @access public
		 * @Routing(name="gcs.scaffolding.entity", url="/entity/([a-zA-Z]+)(/*)", method="get")
		 */

		public function actionEntity($entity){
			return (new Template('.' . VENDOR_PATH . 'gcsystem/scaffolding/src/template/entity', 'scaffolding-entity'))
				->assign('title', $entity)
				->show();
		}
	}