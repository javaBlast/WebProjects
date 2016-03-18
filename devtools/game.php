
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Whitesquare</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
	<link rel="stylesheet" type="text/css" href="w2ui/w2ui-1.4.3.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="w2ui/w2ui-1.4.3.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 300px; }
  #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 90px; height: 90px; font-size: 4em; text-align: center; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>
</head>
<body>
<div id="wrapper">
		<header>
			<a href="index.html"><img src="images/logo.png" alt="Whitesquare logo"></a>
			<form name="search" action="#" method="GET">
				<input type="text" name="q" placeholder="Search"><button type="submit">GO</button>
			</form>
             <div id="heading">
			<h1>Amaaaazing Blasty WorkSpace!</h1>
		</div>
		</header>
	 
		<aside>
        <h2>Меню</h2>		 
			<nav>           
				<ul class="aside-menu">
					<li class="active">Категории</li>
					<li><a href="/donec/">Закладки</a></li>
					<li><a href="/vestibulum/">Инкубатор</a></li>			
				</ul>
			</nav>
			
</aside>

  <section>
<blockquote>
				<p>
					&ldquo;QUISQUE IN ENIM RAT.&rdquo;
				</p>
				<cite>John Doe, Lorem Ipsum</cite>
		  </blockquote>
		  <div style="width: 100%; height: 300px;">

<ul id="sortable">
  <?php include 'dfs.php';?>
 
</ul>
		</div>
		
	  </section>
</div>
<footer>
		<div id="footer">
			<div id="twitter">
			  <h3>About me</h3>
                <h3 class="ui-accordion-content">Sardak Serhei</h3>
				<span>Developer</span>
			</div>
			<div class="team-row">
			

	  </div>
			<div id="social">
				<h3>SOCIAL NETWORKS</h3>
				<a href="http://twitter.com/" class="social-icon twitter"></a>
				<a href="http://facebook.com/" class="social-icon facebook"></a>
				<a href="http://plus.google.com/" class="social-icon google-plus"></a>
				<a href="http://vimeo.com/" class="social-icon-small vimeo"></a>
				<a href="http://youtube.com/" class="social-icon-small youtube"></a>
				<a href="http://flickr.com/" class="social-icon-small flickr"></a>
				<a href="http://instagram.com/" class="social-icon-small instagram"></a>
				<a href="/rss/" class="social-icon-small rss"></a>
			</div>
			<div id="footer-logo">
				<a href="/"><img src="images/footer-logo.png" alt="Whitesquare logo"></a>
				<p>Copyright &copy; 2012 Whitesquare. A <a href="http://pcklab.com">pcklab</a> creation </p>
			</div>
		</div>
	</footer>
</body>
</html>