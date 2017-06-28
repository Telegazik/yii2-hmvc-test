<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 28.06.2017
 * Time: 13:57
 */

namespace app\widgets;


use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class GridViewPanelled extends Widget
{
    /** @var string */
    public $controller;
    /** @var ActiveDataProvider */
    public $dataProvider;
    /** @var string */
    public $id;
    /** @var string */
    public $title;

    public function init()
    {
        parent::init();

        //$this->_controller = \Yii::createObject($this->controller);

        if (!$this->dataProvider || ! $this->dataProvider instanceof ActiveDataProvider) {
            throw new InvalidConfigException('dataProvider must be correct ActiveDataProvider.');
        }

        if (empty($this->id)) {
            throw new InvalidConfigException('You must specify a value for ID.');
        }

        if ($this->dataProvider->sort->sortParam == 'sort') {
            $this->dataProvider->sort->sortParam = $this->id . '-sort';
        }
        if ($this->dataProvider->pagination->pageParam == 'page') {
            $this->dataProvider->pagination->pageParam = $this->id . '-page';
        }
    }

    public function run()
    {
        return $this->render('gridview-panelled', [
            'id' => $this->id,
            'title' => $this->title,
            'dataProvider' => $this->dataProvider,
        ]);
    }
}
