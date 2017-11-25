<table class="table table-bordered table-striped">
	<tr>
		<th>Name</th>
		<th>Amount</th>
		<th>Kadaluarsa</th>
		<th>Price</th>
		<th>Sub Price</th>
		<th>Delete</th>
	</tr>
	
	<?php
		include 'engine.php';
		include 'javascript.php';
		// session_start();

		if (!empty($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $key => $value) {
				$q = $eng->select("item where id_item='$key'");
				$data = $q->fetch();
				$name = $data['name'];
	?>
	<tr>
		<td><?=$name?></td>
		<td><?=$value[0]?></td>
		<td><?=$value[1]?></td>
		<td><?=$value[2]?></td>
		<td><?=$value[0]*$value[2]?></td>
		<td>
			<button class="btn btn-danger" onclick="delItm('<?=$key?>');">
				<i class="fa fa-remove"></i>
			</button>
		</td>
	</tr>

	<?php
			}
		}
	?>
</table>