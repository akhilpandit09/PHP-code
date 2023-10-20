<?php

    $x="akhil pandit";
    echo strlen($x)."<br/>";

    echo str_word_count($x)."<br/>";

    echo strrev($x)."<br/>";

    echo strpos($x, "pandit")."<br/>"; //search for a text within a string

    echo str_replace("pandit", "prajapati", $x)."<br/>"; //replace pandit with prajapati within string "akhil pandit"


?>