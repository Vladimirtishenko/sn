<?php
class SmiWidget extends CWidget
{
    public $smis;
    public function init()
    {
        $criteria = new CDbCriteria();
        $criteria->limit = 7;
        $criteria->condition = 'is_main = 1';
        $criteria->order = 'id DESC';
        $this->smis = News::model()->findAll($criteria);
    }
    public function run()
    {
        $this->render('smi', array('smis'=>$this->smis));
    }
}