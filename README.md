Informations :
-----------

* Open-Source
* Version  : 3.1 Bêta
* Author : fab@c++
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

There are five actions and all except the first take one or two GET parameters : "entity" (the entity name) and id (the primary key) : 

 - **home**
 - **entity**
 - **insert**
 - **update**
 - **delete**

You can override all of these methods to custom your administration

Licence :
-----------

licence [MIT](http://opensource.org/licenses/MIT)