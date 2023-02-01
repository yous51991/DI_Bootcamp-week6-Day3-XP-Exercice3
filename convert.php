<?php

$value = $_POST['nombre'];


function Test($value)
{
    return $value > 30 ? "le plus grand" : "le plus petit";
}


echo Test($value);