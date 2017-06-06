<?php

  namespace rimksky;

  /**
   * weblib のコンフィグを格納するクラス
   * singleton
   */
  class Config {
    /**
     * 自身のインスタンス
     */
    protected static $instance;

    /**
     * コンフィグパラメータ
     */
    protected $config = [];

    /**
     * コンストラクタ
     * singleton
     */
    private function __construct(){
    }

    public static function getInstance(){
      if( !isset(self::$instance) ){
        self::$instance = new Config();
      }
      return self::$instance;
    }

    public function __set( $name, $value ){
      $this->config[ $name ] = $value;
    }

    public function __get( $name ){
      return $this->config[ $name ];
    }
  }

?>
