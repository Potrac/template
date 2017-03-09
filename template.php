<!Doctype html>
<html>
	<head>
		<title>	<?php if(isset($title)){echo $title.' - Template';}else{echo 'Template';}?> </title>

		<meta charset="utf8">

		<link rel="stylesheet" href="<?=ROOT;?>css/style.css">
		<?php
		if(isset($css)){
			foreach($css as $c){
				echo '<link rel="stylesheet" href="'.ROOT.'css/pages/'.$c.'.css">';
			}
		}
		?>

	</head>
	<body>
		<div id="wrap">
			<header>
				<h1>Title</h1>
				<nav>
					<ul>
						<li>Li1</li>
						<li>Li2</li>
						<li>Li3</li>
						<li>Li4</li>
					</ul>
				</nav>
			</header>
			<div id="contenu">
				<?=$content?>
			</div>
			<footer>Copyright © 2012</footer>
		</div>

	<!-- All the scripts -->
	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>--> <!--Uncomment to add jQuery -->
	<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script> <!-- Only for DEVELOPMENT phase !-->
		<?php
		if(isset($js)){
			foreach($js as $j){
				echo '<script src="'.ROOT.'js/pages/'.$j.'.js"></script>';
			}
		}
		?>
	</body>
</html>