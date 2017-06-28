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
    /** @var string Class name of the controller */
    public $controller;
    /** @var string ID prefix for the widget elements */
    public $id;
    /** @var string Title of the widget panel */
    public $title;
    /** @var array Options for the GridView */
    public $options;
    /** @var string CSS class for panel, for example: panel-primary */
    public $panelCssClass;

    public function init()
    {
        parent::init();

        /** @var ActiveDataProvider $dp */
        $dp = $this->options['dataProvider'];

        //$this->_controller = \Yii::createObject($this->controller);

        if (!$dp || !$dp instanceof ActiveDataProvider) {
            throw new InvalidConfigException('dataProvider must be correct ActiveDataProvider.');
        }

        if (empty($this->id)) {
            throw new InvalidConfigException('You must specify a value for ID.');
        }

        if ($dp->sort->sortParam == 'sort') {
            $dp->sort->sortParam = $this->id . '-sort';
        }
        if ($dp->pagination->pageParam == 'page') {
            $dp->pagination->pageParam = $this->id . '-page';
        }

        $this->options['dataProvider'] = $dp;
    }

    public function run()
    {
        return $this->render('gridview-panelled', [
            'id' => $this->id,
            'panelCssClass' => $this->panelCssClass,
            'title' => $this->title,
            'options' => $this->options,
        ]);
    }
}
