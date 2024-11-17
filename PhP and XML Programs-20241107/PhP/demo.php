<?php
    $arr1 = ["apple", "banana"];
    $arr2 = ["orange", "grape"];
    $merged = array_merge($arr1, $arr2); // ["apple", "banana", "orange", "grape"]
    echo "<br>";
    print_r($merged);

    echo "<br>";
    $str = "Hello";
    echo md5($str); // Outputs an MD5 hash
    echo "<br>";
    echo sha1($str); // Outputs a SHA-1 hash

?>