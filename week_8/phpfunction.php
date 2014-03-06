<?php

function square($n1)
{
    $ret = $n1*$n1;
    return $ret;
}

echo square(9)."<br />";
echo square("7")."<br />";
print square("chicken")."<br />";