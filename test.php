<?php
while (!feof(STDIN)) {
    $cmd = fread(STDIN, 1024);
    $out = array();
    exec($cmd,$out);
    var_dump($out);
}