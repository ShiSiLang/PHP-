<?php 
	if($_FILES['files']['name']==true){
		$filesize=$_FILES['files']['size'];
		if($filesize>1000000){
			echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">...";
		}else{
			$path = './upfiles/'. $_FILES['files']['name'];
			if (move_uploaded_file($_FILES['files']['tmp_name'],$path)) { 
				echo "!!";
				echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">"; 
			}else{
				echo "!!";
          		echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">";
			}
		}
	}
?>