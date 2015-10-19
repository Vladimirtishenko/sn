<?php
        // Если хотим видить в виде флагов то используем этот код
        foreach($languages as $key=>$lang) {
            if($key != $currentLang) {
                echo CHtml::link(
                    $lang,
                    $this->getOwner()->createMultilanguageReturnUrl($key));                
            } else {
                echo '<span class="no-active-color">'.$lang.'</span>';
            }
        }
?>