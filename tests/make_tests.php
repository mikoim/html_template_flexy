<?php


    $dh = opendir(__DIR__.'/templates/');
    $id = 0;
    while (false !== ($file = readdir($dh))) {
        if ($file{0} == '.') {
            continue;
        }
        if (is_dir(__DIR__.'/templates/'.$file)) {
            continue;
        }
        $id++;
        $test = __DIR__."/test_{$file}.phpt";
        if (file_exists($test)) {
            continue;
        }
        $stub = "--TEST--
Template Test: $file
--FILE--
<?php
require_once 'testsuite.php';
compilefile('$file');

--EXPECTF--
";
        $fh = fopen($test,"w");
        fwrite($fh, $stub);
        fclose($fh);
    }



   