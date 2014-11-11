<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>OwO | GOOD :DAY</title>
<meta name="description" content="主唱大人顏文字">
<meta name="keywords" content="主唱大人顏文字">
<link rel="icon" href="../img/fav.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	$db = new PDO("sqlite:db.sq3");
	
	$query  = "SELECT COUNT(rowid) FROM face";
	$result = $db->query($query);
	$total  = $result->fetchColumn();
	$query  = "SELECT * FROM face";
	$result = $db->query($query);
	$data	= $result->fetchAll();
	$result = null;
?>
	<div class="container-narrow">
        <div class="masthead">
            <ul class="nav nav-pills pull-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="http://blog.rongday.com">blog</a></li>
            </ul>
            <h3 class="muted">主唱大人顏文字</h3>
        </div>

        <hr>

        <div class="jumbotron">
            <h1><a href="http://blog.rongday.com" class="logo"></a></h1>
            <p class="lead">
                直接點選 <i class="icon-gift"></i> Copy! 就可以複製左邊文字框裡的表情，<br>
                不支援 flash 的 iOS 系統可以直接點左邊文字框選取複製喔！
            </p>
        </div>

        <hr>

        <div class="row-fluid marketing">
<?php
	for ($i=0;$i<$total;$i++) {

		$span1 = !($i%4) ? "            <div class=\"span3 first-span\">" : "            <div class=\"span3\">";
		$id = "face".$data[$i][id];
		$face = $data[$i][face];
		$target = "#face".$data[$i][id];
		//echo "            <div class=\"span3\">\n";
        echo $span1;
		echo "                <p>\n";
		//echo "                	<h4>{$data[$i][id]}</h4>\n";
		echo "                	<div class=\"input-append\">\n";
        echo "                	<input class=\"input-small\" id=\"{$id}\" type=\"text\" value=\"{$face}\">\n";
        echo "                	<a class=\"btn btn-medium\" href=\"{$target}\" id=\"copy-btn\"><i class=\"icon-gift\"></i> Copy!</a>\n";
        echo "                	</div>\n";
		echo "                </p>\n";
		echo "            </div>\n";

	}
?>


        <hr style=" clear: both;">
        <div class="footer">
            <p>
                <!-- Histats.com  START (html only)-->
<a href="http://www.histats.com" alt="page hit counter" target="_blank" >
<embed src="http://s10.histats.com/605.swf"  flashvars="jver=1&acsid=2540108&domi=4"  quality="high"  width="110" height="55" name="605.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" /></a>
<img  src="http://sstatic1.histats.com/0.gif?2540108&101" alt="" border="0">
<!-- Histats.com  END  -->
            </p>
            <p class="copyright" align="right">&copy; rongday.com <?php echo date('Y')?></p>
        </div>
        <div class="alert alert-info hide" id="get-it">
    		<button type="button" class="close" data-dismiss="alert">&times;</button>
    		<h4>Well done!</h4>
    		<i class="icon-ok"></i> 已複製到剪貼簿！
    	</div>    

    </div>
    <!-- /container -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/jquery.zclip.js"></script>
<script>
$(function(){
    $('a.btn').zclip({
        path:'js/ZeroClipboard.swf',
        copy:function(){
			return $($(this).attr("href")).val();
		}
	}).click(function(){
		//$("#get-it").show();
        $("#get-it").fadeToggle(1000).fadeToggle(1000);
	});	
});

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46315768-4', 'rongday.com');
  ga('send', 'pageview');

</script>
</body>
</html>