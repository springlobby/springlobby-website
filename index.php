<!DOCTYPE html>
<html lang="en">

	<?php
		require_once('common.php');
		$win = new WinRelease();
		$sauce = new SrcRelease();
	?>

	<head>
		<title>SpringLobby</title>
		<meta charset="utf-8">
		<link rel="alternate" type="application/rss+xml" title="SpringLobby release feed" href="https://github.com/springlobby/springlobby/tags.atom" />
		<link rel="icon" href="favicon.png" type="image/png" sizes="64x64">
		<!-- jquery 3.2.1 -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- fancybox 3.1.25 -->
		<link  href="fancybox/jquery.fancybox.min.css" rel="stylesheet">
		<script src="fancybox/jquery.fancybox.min.js"></script>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>

		<header>
			<a id="title" href="http://springlobby.info" class="float-left">SpringLobby</a>
			<nav class="float-right">
				<a href="https://github.com/springlobby/springlobby/blob/master/ChangeLog">Change Log</a>
				<a href="https://github.com/springlobby/springlobby/issues/new">Report a problem</a>
				<a href="https://github.com/springlobby/springlobby/wiki">Wiki</a>
				<a href="https://github.com/springlobby/springlobby/wiki/Contact">Contact</a>
				<a href="https://github.com/springlobby/springlobby/tags.atom">RSS</a>
			</nav>
		</header>

		<div class="container">
			<section id="description" class="center">
				<p>SpringLobby is a free cross-platform lobby client for the <a href='https://springrts.com/'>Spring RTS project</a>.</p>
			</section>

			<section id="screenshots">
				<h2 class="center">Screenshots</h2>
				<hr>
				<div>
					<a href="screenshots/01.png"
					title="Spring Lobby Version 0.259: Connect Dialog"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Connect Dialog" >
						<img src="thumbnails/tn_01.png"alt="">
					</a>
					<a href="screenshots/02.png"
					title="Spring Lobby Version 0.259: Map Dialog"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Map Dialog">
						<img src="thumbnails/tn_02.png"alt="">
					</a>
					<a href="screenshots/03.png"
					title="Spring Lobby Version 0.259: Battle List"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Battle List">
						<img src="thumbnails/tn_03.png"alt="">
					</a>
					<a href="screenshots/04.png"
					title="Spring Lobby Version 0.259: Battle Room"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Battle Room">
						<img src="thumbnails/tn_04.png"alt="">
					</a>
					<a href="screenshots/05.png"
					title="Spring Lobby Version 0.259: Download List"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Download List">
						<img src="thumbnails/tn_05.png"alt="">
					</a>
					<div style="width: 100%;"></div>
					<a href="screenshots/06.png"
					title="Spring Lobby Version 0.259: Preferences - Engine List"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Preferences - Engine List">
						<img src="thumbnails/tn_06.png"alt="">
					</a>
					<a href="screenshots/07.png"
					title="Spring Lobby Version 0.259: Preferences - Downloads"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Preferences - Downloads">
						<img src="thumbnails/tn_07.png"alt="">
					</a>
					<a href="screenshots/08.png"
					title="Spring Lobby Version 0.259: Preferences - Chat"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Preferences - Chat">
						<img src="thumbnails/tn_08.png"alt="">
					</a>
					<a href="screenshots/09.png"
					title="Spring Lobby Version 0.259: Preferences - General"
					data-fancybox="screenshots"
					data-caption="Spring Lobby Version 0.259: Preferences - General">
						<img src="thumbnails/tn_09.png"alt="">
					</a>
					<a href="screenshots/10.png"
					title="Spring Lobby Version 0.259: Preferences - Groups"
					data-fancybox="screenshots"
					data-caption="">
						<img src="thumbnails/tn_10.png"alt="">
					</a>
				</div>
			</section>

			<section id="download">
				<h2 class="center">Download SpringLobby</h2>
				<hr>
				<table>
					<tr>
						<th>Windows<br></th>
						<th>Linux</th>
					</tr>
					<tr>
						<td><a href="http://springlobby.info/windows/SpringLobby-<?php echo $win->version; ?>.exe">Installer (<?php echo $win->version; ?>)</a></td>
						<td><a href="<?php echo $sauce->link();?>">Source code (<?php echo $sauce->version;?>)</a><br></td>
					</tr>
					<tr>
						<td><a href="<?php echo $win->link();?>">Portable (<?php echo $win->version; ?>)</a></td>
						<td><a href="https://github.com/springlobby/springlobby/wiki/Install">Instructions</a></td>
					</tr>
				</table>
			</section>
		</div>

		<footer class="center">
			2017 | <a href="https://github.com/springlobby/springlobby-website">Website sources</a>
		</footer>

		<script type="text/javascript">
			$("[data-fancybox]").fancybox({
				margin : [100, 0],
				toolbar : false,
				animationEffect : "fade",
				slideClass : 'screenshots',
			});
		</script>
	</body>
</html>
