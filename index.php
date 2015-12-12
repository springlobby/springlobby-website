<?php 
	require_once('common.php');
	$win = new WinRelease();
	$sauce = new SrcRelease();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>SpringLobby</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-TileColor" content="#656565">
	<meta name="msapplication-TileImage" content="mstile-144x144.png">
	<meta name="msapplication-config" content="browserconfig.xml">
	<!-- SCRIPT -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>
</head>

<body>
<header>
	<h1>SpringLobby</h1>
</header>

<section>
	<p>SpringLobby is a free cross-platform lobby client for the <a href='https://springrts.com/'>Spring RTS project</a>.</p>
	<div id="screenshots">
		<h2>Screenshots</h2>
				<a href="screenshots/01.png" class="fancybox" ><img src="thumbnails/tn_01.png" alt=""></a>
				<a href="screenshots/02.png" class="fancybox" ><img src="thumbnails/tn_02.png" alt=""></a>
				<a href="screenshots/03.png" class="fancybox" ><img src="thumbnails/tn_03.png" alt=""></a>
				<a href="screenshots/04.png" class="fancybox" ><img src="thumbnails/tn_04.png" alt=""></a>
				<a href="screenshots/05.png" class="fancybox" ><img src="thumbnails/tn_05.png" alt=""></a>
				<a href="screenshots/06.png" class="fancybox" ><img src="thumbnails/tn_06.png" alt=""></a>
				<a href="screenshots/07.png" class="fancybox" ><img src="thumbnails/tn_07.png" alt=""></a>
				<a href="screenshots/08.png" class="fancybox" ><img src="thumbnails/tn_08.png" alt=""></a>
				<a href="screenshots/09.png" class="fancybox" ><img src="thumbnails/tn_09.png" alt=""></a>
				<a href="screenshots/10.png" class="fancybox" ><img src="thumbnails/tn_10.png" alt=""></a>
	</div>
	<h2>Download SpringLobby</h2>
	<table id="download">
		<th>Windows</th>
		<th>Linux</th>
		<tr>
			<td>
				<li>
					<a href="http://springlobby.info/windows/SpringLobby-<?php echo $win->version; ?>.exe".exe" >Windows installer (<?php echo $win->version; ?>)</a>
				</li>
				<li>
					<a href="<?php echo $win->link();?>" >Windows portable (<?php echo $win->version; ?>)</a>
				</li>
			</td>
			<td>
				<li>
					<a href="<?php echo $sauce->link();?>" >Source Code (<?php echo $sauce->version;?>)</a>
				</li>
				<li>
					<a href="https://github.com/springlobby/springlobby/wiki/Install" >Linux install instructions</a>
				</li>
			</td>
		</tr>
	</table>
</section>

<footer>
		<li><a href="https://github.com/springlobby/springlobby/blob/master/ChangeLog">Change Log</a></li>
		<li><a href="https://github.com/springlobby/springlobby/issues/new">Report a problem</a></li>
		<li><a href="https://github.com/springlobby/springlobby/wiki">Wiki</a></li>
		<li><a href="https://github.com/springlobby/springlobby/wiki/Contact">Contact</a></li>
</footer>

</body>
</html>
