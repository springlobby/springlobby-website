<?php 
	require_once('common.inc');
	$win = new WinRelease();
	$sauce = new SrcRelease();
	
	function linkButton($target,$text) {
		echo '<div class="link"><a href="'.$target.'"><span class="shiny-demo-4 demo-button floater">
				'.$text.'
			</span></a></div>';
	}
?>
<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
	<head>
		<title>SpringLobby.info</title>
		<link rel="stylesheet" href="/landing/style.css" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="SpringLobby release feed" href="http://springlobby.info/releases.xml" />
		<script type="text/javascript" src="/landing/javascripts/jquery/*.js"></script>

		<script type="text/javascript" src="/landing/javascripts/top_up-min.js"></script>
		<script type="text/javascript">
// 			TopUp.host = "http://www.anotherwebsite.com/";
			TopUp.images_path = "/landing/screenshots/";
		</script>
		<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
	</head>
<body>
	<div id='header'>
		<h1>SpringLobby</h1>
	</div>
	<div id='main'>
		
		<div id='downloads_wrapper'>
			<div class='download'>
				<a href="<?php echo $win->link();?>" >
				<span class="shiny-demo-1 demo-button">
					<img alt="Windows Download" src="/landing/dl.png" ></img>Get <?php echo $win->version;?> for Windows
				</span> 
				</a>
			</div>
			<div class='download'>
				<a href="<?php echo $sauce->link();?>" >
				<span class="shiny-demo-3 demo-button">
					<img alt="Source Download" src="/landing/dl.png" ></img>Get <?php echo $sauce->version;?> source
				</span> 
				</a>
			</div>
			<div class='download'>
				<a href="http://projects.springlobby.info/projects/springlobby/wiki/Install" >
				<span class="shiny-demo-2 demo-button">
					<img alt="Linux Packages" src="/landing/info.png" ></img>Linux packages
				</span> 
				</a>
			</div>
		</div>
		<div id='description'>
			<p>SpringLobby is a free cross-platform lobby client for the <a href='http://springrts.com/'>Spring RTS project</a>.
				<script type="text/javascript">
					//<![CDATA[
					(function() {
					document.write('<g:plusone size="small" href="http://springlobby.info"></g:plusone>');
					})();
					//]]>
				</script>
			</p>
			<div id="screenshots">
				<?php
					$files = array();
					$path = "screenshots";
					$dir = opendir ($path);
					while (false !== ($entry = readdir($dir))) 
					{
						if ( ! ( is_dir($entry) || $entry=='thumbs' || $entry=='generate.sh' ) )
						{
							array_push( $files, $entry );
						}
					}
					closedir ($dir);
					sort( $files );
					foreach( $files as $entry )
						printf( '<a href="%s/%s" ><img alt="Screenshot" src="%s/thumbs/%s" /></a>', $path,$entry, $path, $entry );
				?>
			</div>
			<script type="text/javascript">
				TopUp.addPresets({
					"#screenshots a": {
					title: "SpringLobby screenshots {alt} ({current} of {total})",
					group: "screenshots",
					readAltText: 1,
					shaded: 1
					}
				});
			</script>
		</div>
		<div style='clear:both;'></div>
		<div id='badges'>
			<?php linkButton('http://projects.springlobby.info/projects/springlobby/issues/new','Report a problem') ?>
			<?php linkButton('http://projects.springlobby.info/projects/springlobby/wiki','Wiki') ?>
			<?php linkButton('http://projects.springlobby.info/projects/springlobby/wiki/Contact','Contact') ?>
			<?php linkButton('http://projects.springlobby.info/embedded/springlobby/index.html','Changelog') ?>
			<div class="link"><a href="../releases.xml"><img alt="rss feed" style="border:none;" src="rss.png" /></a></div>
			<div style='clear:both;'></div>
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="valid-xhtml11-blue" alt="Valid XHTML 1.1" height="31" width="88" /></a>&nbsp;
			<script type="text/javascript" src="http://www.ohloh.net/p/11953/widgets/project_partner_badge.js"></script>
		</div>
	</div>

<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.graasmilk.net/" : "http://piwik.graasmilk.net/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {

}
</script><noscript><p><img src="http://piwik.graasmilk.net/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
<!-- Piwik Image Tracker -->
<div><img src="http://piwik.graasmilk.net/piwik.php?idsite=1&amp;rec=1" style="border:0" alt="" /></div>
<!-- End Piwik -->
</body>
</html>
