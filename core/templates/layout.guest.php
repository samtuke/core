<!DOCTYPE html>
<html>
	<head>
		<title>ownCloud</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="apple-itunes-app" content="app-id=543672169">
		<link rel="shortcut icon" href="<?php echo image_path('', 'favicon.png'); ?>" /><link rel="apple-touch-icon-precomposed" href="<?php echo image_path('', 'favicon-touch.png'); ?>" />
		<?php foreach($_['cssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php echo $cssfile; ?>" type="text/css" media="screen" />
		<?php endforeach; ?>
		<script type="text/javascript" src="<?php echo OC_Helper::linkToRoute('js_config');?>"></script>
		<?php foreach($_['jsfiles'] as $jsfile): ?>
			<script type="text/javascript" src="<?php echo $jsfile; ?>"></script>
		<?php endforeach; ?>
	
		<?php foreach($_['headers'] as $header): ?>
			<?php
				echo '<'.$header['tag'].' ';
				foreach($header['attributes'] as $name=>$value) {
					echo "$name='$value' ";
				};
				echo '/>';
			?>
		<?php endforeach; ?>
	</head>

	<body id="body-login">
		<div id="login">
			<header><div id="header">
				<img src="<?php echo image_path('', 'logo.svg'); ?>" class="svg" alt="ownCloud" />
			</div></header>
			<?php echo $_['content']; ?>
		</div>
		<footer><p class="info"><a href="http://owncloud.org/">ownCloud</a> &ndash; <?php echo $l->t( 'web services under your control' ); ?></p></footer>
	</body>
</html>
