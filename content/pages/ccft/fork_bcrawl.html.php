<?php
    $this->layout = 'ccft';

    $dir_path = "img/uniques";
    $files = scandir($dir_path);
    $count = count($files);
    $index1 = rand(2, ($count-1));
    $index2 = rand(2, ($count-1));
    $index3 = rand(2, ($count-1));
    $index4 = rand(2, ($count-1));
    $filename1 = $files[$index1];
    $filename2 = $files[$index2];
    $filename3 = $files[$index3];
    $filename4 = $files[$index4];

    echo '<h2>About fork BCrawl</h2>';
    echo '<img src="/'.$dir_path."/".$filename1.'" alt="'.$filename1.'" width="72" height="72" style="float:right">';
?>

<p>The <a href="https://github.com/b-crawl/bcrawl" target="_blank"><b>BCrawl Fork</b></a> is full of changes even though it retains the food consumption aspect.</p>
<p>For a text friendly writeup, see the CHANGELOG on <a href="https://github.com/b-crawl/bcrawl/blob/master/CHANGES.md" target="_blank">github.com/b-crawl/bcrawl/blob/master/CHANGES.md</a></p>
