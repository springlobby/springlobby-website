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
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="SpringLobby release feed" href="http://springlobby.info/releases.xml" />

		<script type="text/javascript" src="javascripts/top_up-min.js"></script>
		<script type="text/javascript">
			TopUp.images_path = "images/top_up/";
		</script>
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
					<img alt="Windows Download" src="dl.png" />Get <?php echo $win->version;?> for Windows
				</span> 
				</a>
			</div>
			<div class='download'>
				<a href="<?php echo $sauce->link();?>" >
				<span class="shiny-demo-3 demo-button">
					<img alt="Source Download" src="dl.png" />Get <?php echo $sauce->version;?> source
				</span> 
				</a>
			</div>
			<div class='download'>
				<a href="https://github.com/springlobby/springlobby/wiki/Install">
				<span class="shiny-demo-2 demo-button">
					<img alt="Linux Packages" src="info.png" />Linux packages
				</span> 
				</a>
			</div>
		</div>
		<div id='description'>
			<p>SpringLobby is a free cross-platform lobby client for the <a href='https://springrts.com/'>Spring RTS project</a>.
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
			<?php linkButton('https://github.com/springlobby/springlobby/issues/new', 'Report a problem') ?>
			<?php linkButton('https://github.com/springlobby/springlobby/wiki', 'Wiki') ?>
			<?php linkButton('https://github.com/springlobby/springlobby/wiki/Contact', 'Contact') ?>
			<?php linkButton('https://github.com/springlobby/springlobby/blob/master/ChangeLog', 'Changelog') ?>
			<div class="link"><a href="../releases.xml"><img alt="rss feed" style="border:none;" src="rss.png" /></a></div>
			<div style='clear:both;'></div>
			<a href="http://validator.w3.org/check?uri=referer" >
				<img src="valid-xhtml11-blue" alt="Valid XHTML 1.1" height="31" width="88" /></a>&nbsp;
		</div>
	</div>

</body>
</html>
