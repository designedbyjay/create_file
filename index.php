<?php 

	include('includes/header.php');
	
	if( sizeof($_GET)==0 && sizeof($_POST)==0 ){
	
		//echo 'No Request';
		include('includes/form.php');
	
	}else if( sizeof($_GET)>0 && sizeof($_POST)==0 ){
	
		//echo 'Just Get';
		
	}else if( sizeof($_GET)==0 && sizeof($_POST)>0 ){
	
		//echo 'Just Post';
		//var_dump($_POST); echo "<br>"; var_dump($_FILES);
		
		include('includes/fileCreator.php');
	
	
	}else if( sizeof($_GET)>0 && sizeof($_POST)>0 ){
	
		//echo 'Both';
	
	}
	
	
?>

<?php if($post == true){  ?>
		<h1>Thanks <?php echo $_POST['fname']; ?> !</h1>
		<h2> We're one step closer in connecting and discussing <span>great ideas</span> that can <em>make a difference</em>.</h2>
		<h3>Return to my portfolio at <a href="http://www.designedbyjay.com">designedbyjay.com</a> or see what's the latest and greatest by visiting my <a href="http://www.designedbyjay.tumblr.com">tumblr.</h3>
		<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e56a8b8090e6aa6"></script><!-- AddThis Button END -->
		
				
	<?php }else{ ?>
		<h1>Get in touch</h1>



<?php 

	include('includes/footer.php');

?>



	

