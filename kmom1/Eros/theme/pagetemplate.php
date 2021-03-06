<!doctype html>
<html class='no-js' lang='<?=$lang?>'> <!-- Modernizr will replace the class 'no-js' with a list of features supported by the browser -->
<head>
<script src='<?=$modernizr?>'></script>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<?php foreach($stylesheets as $val): ?>
<link rel='stylesheet' type='text/css' href='<?=$val?>'/>
<?php endforeach; ?>
</head>
<body>
  <div id='wrapper'>
    <div id='header'><?=$header?></div>
    <div id='main'><?=$main?>
	<?=(CNavigation::GenerateMenu($menu, $navbar));?>
	</div>
    <div id='footer'><?=$footer?></div>
  </div>
<?php if(isset($jquery)):?><script src='<?=$jquery?>'></script><?php endif; ?>
<?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
<script src='<?=$val?>'></script>
<?php endforeach; endif; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-56780885-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>