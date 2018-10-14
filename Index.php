<?php
namespace xq\lib;
use xq\example\Appinstance;
require(__DIR__.'/lib/App.php');

$app = App::start();

// var_dump( LianLianConfigure::ALIPAY );
// exit;

$ss = new Appinstance();

$ss->index();

