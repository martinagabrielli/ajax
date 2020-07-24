<?php
    $existingNames = array("Anthony", "Al", "Alan", "Aly", "Anne", "Anik", "Bob", "Billy", "Barbara", "Bernard", "Charles");

    if (isset($_POST['suggestion'])) {
        $name = $_POST['suggestion'];

        foreach ($existingNames as $existingName) {
            if (strpos($existingName, $name) !== false) {
                echo $existingName;
                echo "<br>";
            }
        }
    }
?>