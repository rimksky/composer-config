<?php

  namespace Rimksky\Util;

  /**
   * Config
   */
  class Config {
    protected static $instance;
    protected $config = [];

    private function __construct(){
    }

    public static function getInstance(){
      if( !isset( self::$instance ) ){
        self::$instance = new Config();
      }
      return self::$instance;
    }

    public static function i(){
      return self::getInstance();
    }

    public function __set( $name, $value ){
      $this->config[ $name ] = $value;
    }

    public function __get( $name ){
      return $this->config[ $name ];
    }
  }

?>
