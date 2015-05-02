<?
$app_base	=	dirname(__FILE__);

include($app_base . '/config/local.php');
include($app_base . '/templates/header.php');
?>

<div class="gutter pad">
	<div id="privacy" class="content">
		<h2>Privacy Policy</h2>
		<ul class="questions">
			<li>
				<h3>The Flagger app</h3>
				<p>
					Flagger stores your settings on your computer and does
					not phone home with any data about you, collect any sort of
					analytics, or initiate any external web requests. The app is
					open source, and you're free to inspect it yourself.
				</p>
				<h3>The Flagger web site</h3>
				<p>
					The Flagger website collects only anonymized analytics data
					through our self-hosted instance of
					<a href="https://piwik.org/" target="_blank">Piwik</a>,
					which is a lot more bad-ass than Google Analytics and
					doesn't spy on you. We anonymize IP addresses, so your
					traffic cannot be used to personally identify you.
				</p>
				<p>
					That said, we do have Facebook and Twitter widgets on our
					page. These are third party scripts that probably do spy on
					you. Fuck, I'm going to have to fix that soon.
				</p>
				<p>
					If you have any questions or comments about this privacy
					policy, please email me at <a href="mailto:jeff@rubbingalcoholic.com">jeff@rubbingalcoholic.com</a>.
					(I'm Jeff Lyon, the owner and chief privacy contact for this site)
				</p>
				<p>
					Thank you very much!
				</p>
			</li>
			
		</ul>
	</div>
</div>

<?
include($app_base . '/templates/footer.php');
?>