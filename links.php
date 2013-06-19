<?php
$page_title = 'Links';

include 'tmpl/head.php';
?>

<div>
	<p>I use this page as my browsers' home page. It is designed accordingly.</p>
	
	<div class="column">
		<h4>News</h4>
		<ul>
			<li><a href="https://www.google.com/reader/view/">Google Reader</a></li>
			<li><a href="http://reddit.com/">reddit</a></li>
			<li><a href="http://slashdot.org/">Slashdot</a></li>
		</ul>

        <h4>Music</h4>
		<ul>
			<li><a href="http://www.pandora.com/">Pandora</a></li>
			<li><a href="http://www.last.fm/user/localstatic/">Last.fm</a></li>
		</ul>

	</div> <!-- /column -->
	
	<div class="column">
		<h4>Devel Docs</h4>
		<ul>
			<li><a href="http://www.php.net/manual/en/langref.php">PHP Manual</a></li>
			<li><a href="http://dev.mysql.com/doc/mysql/en/index.html">MySQL Manual</a></li>
			<li><a href="http://www.php.net/pdo">PHP PDO</a></li>
			<li><a href="http://www.w3.org/TR/html5/">HTML 5</a></li>
			<li><a href="http://www.w3.org/TR/xhtml1/">XHTML 1.0</a></li>
            <li><a href="http://www.w3.org/TR/CSS21/">CSS 2</a></li>
            <!--<li>-->
            <!--<ul>CSS 3-->
            <li><a href="http://www.w3.org/TR/selectors/">CSS 3 Selectors</a></li>
            <li><a href="http://www.w3.org/TR/css3-mediaqueries/">CSS 3 Media Queries</a></li>
            <!--</ul>-->
            <!--</li>-->
            <li><a href="http://api.jquery.com/">jQuery</a></li>
		</ul>
	</div> <!-- /column -->
	
	<div class="column">
		<h4>Social</h4>
        <ul>
            <li><a href="https://twitter.com/localstatic">Twitter</a></li>
            <li><a href="https://plus.google.com/104650976464874798037/posts">Google Plus</a></li>
			<li><a href="https://delicious.com/localstatic">Delicious</a></li>
			<li><a href="http://steamcommunity.com/profiles/76561197991347345">Steam</a></li>
			<li><a href="http://www.goodreads.com/user/show/20484273-morgan">Goodreads</a></li>
		</ul>
	</div> <!-- /column -->

	<div class="column">
		<h4>Misc</h4>
		<ul>
			<li><a href="http://www.google.com/play">Google Play</a></li>
			<li><a href="https://www.google.com/voice">Google Voice</a></li>
			<li><a href="http://my.ebay.com/">My eBay</a></li>
			<li><a href="http://badgerandblade.com/">B&amp;B</a></li>
		</ul>
	</div> <!-- /column -->
</div>

<div id="search">
	<div style="width: 80px; float: left;">
		<a href="http://www.google.com/"><img src="images/google_25wht.png" style="border: 0; width: 75px; height: 32px;" alt="Google" /></a>
	</div>
	<form method="get" action="http://www.google.com/search" style="float: left;">
		<fieldset style="border: 0; padding: 0;">
			<input type="text" name="q" size="25" maxlength="255" value="" />
			<input type="submit" name="btnG" value="Go" />
		</fieldset>
	</form>
</div> <!-- /search -->

<?php
include 'tmpl/foot.php';
?>


