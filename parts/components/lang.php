<?php 
$languages = apply_filters('wpml_active_languages', NULL, array('skip_missing' => 1)); 

if(!empty($languages)) {
    $current_language = null;
    $other_languages = array();

    foreach($languages as $lang_code => $language) {
        if($language['active']) {
            $current_language = $language;
        } else {
            $other_languages[$lang_code] = $language;
        }
    }

    // Si aucune autre langue → ajout d’une classe spécifique
    $extra_class = empty($other_languages) ? ' language-switcher--single' : '';

    echo '<div class="language-switcher-container' . $extra_class . '">';
    
    if($current_language) {
        echo '<div class="current-language" tabindex="0">';
        echo '<span class="language-name">'. $current_language['native_name'] .'</span>';
        echo '</div>'; 
    }

    if(!empty($other_languages)) {
        echo '<ul class="language-options">'; 
        foreach($other_languages as $language) { 
            echo '<li>'; 
            echo '<a href="'. $language['url'] .'">'; 
            echo '<span class="language-name">'. $language['native_name'] .'</span>';
            echo '</a>'; 
            echo '</li>'; 
        }
        echo '</ul>';
    }

    echo '</div>';
}
?>