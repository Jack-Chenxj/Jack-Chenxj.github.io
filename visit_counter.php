<?php
    $file = 'visit_count.txt';

    // Read current count
    $count = file_get_contents($file);

    // Increase count by 1
    $count = intval($count) + 1;

    // Write the new count back to the file
    file_put_contents($file, $count);

    // Return the count
    echo $count;
?>
