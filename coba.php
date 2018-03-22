<?php
// $API_key = ' AIzaSyAqpEQtJnFBUcQMLDJK9HbpjZb5519q6BY ';
// $channelId = 'UCSr_8bsnvPfKlEc4UX7WFyQ';
// $maxResult = 10;

// $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResult.'&key='.$API_key.''));
//Get videos from channel by YouTube Data API
$API_key    = 'AIzaSyAIqieMTrg3M5X3Qde3tkiMgmDlQIQ5NSw';
$channelID  = 'UCSr_8bsnvPfKlEc4UX7WFyQ';
$maxResults = 10;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Akademi Kepolisian</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.youtube.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700" rel="stylesheet">    -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="js/judul.js" type="text/javascript"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php
				foreach($videoList->items as $item){
				    //Embed video
				    if(isset($item->id->videoId)){
				        echo '<div class="youtube-video">
				                <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
				                <h2>'. $item->snippet->title .'</h2>
				            </div>';
				    }
				}
				?>
			</div>
		</div>
	</body>
</html>