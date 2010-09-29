	<div class="pageTitle sixCol">

	<div class="<?if($editable_title):?>ui-IPE<?endif;?> fourCol floatLeft rows-1 field-title marshal-cms">
		<h2 class="ipe h2"><?=$title;?></h2>
	</div>

	<div class="ui-IPE fifthCol oneCol rows-1 field-slug marshal-cms">
		<label>Page Slug</label>
		<p class="ipe p"><?=$slug;?></p>
	</div>
		
		
	<?if($allowDelete):?>
		<a class="icon deleteLink" href="#" title="Delete this page."></a>
	<?endif;?>
	
	<div class="clear"></div>

</div>
