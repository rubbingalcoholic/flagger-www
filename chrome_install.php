<?
$app_base	=	dirname(__FILE__);

include($app_base . '/config/local.php');
include($app_base . '/templates/header.php');
?>
<div class="gutter pad">
	<div id="tutorial">
		<!--<h2>Google pulled us from their store!</h2>-->
		<h2>Install Flagger from source code!</h2>
		<p>
			If you don't trust the Chrome Web Store to not install NSA spyware on your computer, you can follow these steps to <span class="flag">install Flagger manually!</span>
			<!--Surprised? They're super best friends with the NSA. Follow these steps to <span class="flag">install Flagger manually!</span>-->
			<br/>
			<small>
				(If your download doesn't start automatically,
				<a href="https://github.com/rubbingalcoholic/flagger/archive/master.zip">click here</a>)
			</small>
		</p>
		<ol class="screencast">
			<li>
				<h4>1. Unzip flagger-master.zip to a place you'll keep it around</h4>
			</li>
			<li>
				<h4>2. Open your Chrome extension settings</h4>
			</li>
			<li>
				<h4>3. Check the box labeled "Developer mode"</h4>
				<img src="/images/screencast/1.png"/>
			</li>
			<li>
				<h4>4. Click "Load unpacked extension&hellip;"</h4>
			</li>
			<li>
				<h4>5. Choose the folder you unzipped Flagger to and click "OK." You're done!</h4>
			</li>
		</ol>
	</div>
</div>
<script type="text/javascript">

window.setTimeout(function() { window.location.href = 'https://github.com/rubbingalcoholic/flagger/archive/master.zip'; }, 500);

</script>
<?
include($app_base . '/templates/footer.php');
?>