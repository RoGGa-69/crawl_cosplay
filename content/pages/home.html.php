<?php 
    $dir_path = "img/titles";
    $files = scandir($dir_path);
    $count = count($files);
    $index = rand(2, ($count-1));
    $filename = $files[$index];

    echo '<h2>Welcome to the <b>Crawl Cosplay</b> 5-in-1 website!</h2>';
    echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'" style="float:right">';
?>
Select your pleasure among the following options:

<h3><a href="/cca/cca">Crawl Cosplay Academy</a> (CCA)</h3>
<ul><li>For those new to DCSS or who haven't yet won a couple of times.</li>
    <li>Read <a href="/cca/about_cca">About CCA</a></li></ul>

<h3><a href="/ccc/ccc">Crawl Cosplay Challenges</a> (CCC)</h3>
<ul><li>The original weekly challenge posted on Reddit since 2019!</li>
    <li>Read <a href="/ccc/about_ccc">About CCC</a>.</li>
    <li>See: <a href="/ccc/all_ccc_history">All CCChallenges</a></li></ul>

<h3><a href="/cctt/cctt">Crawl Cosplay Trunk Tournament</a> (CCTT)</h3>
<ul><li>A tournament lasting about a month with each week highlighting some of the latest Trunk changes.</li>
    <li>CCTT #2 started Friday Feb 21st, 2025 at 00:00 UTC and runs until March 28th.</li>
    <li>Read <a href="/cctt/about_cctt">About CCTT</a>.</li>
	<li><a href="/cctt/past_cctt_results">Past CCTT Results</a></li>
</ul>

<h3><a href="/ccsdt/ccsdt">Crawl Cosplay Sudden Death Tournament</a> (CCSDT)</h3>
<ul><li>A tournament lasting 5 weeks with a different Crawl Unique combo to play each week. You only get one try!</li>
    <li>Next CCSDT for v0.33 in mid 2025.</li>
    <li>Read <a href="/ccsdt/about_ccsdt">About CCSDT</a>.</li></ul>

<h3><b>Crawl Cosplay Fork Tournament</b> (CCFT) coming in early June 2025. NEW!</h3>
<ul><li>A tournament lasting about a 4-5 weeks with each week highlighting a different DCSS Fork.</li>
    <li>The first ever CCFT will likely start in early June 2025.
    <li>Read a draft of <a href="/ccft/about_ccft">About CCFT</a>.</li>
</ul>

<h2>Want to chat?</h2>
<p>Come chat with us on our 
    <a href="https://discord.gg/ZQ4kk6n" target="_blank">Discord server<img src="/img/discord_transparent_border.png" width="18" height="18" ></a> 
    with over 300 members!</p>

<h2><a href="cc_streamers.html">Crawl Cosplay Streamers</a></h2>
<p>Our Crawl Cosplay YouTube channel <a href="https://www.youtube.com/@dcsscrawlcosplayshorts" target="_blank">@dcsscrawlcosplayshorts</a> is a repertoire of
	short videos and shorts that have links to the full video or playlist for a Crawl Cosplay streamer.</p>
<p>Please <b>Follow</b> / <b>Subscribe</b> to these streamers' channels, and <b>Like</b> their videos. It motivates them to make more great Crawl Cosplay content!</p>
<ul>
	<li><b>particleface</b>: CCA & CCTT <a href="https://www.twitch.tv/particleface" target="_blank">www.twitch.tv/particleface</a>
		& <a href="https://www.youtube.com/@particleface" target="_blank">www.youtube.com/@particleface</a></li>
	<li><b>Dumalacath</b>: CCA, CCC & CCTT <a href="https://www.youtube.com/@dumalacath" target="_blank">www.youtube.com/@dumalacath</a></li>
	<li><b>Arcadio</b> (in french): CCTT <a href="https://www.twitch.tv/arcadiorl" target="_blank">www.twitch.tv/arcadiorl</a>
		& <a href="https://www.youtube.com/@arcadiorl" target="_blank">www.youtube.com/@arcadiorl</a></li>
</ul>
<p>and the one and only:</p>
<ul>	<li><b>MalcolmRose</b>: CCTT <a href="https://www.twitch.tv/malcolmrosegaming" target="_blank">www.twitch.tv/malcolmrosegaming</a>
		& <a href="https://www.youtube.com/@MalcolmRoseGaming" target="_blank">www.youtube.com/@MalcolmRoseGaming</a></li>
</ul>
<p>See the <a href="/cc_streamers">Crawl Cosplay Streamers</a>'s page for more info on them and links to their CC playlists.</p>
<p>Happy Crawling,</p>
<p>from RoGGa your host, our webdev team, and the @VIPs members who all help make this site what it is. :-D</p>
<br>
