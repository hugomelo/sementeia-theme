<div class="sidebar">

<?php $id_agenda=get_cat_ID('agenda');?>
<?php $id_circle_images=get_cat_ID('circle-images');?>


<?php

$skipList = array('agenda', 'destaques');

$cats = get_categories();
foreach($cats as $cat) {
	if (in_array($cat->slug, $skipList)) 
		continue;
 echo "<div class=\"category-div category-".$cat->slug."\" >";
    echo "<a href=\"".get_category_link($cat->term_id)."\" >".$cat->cat_name."</a>";
	if (trim($cat->description) != "") {
		 echo "<div class=circle-description >";
		 echo  $cat->description;
		 echo "</div>";
	}
 echo "</div>";
}
//wp_list_categories( $args );

?> 

</div> <!--fim do sidebar-->