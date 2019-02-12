	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css2/sell.css">
		<link rel="stylesheet" type="text/css" href="css/market.css">
	</head>
	<?php
	  include 'head.php';
    include 'navigation.php';
	 ?>
	<body>
	<form id ="upload" method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image"/>
		<textarea name="text" cols="40" rows="4" placeholder="Description"></textarea><br>
		<input type ="text" name="Price" placeholder="Price"><br>
		<input type="submit" name="submit" value="Upload" id ="submit"/>

	</form>
		<?php
		require_once 'initializedb.php';
		if(isset($_POST['submit'])){
		//Targeting Folder
		$target="files/";
		$target=$target.basename($_FILES['image']['name']);
		//Getting Selected image Type
		$type=pathinfo($target,PATHINFO_EXTENSION);
	 //Allow Certain File Format To Upload
	 if($type!='jpg' && $type!='jpeg' && $type!='png' && $type!='JPG'){
		echo "<div class = 'alert alert-warning alert-dismissible' id = 'alert'>";
				echo "Only JPG,JPEG,PNG file formats can be uploaded!";
		echo "</div>";

	 }
	 else{
	  //checking for Exsisting image Files
	  	if(file_exists($target)){
				echo "<div class = 'alert alert-warning alert-dismissible' id = 'alert'>";
						echo "File Exists";
				echo "</div>";
	  	}else{

	   //Moving The image file to files folder
	  		$uplaod_success=move_uploaded_file($_FILES['image']['tmp_name'],$target);
	  		if($uplaod_success==TRUE){
	   //Getting image Information
	   		$name=$_FILES['image']['name'];
	      $size=$_FILES['image']['size'];
				$description =$_POST['text'];
				$price=$_POST['Price'];
	      $sql="INSERT INTO image (name,description,price,size,type)VALUES('$name','$description','$price','$size','$type')";
	   $result=mysql_query($sql);
	   if($result==TRUE){
			 echo "<div class = 'alert alert-success alert-dismissible' id = 'alert'>";
					 echo "uploaded successfully";
			 echo "</div>";
   }else {
		 echo "<div class = 'alert alert-danger alert-dismissible' id = 'alert'>";
				 echo "unsuccessfull!";
		 echo "</div>";
   }
 	  }

  }
 	}
 }
?>
<?php
include 'footer.php';
 ?>
</html>
