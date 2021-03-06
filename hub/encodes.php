<!DOCTYPE html>
<html>
	<head>
		<title>Submitting encodes</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/page.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>ul { list-style: disc; }</style>
	</head>
	<body>
		<a href="index.php"><< Back to the hub</a>

		<h1 id="submitting-video-encodes">Submitting video encodes</h1>

		<p>Currently, there’s no proper system for submitting encodes. However, if you have something you wish to submit you can contact me via <a href="https://twitter.com/QuadPiece/">Twitter</a>.</p>

		<p>Currently, there are a couple of things you should keep in mind when submitting encodes:</p>

		<ul>
      <li>Videos must not be over 40 MB unless there is a special reason</li>
      <li>Videos may not exceed 3,5 mbit/s (Preferably below 3 mbit/s)</li>
      <li>Videos must be 720p (No 1080p) or equal to the source material if no 720p+ source is available</li>
      <li>Videos must be WebM files encoded with the VP9 codec and Vorbis audio</li>
      <li>Videos may not contain subtitle tracks (Firefox doesn't cooperate well with these)</li>
      <li>The quality of the video must be acceptable (Your submission will be checked for artifacts and blockiness)</li>
      <li>Using the encoding settings provided <a href="https://github.com/AniDevTwitter/animeopenings/blob/master/encoding-settings">here</a> does <strong>not</strong> guarantee that your encode will be perfect</li>
		</ul>

		<p>If you need a place to upload your file. I recommend <a href="http://uguu.se/">Uguu</a> or <a href="http://file.quad.moe">QuadFile</a>. Again, to submit encodes. Tweet a link to <a href="https://twitter.com/QuadPiece/">@QuadPiece</a>.</p>

		<p>That might seem like a mouthful, but to keep the site running fast and users happy without exceeding our budget, some limits must be in place.</p>

		<?php
		include_once("../backend/includes/botnet.html");
		?>
	</body>
</html>
