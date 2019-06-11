<?php
/**
 * Created by PhpStorm.
 * User: zhangzhongxian
 * Date: 2019/6/10
 * Time: 16:54
 */

namespace frontend\controllers;


use yii\web\Controller;

class IndexController extends Controller
{

    public function actionIndex()
    {
        echo phpinfo();
    }
}