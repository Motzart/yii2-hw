<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;
use frontend\models\Members;
use frontend\models\Edstatus;

  /**
   * MembersController is the default controller to my models Members.
   */
class MembersController extends Controller
{
    /**
     * Index action is the default action in a controller.
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}

