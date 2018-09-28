<?php
namespace app\admin\validate;
use think\Validate;
class Cate extends Validate
{

    protected $rule=[
        'catename'=>'unique:cate|require',
    ];


    protected $message=[
        'catename.require'=>'栏目名称不得为空！',
        'catename.unique'=>'栏目名称不得重复！',
    ];

    protected $scene=[
        'add'=>['catename'],
        'cateedit'=>['catename'],
    ];





    

    




   

	












}