<?php
// counter.php
$filename = 'counter.txt';

if (!file_exists($filename)) {
    file_put_contents($filename, 1);
}

$count = (int)file_get_contents($filename);
$count++;
file_put_contents($filename, $count);

header('Content-Type: text/plain');
echo $count;
?>
