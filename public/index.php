<?php
include "./../src/function.php";

$watchmen = [
    'Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'
];


echo sayHello();
echo '</br>';
echo whoAmI("Ozymandias", $watchmen);
