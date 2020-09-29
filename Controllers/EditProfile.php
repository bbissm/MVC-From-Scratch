<?php
	class EditProfile extends Controller {

		public static function showProfile() {
			$result = self::query("Select * FROM mvc_project.users WHERE id_user=".$_SESSION["loggedIn"]);
			return $result;				
		}

		public static function edit()
		{
			$fileNameNew='';
			//Create Folder for image
			if(!file_exists("Views/uploads/".$_SESSION["loggedIn"])) {
				mkdir("Views/uploads/".$_SESSION["loggedIn"]);
			}
			$folder_path="Views/uploads/".$_SESSION["loggedIn"];

			
			//Upload Image to folder
			$file = $_FILES["image"];
			$fileName =$_FILES["image"]["name"];
			$fileTmpName =$_FILES["image"]["tmp_name"];
			$fileSize =$_FILES["image"]["size"];
			$fileError =$_FILES["image"]["error"];
			$fileType =$_FILES["image"]["type"];

			$fileExt = explode('.', $fileName);
			
			$fileActualName = strtolower($fileExt[0]);
			$fileActualExt = strtolower(end($fileExt));
			$allowedExt = array('jpg','jpeg','png');
			if(in_array($fileActualExt, $allowedExt)) {
				if($fileError === 0) {
					if($fileSize < 50000000) {
						$fileNameNew = $fileActualName.".".$fileActualExt;
						$fileDestination = $folder_path."/".$fileNameNew;
						//Prüfen ob im Ordner bereits Bilder hinterlegt sind.
						$files = scandir($folder_path);
						for ($i=3; $i < count($files); $i++) { 
							if($i > 2) {
								unlink($folder_path."/".$files[$i]);
							}
						}
						move_uploaded_file($fileTmpName, $fileDestination);
					}else{
						echo "Your image is too big!";
						echo "<hr>";
					}
				}else{
					echo "There was an error uploading your image.";
					echo "<hr>";
				}
			}else{
				echo "File Type is not supported";
				echo "<hr>";
			}
			
			//Prüfen ob POST image leer ist(das Bild vom Benutzer wurde nicht editiert), dann mit den Pfad mit dem bereitsvorhandenen Bild erweitern
			$images = scandir($folder_path);
			$img_path = "";
			for ($i=3; $i < count($images); $i++) { 
				if($i > 2) {
					$img_path = $folder_path."/".$images[$i];
				}
			}

			


		    $query = "UPDATE mvc_project.users SET prename='".$_POST["prename"]."', lastname='".$_POST["lastname"]."', name='".$_POST["username"]."', image='".$img_path."', email='".$_POST["email"]."' WHERE id_user =".$_SESSION["loggedIn"];
		    echo "<hr>";
		    echo $query;
			self::query($query);		

			
		
			header('Location: '.$_SERVER['REQUEST_URI']);
			
		}	

		public function logout()
		{
			session_destroy();
			header('Location: /');
		}
	}
?>
