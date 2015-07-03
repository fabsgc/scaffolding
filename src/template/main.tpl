<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Scaffolding</title>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="/{{path:IMAGE}}logo.png" />
		<gc:asset type="css" files="web/gcs/css/default.css,web/gcs/css/profiler.css" cache="3600"/>
		<style type="text/css">
			#main{
				width: 100%;
				overflow: auto;
				padding-top: 10px;
				background-color: white;
			}
		</style>
	</head>
	<body>
		<header id="header">
			<div class="content">
				<h1 style="float:left">
					Scaffolding - {$title}
				</h1>
			</div>
		</header>
		<div id="main">
			<div class="content">
				<gc:child/>
			</div>
		</div>
		<script type="text/javascript">
			updateHeight();

			window.onresize = function(event) {
			updateHeight();
			};

			function updateHeight(){
			document.getElementById('main').style.height = window.innerHeight - document.getElementById('header').offsetHeight + "px";
			document.getElementById('page').style.width = window.innerWidth - 165 + "px";
			}

			function save(){
			document.getElementById('form').submit();
			}
		</script>
	</body>
</html>