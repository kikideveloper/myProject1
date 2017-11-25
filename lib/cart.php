<?php
// session_start();
$_SESSION['sesid']='on';
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
extract($post);
$action = isset($_GET["action"])?$_GET["action"]:"";
if ($action) {
	switch ($action) {
		case 'add':
			if (!empty($_SESSION["cart"][$id_item])) {
				$val = array($_SESSION["cart"][$id_item][0]+$amount,$kadaluarsa,$price);
				$_SESSION["cart"][$id_item] = $val;
			}else {
				$val = array($amount,$kadaluarsa,$price);
				$_SESSION["cart"][$id_item] = $val;
			}
			break;
		case 'unset':
			unset($_SESSION["cart"][$id_item]);
			break;
		case 'saveDetails':
			if (!empty($_SESSION["cart"])) {
				$queries=$eng->insert("purchase_details");
				session_destroy($_SESSION['cart']);
			}else{
				$java->redirect("index.php?page=crud/pembelian/index");
			}
			break;
	}
}
?>