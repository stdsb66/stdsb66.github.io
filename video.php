<!-- 
该资源来自远梦博客：blog.qoz.CC
视频接口来自于YMAPI：api.qoc.cc
-->
<?php

function read(...$filelist) {
    $list = [];
    foreach ($filelist as $file) {
        $handle = fopen($file, 'r');
        while (($line = fgets($handle)) !== false) {
            array_push($list, trim($line));
        }
        fclose($handle);
    }
    return $list;
}

$list = read('cs.txt');
$url = $list[array_rand($list)];

header("Location: {$url}");