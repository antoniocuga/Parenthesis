#!/usr/bin/php
<?php
/**
 * PHPSpec Composer Script
 */
ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);

require __DIR__.'/vendor/autoload.php';

$phpspec = new \PHPSpec\PHPSpec($argv);
$phpspec->execute();

