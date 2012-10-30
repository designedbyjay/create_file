<?php 
	
	$targetPath = 'uploads/';
	
	//if our targetPath Doesn't Exist - make it.
	if( !is_dir($targetPath) ) mkdir($targetPath, 0755);
	
	//get all of our post data
	$personsName = trim( $_POST['fname'] );
	$desiredTitle = trim($_POST['title']);
	$incomingContent = trim($_POST['content']);
	
	$filename = 'entries.txt';
	
	//get our date from PHP
	$date = date('M jS, Y');
	
	//the formatted content we will write into our file
	$entry = "\n".$date." ".$personsName."\n".$desiredTitle."\n".$incomingContent."\n"; 
	
	//creating a full path same as $targetPath = $targetPath.$filename;
	$targetPath .= $filename;
	
	//open a document to append it
	// if it doesn't exist create it
	$document = fopen($targetPath, 'a');
	fwrite($document, $entry);
	//$contents = fread($document);
	
	fclose($document);
	
	//echo $contents;
	
	
?>