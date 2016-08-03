<?php

function beginsWithCapitalLetter($buffer) {
    return (bool)preg_match('/^[A-Z]/', $buffer);
}

$str1 = 'Hello World!';
$str2 = 'hello world!';

var_dump(beginsWithCapitalLetter($str1));
var_dump(beginsWithCapitalLetter($str2));
