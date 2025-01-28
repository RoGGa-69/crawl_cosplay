<?php 
    $dir_path = "img/titles";
    $files = scandir($dir_path);
    $count = count($files);
    $index = rand(2, ($count-1));
    $filename = $files[$index];

    echo '<h2>Welcome to the <b>Crawl Cosplay</b> 4-in-1 website!</h2>';
    echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'" style="float:right">';
?>
Select your pleasure among the following options:

<h3><a href="/cca/cca">Crawl Cosplay Academy</a> (CCA)</h3>
<ul><li>For those new to DCSS or who haven't yet won a couple of times.</li>
    <li>Read <a href="/cca/about_cca">About CCA</a></li></ul>

<h3><a href="/ccc/ccc">Crawl Cosplay Challenges</a> (CCC)</h3>
<ul><li>The original weekly challenge posted on Reddit since 2019!</li>
    <li>Read <a href="/ccc/about_ccc">About CCC</a>.</li>
    <li>See: <a href="/ccc/all_ccc_history">all CCC challenges</a></li></ul>

<h3><a href="/cctt/cctt">Crawl Cosplay Trunk Tournament</a> (CCTT)</h3>
<ul><li>A tournament lasting about a month with each week highlighting some of the latest Trunk changes.</li>
    <li>Next CCTT likely in March 2025.</li>
    <li>Read <a href="/cctt/about_cctt">About CCTT</a>.</li></ul>

<h3><a href="/ccsdt/ccsdt">Crawl Cosplay Sudden Death Tournament</a> (CCSDT)</h3>
<ul><li>A tournament lasting 5 weeks with a different Crawl Unique combo to play each week. You only get one try!</li>
    <li>Next CCSDT for v0.33 in mid 2025.</li>
    <li>Read <a href="/ccsdt/about_ccsdt">About CCSDT</a>.</li></ul>

<br>
<h3>Want to chat?</h3>
<p>Come chat with us on our 
    <a href="https://discord.gg/ZQ4kk6n" target="_blank">Discord server<img src="/img/discord_transparent_border.png" width="18" height="18" ></a> 
    with over 222 members!</p>
<br>
<p>Happy Crawling,</p>
<p>from RoGGa your host, our webdev team, and the @VIPs members who all help make this site what it is. :-D</p>
<br>
