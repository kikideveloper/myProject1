<?php
	include 'inc.php';
	$action=$java->get("action","");
	if ($action == "add") {
		$post = $eng->sant(INPUT_POST);
		extract($post);
		$eng->insert("unit","'','$name','$info'");
		$java->alert("Data Tersimpan!!");
		$java->redirect("../../../index.php?page=crud/unit/index");
	}
	if ($action == "up") {
		$post=$eng->sant(INPUT_POST);
		extract($post);
		$eng->update("unit","name='$name' where id_unit = '$id'");
		$java->alert("Data Anda berhasil di ubah!!");
		$java->redirect("../../../index.php?page=crud/unit/index");
	}
	if ($action == "del") {
		$id=$java->get('id','');
		$eng->delete("unit where id_unit='$id'");
		$java->redirect("../../../index.php?page=crud/unit/index");	
	}
?>