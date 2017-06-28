<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 28.06.2017
 * Time: 12:45
 */

namespace app\controllers;


use app\models\Customer;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $provider = new ActiveDataProvider([
            'query' => Customer::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index', ['provider' => $provider]);
    }

    public function actionGetCustomers()
    {
        $provider = new ActiveDataProvider([
            'query' => Customer::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        // так нельзя сделать. Тут нужно рендерить представление виджета /widgets/views/gridview-modified.php
        return $this->renderAjax('index', ['provider' => $provider]);
    }
}
