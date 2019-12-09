<!DOCTYPE html>
<html>
	<head>
		<title>
			{% if page.title == site.title-home %}
				{{ site.title-home }}
			{% else %}
				{{ page.title }} | {{site.title}}
			{% endif %}
		</title>
		<link rel="icon" href="{{ site.baseurl }}/assets/img/favicon.ico">
		<link rel="stylesheet" href="{{ site.baseurl }}/assets/css/stylesheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=0.70">
		<meta name="Copyright" content="Copyright (c) 2016-<?php echo date("Y"); ?> by Cicero Interactive"/>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="{{ site.baseurl }}/assets/js/breadcrumb_cleaner.js"></script>-->
		<meta charset="utf-8">
		<!--<script type="text/javascript" src="http://livejs.com/live.js"></script>-->
	</head>
	
	<body>
		<div class="background ShowOnSmallScreen"></div>
		<div style="width: 100%; max-width: 1100px; margin: auto;">
			{% include alerts.php %}
			{% include header.php %}
			{% include nav.php %}
			{{ content }}
			{% include footer.php %}
		</div>
	</body>
</html>