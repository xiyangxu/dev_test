<?php
namespace Admin\Controller;
use Think\Controller;

class JSLearnController extends Controller {
    
    function db_test() {
        M('test')->where(array('id' => '1'))->save(array('content' => 'test'));
        var_dump(M('test')->select()) ;
    }
}