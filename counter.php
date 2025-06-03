<?php
$counter_file = 'counter.txt';

// Check if file exists, if not create it
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 0);
}

// Read current count
$count = (int)file_get_contents($counter_file);

// Increment count
$count++;

// Save new count
file_put_contents($counter_file, $count);

// Return count
echo $count;
?>
