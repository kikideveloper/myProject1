<?php
	include 'inc.php';
	$action=$java->get("action","");
	if ($action == "add") {
		$post = $eng->sant(INPUT_POST);
		extract($post);
		$eng->insert("category","'','$name'");
		$java->alert("Data Tersimpan!!");
		$java->redirect("../../../index.php?page=crud/category/index");
	}
	if ($action == "up") {
		$post=$eng->sant(INPUT_POST);
		extract($post);
		$eng->update("category","name='$name' where id_category = '$id'");
		$java->alert("Data Anda berhasil di ubah!!");
		$java->redirect("../../../index.php?page=crud/category/index");
	}
	if ($action == "del") {
		$id=$java->get('id','');
		$eng->delete("category where id_category='$id'");
		$java->redirect("../../../index.php?page=crud/category/index");	
	}
?>