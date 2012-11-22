<?php include('../head.php'); ?>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="jquery.infoBulle.js"></script>

<script type="text/javascript">
$(document).ready(function(){  
	$('.tTip').infoBulle({speed: 150, delay: 300});  
}); 
</script>

<title>Document sans nom</title>
</head>

<body>
<div id="wrapper">
    <div id="main">
        <div class="tTip" id="cloud1" title="Un nuage">Comment appelle-t-on un mouton sans pattes?</div>
    </div>
</div>
</body>
</html>
