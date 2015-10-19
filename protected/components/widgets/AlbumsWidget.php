<?php
class AlbumsWidget extends CWidget
{
    public $photos;
    public function init()
    {
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $criteria->group = 'id DESC';
        $this->photos = PhotoCategory::model()->findAll($criteria);
    }
    public function run()
    {
        $this->render('albums', array('photos'=>$this->photos));
    }
}