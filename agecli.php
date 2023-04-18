<?php
$name = $argv[1];
$bYear = $argv[2];
$age = (date("Y")) - $bYear;
echo "Your name is " . $name . " and your age is " . $age . " years old\n";
if ($age >= 60) {
    echo "You are a voter\nYou are a senior citizen";
} else if ($age >=18 and $age < 60){
    echo "You are a voter\nYou are not a senior citizen";
}
else {
    echo "You are not a voter\nYou are not a senior citizen";
}


?>
