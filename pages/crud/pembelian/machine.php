<?php
// include '../../../../lib/engine.php';
// session_start();
	extract($_POST);
	if (!empty($_SESSION['cart'])) {
		$insPurchase = $eng->insert("purchase","'','$invocePurchase','$id_suppliers','$purchase_date','','$_SESSION[user]'");
		$id_purchase = $eng->lastInsertId();
		$total = 0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$insDetails = $eng->insert("purchase_details","'','$id_purchase','$key','$value[0]','$value[2]'");
			$total += $value[0]*$value[2];
			// if ($insDetails) {
				// unset($_SESSION['cart'][$key]);
			// }
		}
		$upPurchase = $eng->update("purchase","total_price='$total' where id_purchase='$id_purchase'");
            $java->alert("input sucess!!");
            unset($_SESSION['cart']);
            $java->redirect("index.php?page=crud/pembelian/index");
	}
?>