<?php
session_start();
$array = ['t3asqync2r', 'lw19jj7hmf'];
$_SESSION['num'] = ($_SESSION['num'] == 0) ? 1 : 0;

$number = $_SESSION['num'] + 1;

$video = $array[$_SESSION['num']];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Second subdomain - Wistia Player API Starter!</title>
    <meta name="description" content="A Wistia with Danila Dolmatov">
    <link id="favicon" rel="icon" href="//glitch.com/edit/favicon-app.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
		<div class="wistia_embed wistia_async_<?=$video?>" style="width:640px;height:360px;"></div>
		
		<script>
		var playedOnce = false;
		window._wq = window._wq || [];
_wq.push({ id: "<?=$video?>", onHasData: function(video) {
	
	if (!playedOnce && /[&?]autoplay/i.test(location.href)) {
      playedOnce = true;
      video.play();
    }
		
		
		

	video.addToPlaylist("0vdq59ghgo", {
			playerColor: "ffffff",
			autoAdvance: true,
			controlsVisibleOnLoad:"false",
		});
		
}});

</script>
		
		<h3>Open pre video #<?=$number?></h3>
		<h4><a href="">Reload page without autoplay</a></h4>
		<h4><a href="?autoplay">Reload page with autoplay!</a></h4>
    <!--script src="player-api-things.js"></script-->
		<script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
  </body>
</html>
