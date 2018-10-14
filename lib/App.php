<?php
namespace xq\lib;

class App{

    protected static $ConfigureRegister;

    protected static $AppException;

    protected static $APP_PATH ='';

    protected static $DEFAULT_NAMESPACE_PREFIX='';

    public static function start(){
        


            self::$ConfigureRegister = self::includeConfigure();

            self::$AppException = self::includeException();

            self::$APP_PATH = self::$ConfigureRegister::APP_PATH;

            self::$DEFAULT_NAMESPACE_PREFIX = self::$ConfigureRegister::DEFAULT_NAMESPACE_PREFIX;

            spl_autoload_register( "xq\lib\App::payMentAutoLoad" );


    }


    public static function payMentAutoLoad( $name ){

        try{

            $classPath = str_replace( '\\' , DIRECTORY_SEPARATOR , $name );

            if( false !== strpos( $classPath , self::$DEFAULT_NAMESPACE_PREFIX ) ){
    
                 $firstShow = strpos( $classPath , '/' );
    
                 $classPath = substr( $classPath , $firstShow );
    
            }
            $classPath = self::$APP_PATH.$classPath.'.php';
    
            if( ! is_file( $classPath ) ){
    
                 throw new self::$AppException( '引入的文件不存在' );
    
            }
    

        }catch( \xq\exception\AppException $e ){

            echo $e->getMessage().$classPath; 

            exit;

        }

        return require_once( $classPath );

    }


    protected static function includeConfigure(){

        include_once(__DIR__.'/../Configure.php');

        return \xq\Configure::CLASS;

    }

    protected static function includeException(){

       include_once( __DIR__.'/../exception/AppException.php' );

       return \xq\exception\AppException::CLASS;

    }


}