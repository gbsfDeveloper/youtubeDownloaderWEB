<?php

// require ('./YTLIB/class.YouTubeBean.php');
// require ('./YTLIB/class.YouTubeVideoDownloader.php');

// $bean = new YouTubeBean();
// $bean->setVideoId("tAGnKpE4NCI");
// $bean->setVideoFormat("22");
// $bean->setMethod("curl");
// $bean->setDestination("./");

// $downloader = new YouTubeVideoDownloader();
// $downloader->startDownload($bean);
$videoId = "tAGnKpE4NCI";
// $infoPage = file_get_contents("http://youtube.com/get_video_info?video_id=".$videoId);
$URL =  "https://www.googleapis.com/youtube/v3/search?part=snippet&q=metallica&key=AIzaSyCQVQLfjrfrEm7rCvtLwyAp2HRuvJRIWD0";

$videoinfoURL = "http://youtube.com/get_video_info?video_id=".$videoId;
$destination = "./";
$videoTitle = "nuevo.txt";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $videoinfoURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSLVERSION,3);
$data = curl_exec($ch);
$error = curl_error($ch);
curl_close ($ch);
var_dump($data);
$path = $destination."nuevo.txt";
$file = fopen($path, "w+");
fputs($file, $data);
fclose($file);

// $title = str_replace(" ", "\ ", $videoTitle);
// $title = str_replace("(", "\(", $title);
// $title = str_replace(")", "\)", $title);
// exec('wget http://www.remote.com/file.txt');
// $code = "wget --output-document=".$destination.$title.' '."'$videoinfoURL'";
// echo $code;
// exec($code);