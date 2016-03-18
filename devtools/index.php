
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Whitesquare</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
	<link rel="stylesheet" type="text/css" href="w2ui/w2ui-1.4.3.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="jQueryAssets/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="w2ui/w2ui-1.4.3.js"></script>
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
					<li><a href="game.php">Play Game!</a></li>			
				</ul>
			</nav>
			
</aside>
  <section>
			<blockquote>
				<p>
					QUISQUE IN ENIM RAT
				</p>
				<cite>John Doe, Lorem Ipsum</cite>
		  </blockquote>
		
		<script type="text/javascript" src="js/gridlib2.js"></script>
		<div id="grid" style="width: 100%; height: 300px;"></div>
		
		<div id="addfield">
		<?php include 'writedb.php'; ?>	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="text" name="name">
		 <input type="text" name="libtype">
		 <input type="text" name="libsrc">
		<input type="submit" value="Submit"> 
		 </form>
		</div>

	  </section>
</div>
<footer>
		<div id="footer">
			<div id="twitter">
			  <h3>About me</h3>
                <h3 class="ui-accordion-content">Sardak Serhii</h3>
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