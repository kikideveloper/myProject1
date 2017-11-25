<?php
	include 'inc.php';
	
	$action=$java->get("action","");
	if ($action == "add") {
		if ($_FILES!=="") {
			$uploads_dir="../../img/upload";
			foreach ($_FILES["pic"]["error"] as $key => $error) {
			    if ($error == UPLOAD_ERR_OK) {
			        $tmp_name = $_FILES["pic"]["tmp_name"][$key];
			        // basename() may prevent filesystem traversal attacks;
			        // further validation/sanitation of the filename may be appropriate
			        $nama = basename($_FILES["pic"]["name"][$key]);
			        $picture=move_uploaded_file($tmp_name, "$uploads_dir/$nama");
					$post = $eng->sant(INPUT_POST);
					// date_format()
					extract($post);
					$java->alert($post);
					$id=md5($barcode);
					$eng->insert("item","'$id','$category','$name','$id_unit','$barcode','$hpp','$hju','$stock','$kadaluarsa','$picture'");
					$java->alert("Data Tersimpan!!");
					$java->redirect("../../../index.php?page=crud/item/index");
			    }
			}
		}
	}
	if ($action == "up") {
		$post=$eng->sant(INPUT_POST);
		extract($post);
		$eng->update("item","name='$name' where id_item='$id'");
		$java->alert("Data Product Telah di ubah!!");
		$java->redirect("../../../index.php?page=crud/item/index");
	}
	if ($action == "delete") {
		$id=$java->get("id","");
		// $dat=crypt();
		$eng->delete("item where id_item='$id'");
		$java->alert("Data Has been deleted");
		$java->redirect("../../../index.php?page=crud/item/index");
	}
?>