<?php
namespace module\index\ctrl;

use lying\base\Ctrl;
use module\index\model\User;

class IndexCtrl extends Ctrl
{
    public $layout = 'main';
    
    public $deny = [];
    
    public function init()
    {
        parent::init();
    }
    
    public function index()
    {
        
        $user = User::findAll(['id'=>13]);
        
        var_dump($user);
        
        /*return $this->render('index', [
            'name' => 'suyaqi',
        ], $this->layout, ['title'=>'主页']);*/
    }
    
    public function get()
    {
        
    }
    
    public function userName()
    {
        $url = url('user-name', [
            'time'=>'2016-12-22',
            'id'=>7,
            'game'=>'lol+',
            'type'=>'苏亚琦'
        ]);
        var_dump($url);
    }
}