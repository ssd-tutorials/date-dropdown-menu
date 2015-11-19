<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Date dropdown menu</title>
	<meta name="description" content="Date dropdown menu" />
	<meta name="keywords" content="Date dropdown menu" />
	<link href="/css/core.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<section id="wrapper">
	
	<select name="year" id="year">
		<option value="">----</option>
		<?php for($i = 2011; $i <= 2050; $i++) { ?>
			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
		<?php } ?>
	</select>
	
	<select name="month" id="month">
		<option value="">----</option>
		<?php for($i = 1; $i <= 12; $i++) { $i = strlen($i) < 2 ? "0{$i}" : $i; ?>
			<option value="<?php echo $i; ?>"><?php echo date('F', mktime(0, 0, 0, $i)); ?></option>
		<?php } ?>
	</select>
	
	<select name="day" id="day" disabled="disabled">
		<option value="">--</option>
	</select>

</section>

<script src="/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/js/core.js" type="text/javascript"></script>
</body>
</html>