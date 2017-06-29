<?php
namespace app\controllers;


use app\models\Customer;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $customer = Customer::findOne(1);

        return $this->render('customer', [
            'customer' => $customer,
        ]);
    }
}
