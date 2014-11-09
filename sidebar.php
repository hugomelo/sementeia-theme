
<div class="sidebar">
<?php
$skipList = array('agenda','destaques');
$cats = get_categories();
foreach($cats as $cat) {
	if (in_array($cat->slug, $skipList)) 
		continue;
 echo "<div class=\"category-div category-".$cat->slug."\" >";
    echo "<a href=\"".get_category_link($cat->term_id)."\" >".$cat->cat_name."</a>";
	if (trim($cat->description) != "") { ?>
		 <div class='circle-description circulo'>
			<div>
				<div class="lW" style="width:45px;"></div><div class="rW" style="width:47px;"></div><div class="lW" style="width:21px;"></div><div class="rW" style="width:17px;"></div><div class="lW" style="width:14px;"></div><div class="rW" style="width:9px;"></div><div class="lW" style="width:7px;"></div><div class="rW" style="width:3px;"></div><div class="lW" style="width:3px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:4px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:5px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:6px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:13px;"></div><div class="rW" style="width:8px;"></div><div class="lW" style="width:24px;"></div><div class="rW" style="width:15px;"></div><div class="lW" style="width:34px;"></div><div class="rW" style="width:33px;"></div><div class="lW" style="width:84px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:0px;"></div><div class="rW" style="width:0px;"></div>
				<div class=circulo-align>
					<p class="nav"><?php echo $cat->description?></p>							
				</div>
			</div>
		</div>
	<?php }
	 echo "</div>";
	}
	?> 


</div> <!--fim do sidebar-->
