<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name =  $_REQUEST["submit"];
        if (empty($name)) 
        {
            header('location: name.html');
        }
        else if (str_word_count(trim($name)) < 2) {
            header('location: name.html');
        }
        else if (!($name[0] >= 'a' && $name[0] <= 'z') && !($name[0] >= 'A' && $name[0] <= 'Z')) {
            header('location: name.html');
        }
        else {
            $isValid = true;
            for ($i = 0; $i < strlen($name); $i++) {
                $char = $name[$i];
                if (!(($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z') || $char == '.' || $char == '-' || $char == ' ')) {
                    $isValid = false;
                    break;
                }
            }
            if (!$isValid) {
                echo "welcome";
            } else {
                header('location: name.html');
            }
        }
    }
    ?>