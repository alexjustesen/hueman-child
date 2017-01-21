<?php $category = get_the_category(); ?>
<?php
    switch( $category[0]->cat_name ) {
        case "Galleries" :
            echo '<p class="post-category hotness"><i class="fa fa-picture-o fa-fw"></i> ';
            the_category(' / ');
            echo '</p>';
            break;
        case "Hotmess" :
        case "Hotness" :
            echo '<p class="post-category hotness"><i class="fa fa-fire fa-fw"></i> ';
            the_category(' / ');
            echo '</p>';
            break;
        case "Humanity" :
            echo '<p class="post-category humanity"><i class="fa fa-heart fa-fw"></i> ';
            the_category(' / ');
            echo '</p>';
            break;
        case "Humor" :
            echo '<p class="post-category humor"><i class="fa fa-thumbs-up fa-fw"></i> ';
            the_category(' / ');
            echo '</p>';
            break;
        case "News" :
            echo '<p class="post-category humor"><i class="fa fa-newspaper-o fa-fw"></i> ';
            the_category(' / ');
            echo '</p>';
            break;
        case "Poll" :
        case "Polls" :
            echo '<p class="post-category poll"><i class="fa fa-bar-chart fa-fw"></i> ';
            the_category(' / ');
            echo '</p>';
            break;
        default : 
            echo '<p class="post-category">';
            the_category(' / ');
            echo '</p>';
            break;
    }
?>