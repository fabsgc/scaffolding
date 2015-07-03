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

```text
"autoload": {
	"psr-4": {
		"Scaffolding\\" : "vendor/gcsystem/scaffolding/src"
	}
},
```
Then, create a new controller and change the `extends Controller` by `extends \Scaffolding\Scaffolding`

There are five actions and all except the first take one GET parameter : "entity" (the entity name) : 

 - **home**
 - **entity**
 - **insert**
 - **update**
 - **delete**

You can override all of these method to custom your administration

Licence :
-----------

licence [MIT](http://opensource.org/licenses/MIT)