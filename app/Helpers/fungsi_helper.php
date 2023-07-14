<?php
function potong($text, $panjang)
{
    $first100Chars = substr($text, 0, $panjang);
    return $first100Chars;
}
