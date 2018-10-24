<?php
namespace xq\core;

use xq\exception\ParamsException;

class ParamsBase  {


    protected $mapping = [];

    /**
     * @description 设置变量的名称
     * @param $variate [变量的名称]
     * @param $value [变量的值]
    */
    public function __set(  $variate , $value  ){



        $this->$variate = $value;


    }


    /**
     * @description 批量设置私有化函数
     * @param $variates [私有化属性列表]
     * @throws ParamsException
     */
    public function setVariates( array $variates ){

        if( empty( $variates ) ){

            throw new ParamsException('参数不能为空');

        }

        foreach( $variates as $key => $value ){

            $this->setVariate( $key , $value );

        }


    }


    public function getVariate( string $key=null ){

        if( $key == null ){

            $variate = get_object_vars( $this );

            unset( $variate['mapping'] );

            return array_filter( $variate ,[$this,'paramFilter']);

        }

        return $this->$key;

    }


    /**
     * @description array_filter 的问题
     * @param $value 的设置的值
     * @return boolean
    */
    protected function paramFilter( $value ){

        return is_null( $value ) ? false : true;

    }



    public function getVariateWithMapping(){

        $variates = $this->getVariate();

        $mapping = $this->mapping;

        $result = [];

        foreach( $variates as $key => $value ){


            $index = $mapping[$key];

            $result[ $index ] = $value;

        }

        return $result;
    }

    /**
     * @author chhy 才华横溢
     * @description [设置参数的值]
     * @param $key [键]
     * @param $value [值]
     * @throws ParamsException
    */
    public function setVariate( string $key=null , string $value=null ){

        if( $key === null || $value  === null){

            throw new ParamsException('key 和 值不能为空');

        }

        $this->$key = $value;

    }


    /**
     * @author chhy 才华横溢
     * @param $key [指定内容的键]
     * @return string
    */
    public function __get( $key ){

         return $this->$key;

    }


}