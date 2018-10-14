<?php
namespace xq\lianlian;
use xq\interfacelib\Generate;
use xq\interfacelib\LianLianNotify;
use xq\interfacelib\LianLianParam;

class GenerateOrder implements Generate{

     public static function generate( LianLianParam  $param ){

            echo 'hello it\'s dump to care';

     }


     public static function notify( LianLianNotify $response)
     {



     }


}