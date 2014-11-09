</div> <!--conteudo-->

</div><!-- fim do content-->
<div class="footer">
	 
	<div class="footer-content">
		
		<?php wp_tag_cloud( '
			smallest=10&
			largest=40&
			number=50&
			orderby=name&
			order=ASC&
			unit=px'
		 	); 
		 ?>
	
	</div> <!-- fim do footer-content-->
</div><!--fim do footer-->
<?php wp_footer();?>	
</body>
</html>
