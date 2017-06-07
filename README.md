# composer-config

## Overview
"composer-config" is simple libary for php.
This library is assumed to be replacing "define" function with static class value.
if using this, Config parameters in your application use like global variable,
but not using global variable.

## System Requirements
*PHP 5.5.0 or greater  
*Composer

## Setting composer.json
    {
      "repositories": [
        {
          "type": "vcs",
          "url": "https://github.com/rimksky/composer-config.git"
        }
      ]
    }

## Installation
    % php composer require rimksky/config:dev-master

## How to use
    <?php
        require_once( __DIR__."/vendor/autoload.php" );
        use Rimksky\Util\Config;

        // you can use in anywhere scope.
        Config::getInstance()->your_param = "test";   // setting value
        echo Config::getInstance()->your_param."\n";  // getting value

        // alternative method
        Config::ins()->your_param2 = "test";   // setting value
        echo Config::ins()->your_param2."\n";  // getting value

## License

composer-config is licensed under The MIT License (MIT).