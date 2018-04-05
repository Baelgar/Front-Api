<?php

/**
 * @param $url
 * Redirect index.php to login.php
 */

function Redirect($url)
{
header('Location: ' . $url);

}

Redirect('login.php');

