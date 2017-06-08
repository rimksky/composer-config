# php-config-class

## Overview
"php-config-class" is very simple libary for php.
This library is assumed to be replacing "define" function with static class value.
if using this, Config parameters in your application use like global variable,
but not using global variable.

## System Requirements
* PHP 5.4.0 or greater  
* Composer

## Installation
    % php composer require rimksky/config

## How to use
    <?php
        require_once( __DIR__."/vendor/autoload.php" );
        use Rimksky\Util\Config;

        // you can use in anywhere scope.
        Config::getInstance()->your_param = "test";   // setting value
        echo Config::getInstance()->your_param."\n";  // getting value

        // alternative method
        Config::i()->your_param2 = "test";   // setting value
        echo Config::i()->your_param2."\n";  // getting value

## Notice
Set value by Config::__set() magic method is *not* const value.

## License
"php-config-class" is licensed under The MIT License (MIT).
