<?
$app_base	=	dirname(__FILE__);

include($app_base . '/config/local.php');
include($app_base . '/templates/header.php');
?>
<div id="modal"><div id="player"><iframe width="978" height="550" src="//www.youtube.com/embed/Ta07GUynRwQ" frameborder="0" allowfullscreen></iframe></div><a class="close" href="#">&#215;</a></div>
<div class="gutter pad">
	<div id="call_to_action">
		<h1>It's time to make some noise.</h1>
		<p>
			Flagger is a browser add-on that automatically puts red flag keywords (like <span class="flag">bomb</span>, <span class="flag">Taliban</span> and <span class="flag">anthrax</span>) into
			the web addresses you visit. Install Flagger and help us send a message:
			<span class="flag">government surveillance has gone too far.</span>
		</p>
		<? if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'chrome') !== false) { ?>
			<a class="download_link" href="#">
			
				<img src="/images/download_chrome.png" width="108" height="108"/>
				<strong>Install Flagger</strong>
				<small>For Chrome 28+</small>
			</a>
		<? } elseif (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'firefox') !== false) { ?>
			<a class="download_link" href="#">
				<img src="/images/download_firefox.png" width="108" height="108"/>
				<strong>Install Flagger</strong>
				<small>For Firefox 30+</small>
			</a>
		<? } else { ?>
			<div class="unsupported_browser">
				<a href="https://www.mozilla.org/firefox" target="_blank"><img src="/images/firefox_flat.png" width="111" height="108"/></a>
				<a href="https://www.google.com/chrome" target="_blank"><img src="/images/chrome_flat.png" width="111" height="108"/></a>
				<em>Flagger is available for Firefox and Chrome</em>
			</div>
		<? } ?>
		

		
	</div>
</div>
<div class="highlight">
	<div class="gutter pad">
		<div id="send_a_message">
			<ul class="clear">
				<li>
					<div>
						<h2>Choose your red flags.</h2>
						<p>
							Flagger makes it easy to choose which red flags get added to the web addresses you visit. Choose from the
							defaults or enter your own!
						</p>
						<img src="/images/flags_cropped.png" width="265" height="177"/>
					</div>
				</li>
				<li>
					<div>
						<h2>Add a message for the NSA.</h2>
						<p>
							You can send a message along with your red flags. You've got their attention&mdash;might as well tell 'em how you really feel.
						</p>
						<img src="/images/free_speech.png" width="265" height="177"/>
					</div>
				</li>
				<li>
					<div>
						<h2>Watch the video.</h2>
						<p>
							Flagger is fun and easy to use. <a id="video_inline_link" href="http://www.youtube.com/watch?v=Ta07GUynRwQ">Watch the video</a> and I'll walk you through getting it set up, along with
							some advanced features.
						</p>
						<a class="video" id="video_link" href="http://www.youtube.com/watch?v=Ta07GUynRwQ"><div class="overlay"><div class="play_button"></div></div></a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="promo">
	<div class="gutter pad">
		<img src="/images/fftf/heart2.png" width="30" height="30"/>
		If you love Flagger, please consider <a href="https://donate.fightforthefuture.org/?tag=flagger-www" target="_blank">donating</a> to
		<a href="http://www.fightforthefuture.org/" target="_blank"><img src="/images/fftf/logo.png" width="200" height="30"/></a>
	</div>
</div>


<script>
/*
var tag = document.createElement('script');

tag.src = "http://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

function onYouTubeIframeAPIReady() {
	player = new YT.Player('player', {
		width: '978',
		height: '550',
		videoId: 'Ta07GUynRwQ',
		events: {
			'onReady': onPlayerReady
		}
	});
};

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
	document.getElementById('video_inline_link').onclick = function() {
		_paq.push(['trackGoal', 2]); // video_inline conversion
		open_modal();
		return false;
	}
	document.getElementById('video_link').onclick = function() { 
		_paq.push(['trackGoal', 3]); // video_thumbnail conversion
		open_modal();
		return false;
	}
}
*/
var open_modal = function(e)
{
	if (e) e.preventDefault();

	$('#modal').show();
	window.setTimeout(function() { $('#modal').css('opacity', 1); }, 25);
}

var close_modal = function(e)
{
	if (e) e.preventDefault();

	// player.stopVideo();

	$('#modal').css('opacity', 0);
	window.setTimeout(function() {
		$('#modal').hide();
	}, 300);
}


$(function() {

	$('#video_inline_link').click(function(e) {
		e.preventDefault();
		_paq.push(['trackGoal', 2]); // video_inline conversion
		open_modal();
	});

	$('#video_link').click(function(e) {
		e.preventDefault();
		_paq.push(['trackGoal', 3]); // video_thumbnail conversion
		open_modal();
	});

	$('#modal').click(function(e) {
		if (e.target == this)
			close_modal();
	});

	$('#modal a.close').click(close_modal);

	$('.download_link').click(function(e) {
		e.preventDefault();

		<? if (
			strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'chrome') !== false
			||
			strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera') !== false
			) { ?>
			_paq.push(['trackGoal', 1]); // download conversion
			chrome.webstore.install();
		<? } else { ?>
			_paq.push(['trackGoal', 4]); // download conversion
			var params = {
				"Flagger": {
					URL: '/addon/firefox/flagger-1.3.1.xpi',
					IconURL: '/images/icon_logo_32.png',
					
					toString: function () { return this.URL; }
				}
			};
			InstallTrigger.install(params);
		<? } ?>
	});
});

</script>
<?
include($app_base . '/templates/footer.php');
?>