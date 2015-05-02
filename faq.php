<?
$app_base	=	dirname(__FILE__);

include($app_base . '/config/local.php');
include($app_base . '/templates/header.php');
?>

<div class="gutter pad">
	<div id="faq" class="content">
		<h2>Frequently Asked Questions</h2>
		<ul class="questions">
			<li>
				<h3>What's the point of all this?</h3>
				<p>
					The U.S. National Security Agency (NSA) has betrayed our trust through
					their use of
					<a href="https://www.eff.org/deeplinks/2013/08/eff-victory-results-expected-release-secret-court-opinion-finding-nsa-surveillance" target="_blank">
						illegal and unconstitutional</a>
					surveillance practices. And recently, it was revealed that they have
					<a href="http://www.nytimes.com/2013/09/06/us/nsa-foils-much-internet-encryption.html" target="_blank">
						compromised the deepest roots of Internet security</a>.
					The systems of trust that form the basis
					of online communication and commerce are under attack&mdash;and
					<a href="http://www.theguardian.com/commentisfree/2013/sep/05/government-betrayed-internet-nsa-spying" target="_blank">
						the NSA must be stopped.</a>
				</p>
				<p>
					Flagger was created in the spirit of civil protest.
					By flooding the Internet with red flag keywords, we are setting off the U.S. National Security Agency's
					alarms and delivering a collectively powerful statement through the individual free-speech messages that
					each user can send out.
				</p>
				<p>
					Flagger is not a solution to the problem of unconstitutional government surveillance. Anyone who cares about this
					has a civic	duty to engage in the democratic process and attack the problem at its root. But as long as the NSA
					continues to illegally spy on us, we have no reason to make their jobs any easier.
				</p>
			</li>
			<li>
				<h3>Is this illegal? Will the government come after me in my sleep?</h3>
				<p>
					I don't believe there is anything illegal about modifying your browser to send
					out extra data in URLs, but I am not a lawyer and the U.S. government
					<a href="http://en.wikipedia.org/wiki/Aaron_Swartz" target="_blank">arrests people</a> for
					<a href="http://en.wikipedia.org/wiki/Weev" target="_blank">all sorts</a>
					of
					<a href="http://www.livescience.com/25398-barrett-brown-indictment-editorial.html" target="_blank">stupid things</a>.
					Flagger is a form of civil disobedience. Use it at your own risk.
				</p>
				<img src="/images/faq/gitmo.jpg" width="750" height="391"/>
				<h4 class="caption">Winners will receive an all-expenses-paid vacation to beautiful Guantanamo Bay, Cuba.</h4>
			</li>
			<li>
				<a name="junk"></a>
				<h3>Won't putting extra junk in web addresses cause problems?</h3>
				<p>
					In most cases, sites simply ignore the extra data that Flagger adds to your URLs. If Flagger is causing
					a problem, you can easily turn it off by clicking on the toolbar icon. There is also an option
					to send your red flags and message in the background (HTTP headers) instead of altering the URLs you visit.
					This is even less likely to cause problems (but less dramatic ;)
				</p>
				<img src="/images/faq/urls.png" width="750" height="249"/>
				<h4 class="caption">Turn on "Don't mangle URLs" if you're having problems.</h4>
			</li>
			<li>
				<a name="lulz"></a>
				<h3>Won't putting <em>'lulz'</em> and <em>'dear_nsa'</em> into every URL be easy to ignore?</h3>
				<p>
					Yes. It would be very easy for anyone who's spying on your Internet traffic to filter out Flagger data if we always
					send those same words into the URLs. Flagger does this by default because it's funny, but you can randomize these
					by clicking <strong>"Randomize parameter names"</strong> in the advanced options menu.
				</p>
			</li>
			<li>
				<a name="support"></a>
				<h3>I am having a problem with Flagger. What should I do?</h3>
				<p>
					Please <a href="https://github.com/rubbingalcoholic/flagger/issues" target="_blank">submit an Issue</a> on my
					Github page or <a href="mailto:jeff@rubbingalcoholic.com">email me</a>. Be sure to include a detailed description
					of the problem, and include answers to these questions 3:
				</p>
				<ul class="troubleshooting">
					<li>What web browser are you using, and which version?</li>
					<li>What operating system? <small>(eg. OS X 10.8.2, Windows 8.1, Xubuntu 13.10)</small></li>
					<li>What other browser add-ons do you have enabled?</li>
				</ul>
				<p>
					I am aware that some people are experiencing problems in Firefox, and I believe that another Firefox extension is conflicting with
					Flagger. Please try disabling other extensions one-by-one (and restarting Firefox) if you run into problems.
					<span class="flag"><a href="mailto:jeff@rubbingalcoholic.com">And let me know</a></span> if you figure it out. I might send you a cookie.
				</p>
				<img src="/images/faq/rubbingalcoholic.png" width="604" height="204"/>
				<h4 class="caption">Support representatives are standing by! Well, actually it's just me. But I'll try to help.</h4>
			</li>
		</ul>
	</div>
</div>

<?
include($app_base . '/templates/footer.php');
?>