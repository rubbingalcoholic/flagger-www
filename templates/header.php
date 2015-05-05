<?
if (isset($_GET['lulz']) && $_GET['lulz'])
{
	$share_flags = strtoupper(htmlspecialchars($_GET['lulz'])) . '! ';
}
else
{
	$share_flags = '';
}
?>
<!DOCTYPE html>
<html lang="en-us" itemscope itemtype="http://schema.org/Product">
	<head>
		<meta charset="utf-8"> 
		<title>Flagger! &mdash; troll the NSA with red flags and free speech</title>
		<meta name="description" content="Flagger is a browser add-on that adds red flag keywords (like BOMB, TALIBAN and ANTHRAX) into the web addresses you visit."/>
		<link rel="stylesheet" type="text/css" href="/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/css/flagger.css"/>
		<script src="/js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/dhnmamoofolkjakgakfncmdbmmfofaam">
		

		<!-- Piwik -->
		<script type="text/javascript">
			var _paq = _paq || [];
			<? if (LIVE) { ?>
				_paq.push(['trackPageView']);
				_paq.push(['enableLinkTracking']);
				(function() {
					var u="//piwik.rubbingalcoholic.com/";
					_paq.push(['setTrackerUrl', u+'piwik.php']);
					_paq.push(['setSiteId', 1]);
					var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
					g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
				})();
			<? } ?>
		</script>
		<!-- End Piwik Code -->

		<!-- Begin stupid Facebook OpenGraph tags that I hate -->
		<meta property="og:title" content="Flagger" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="http://flagger.io/images/red_flags2.png" />
		<meta property="og:url" content="http://flagger.io/?lulz=<?=urlencode($_GET['lulz'])?>" />
		<meta property="og:description" content="<?=$share_flags?>Troll the NSA! Flagger is the app that adds red flag keywords (like BOMB, TALIBAN and ANTHRAX) into the web addresses you visit." />
		<!-- End stupid Facebook OpenGraph tags that I hate -->

		<script type="text/javascript">
			var _rtn_options = {
				// This is just a delay. You can have the animation start after page load.
				delay: 1500,

				// This shows debug stuff in the console. For testing
				debug: true,

				// Always show the widget? Useful for testing lol.
				always_show_widget: false
			}
		</script>
		<script src="//fightforthefuture.github.io/reset-the-net-widget/widget/rtn.js"></script>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=179124918927024";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<header>
			<div class="gutter">
				<a href="/" title="trolololol"><img src="/images/logo.png" width="300" height="82"/></a>
				<ul class="nav_real">
					<li <? if ($_SERVER['SCRIPT_NAME'] == '/index.php') { ?>class="sel"<? } ?>><a href="/">Home</a></li>
					<li <? if ($_SERVER['SCRIPT_NAME'] == '/faq.php') { ?>class="sel"<? } ?>><a href="/faq.php">FAQ</a></li>
					<li><a href="/faq.php#support">Support</a></li>
				</ul>
				<ul class="nav">
					<li class="widget"><div class="fb-like" data-href="http://flagger.io" data-layout="button_count" data-show-faces="false" data-send="false"></div></li>
					<li class="widget">
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://flagger.io" data-text="DOWNFALL TALIBAN TERROR! Get Flagger—the app that trolls the NSA with red flags & free speech!" data-via="FlaggerApp">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</li>
				</ul>
			</div>
		</header>
		<div id="view">