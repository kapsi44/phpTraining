<html>
<head>
<meta charset="utf-8">
<title>Create an autocomplete input box with typeahead.js</title>

<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<p class="example-description">Prefetches data, stores it in localStorage, and searches it on the client: </p>
<input id="my-input" class="typeahead" type="text" placeholder="input a country name">
</div>

<!-- Load jQuery and the typeahead JS files -->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="typeahead.min.js"></script>

<script type="text/javascript">
// Waiting for the DOM ready...
$(function(){

	// applied typeahead to the text input box
	$('#my-input').typeahead({
		name: 'countries',

		// data source
		prefetch: 'data/countries.json',

		// max item numbers list in the dropdown
		limit: 10
	});

});
</script>
</body>
</html>