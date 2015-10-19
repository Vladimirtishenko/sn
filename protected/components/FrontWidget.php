<?php
class FrontWidget extends CWidget
{
    public $model;
    public function init()
    {
        $this->model = Front::model()->findAll();
    }
    public function run()
    {
        $this->render('front', array('model'=>$this->model));
    }
}
