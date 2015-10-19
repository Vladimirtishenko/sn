<?php
class Comments extends CWidget
{
    public function init()
    {
        function GetComments(){}
    }
    public function run()
    {
        $this->render('comments');
    }

    public function GetComments($news_id, $st = 0)
    {
        $start = $st;
        if($model = NewsComments::model()->findAll('parent_id = :parent_id AND news_id = :news_id ORDER BY id ASC', array(':parent_id'=>$start, ':news_id'=>$news_id)))
        {
            echo '<div class="margin-left">';
            foreach($model as $items):
                echo '<div class="child"><div class="user-name">'.$items->user_name.'</div><div class="message">'.$items->description.'</div>';
                $this->getComments($news_id, $items->id);
                echo '</div>';
            endforeach;
            echo '</div>';
        }
    }
}