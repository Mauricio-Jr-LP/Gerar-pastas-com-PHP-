<?php
$pastas = [
    'Pasta01',
    'Pasta02'
];

foreach ($pastas as $pasta) {
    mkdir(__DIR__.'/pastas/'.$pasta.'/', 01777, true);
    echo $pasta.'<br>';
} 

?>