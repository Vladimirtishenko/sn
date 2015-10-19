<?php
class FrontsRegion extends CWidget
{
    public $model;
    public $post;
    public $region_id;
    public function init()
    {
        $crit = new CDbCriteria();
        $crit->condition = $this->post.' = :post AND region_id = :region_id';
        $crit->params = array(':post'=>1, ':region_id'=>$this->region_id);
        $this->model = Front::model()->findAll($crit);
    }
    public function run()
    {
        $this->render('frontsRegion', array('model'=>$this->model));
    }
}
