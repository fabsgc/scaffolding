Informations :
-----------

* Open-Source
* Version  : 3.1 Bêta
* Author : Fabien Beaujean
* Contributors : Lucas5190, t1307
* Description : GCsystem Framework scaffolding plugin

Installation :
-----------

* In composer add

```json
"autoload": {
	"psr-4": {
		"Scaffolding\\" : "vendor/gcsystem/scaffolding/src"
	}
},
```

Then, create a new controller and change the `extends Controller` by `extends \Scaffolding\Scaffolding`

```php
<?php
	namespace Gcs;

	use System\Config\Config;
	use System\Response\Response;

	/**
	 * Class Scaffolding
	 * @package Gcs
	 * @Before(class="\Gcs\Scaffolding", method="init")
	 */

	class Scaffolding extends \Scaffolding\Scaffolding {

		public function init() {
			if (Config::config()['user']['debug']['environment'] != 'development') {
				Response::instance()->status(404);
			}
		}
	}
```	

There are five actions and all except the first take one or two GET parameters : "entity" (the entity name) and id (the primary key) : 

 - **home**
 - **entity**
 - **insert**
 - **update**
 - **delete**

You can override all of these methods to custom your administration.

Then for example create these routes :

```xml
<group name="scaffolding" url="/scaffolding" action="scaffolding">
  <route name="default" url="(/*)" action="home"/>
  <route name="insert" url="/entity/insert/([a-zA-Z]+)(/*)" action="insert" vars="entity"/>
  <route name="update" url="/entity/update/([a-zA-Z]+)/([0-9]+)(/*)" action="update" vars="entity,id"/>
  <route name="delete" url="/entity/delete/([a-zA-Z]+)/([0-9]+)(/*)" action="delete" vars="entity,id"/>
  <route name="entity" url="/entity/([a-zA-Z]+)(/*)" action="entity" vars="entity"/>
</group>
```

Licence :
-----------

licence [MIT](http://opensource.org/licenses/MIT)