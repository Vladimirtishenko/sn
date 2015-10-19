<?php
class LastRegionNewsWidget extends CWidget
{
    public $region_id;

    protected $model;

    public function init()
    {
        $criteria = new CDbCriteria();
        $criteria->limit = 3;
        $criteria->condition = 'region_id = :id';
        $criteria->params = array(':id'=>$this->region_id);
        $criteria->order = 'date DESC';
        $this->model = News::model()->findAll($criteria);
    }

    public function run()
    {
        $this->render('lastRegionNews', array('news'=>$this->model));
    }
}