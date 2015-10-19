<?php
class FrontWidgetFull extends CWidget
{
    public $model;
    public function init()
    {
        $crit = new CDbCriteria();
        $crit->condition = 'on_front = :on_front';
        $crit->params = array(':on_front'=>1);
        $this->model = Front::model()->findAll($crit);
    }
    public function run()
    {
        $this->render('frontFull', array('model'=>$this->model));
    }
}
