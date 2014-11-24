<?php

namespace app\modules\chat\controllers;

use yii\web\Controller;
  /**
   * DefaultController is the default controller to module Chat.
   */

class DefaultController extends Controller
{
    /**
     * Index action is the default action in a controller.
     */
    public function actionIndex()
    {
        return $this->render('index');
//        echo 'Hello World';
    }
}


