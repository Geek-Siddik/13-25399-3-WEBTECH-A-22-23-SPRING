<?php
    // Array with names
    $a[] = "Siddik";
    $a[] = "Test";
    $a[] = "Admin";
    $a[] = "Shadhin";
    $a[] = "user1";
    $a[] = "B diye nam";
    $a[] = "C diye nam";
    $a[] = "D diye nam";
    $a[] = "E diye nam";
    $a[] = "F diye nam";
    $a[] = "G diye nam";
    $a[] = "H diye nam";

    // get the q parameter from URL
    $q = $_REQUEST["q"];

    $hint = "";

    // lookup all hints from array if $q is different from ""
    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($a as $name) {
            if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = $name;
                } else {
                    $hint .= ", $name";
                }
            }
        }
    }

    // Output "no suggestion" if no hint was found or output correct values
    echo $hint === "" ? "no suggestion" : $hint;
    ?>
