<?php
	$i=1;
	// $data=$java->get("category","");
	// "where id_category=$row['id_category']";
	// if ($data=="") {
		// $q=$eng->select("category");
		// while ($row=$q->fetch()) {
			// if ($data==$row['name']) {
				// $res=$eng->select("item");
				// ;
					# code...
			// }
		// }
	// }else{
		// $java->alert("Category not found!!");
		// $java->redirect("index.php");
	// }
	$res=$eng->select("item i,category c,unit u WHERE i.id_ctgr=c.id_category AND i.id_unit=u.id_unit");
?>
<section class="content-header">
	<h1>
	Item
	<small>Home</small>
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">Data Tables</h3>
					<a href="?page=crud/item/create" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
				</div>

				<!-- /.box-header -->
				<div class="box-body">
					<div class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row">
							<div class="col-sm-6">
								<div class="dataTables_length" >
									<label>Show
										<select name="example1_length" aria-controls="example1" class="form-control input-sm">
											<option value="10">10</option><option value="25">25</option>
											<option value="50">50</option><option value="100">100</option>
										</select>
									entries</label>
								</div>
							</div>
							<div class="col-sm-6">
								<div id="itm" class="dataTables_filter">
									<label>Search:
										<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="itm" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 2%;">
												No.
											</th>
											<th class="sorting" rowspan="2" colspan="1" style="width: 10%;">
												Name
											</th>
											<th class="sorting" rowspan="2" colspan="1" style="width: 18%;">
												Gambar
											</th>
											
											<th rowspan="1" colspan="2" style="width: 10%; text-align:center;">
												Harga
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;">
												Stock
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;">
												Kadaluarsa
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;">
												Barcode
											</th>
											<th rowspan="2" colspan="2" style="width: 20%;text-align:center;">
												Action
											</th>
										</tr>
										<tr>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 5%;">
												Pokok
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 5%;">
												Jual
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
										// $res=$eng->execute("SELECT * FROM
											// 	item itm,
											// 	category ctgr,
											// 	unit unt
											// 	WHERE
											// 	itm.id_ctgr = ctgr.id_category AND
											// 	itm.id_unit = unt.id_unit",null
										// );
											while ($show=$res->fetch()) {
										// print_r($show);
										?>
										<tr role="grid" class="odd">
											<td><?=$i++?></td>
											<td class="sorting_1"><?=$show[2]?></td>
											<td class="sorting_1">
												<img class="img-circle" alt="<?=$show[9]?>" src="<?=$show[9]?>">
											</td>
											<td class="sorting_1">Rp<?=$show["hpp"]?>,-</td>
											<td class="sorting_1">Rp<?=$show["hju"]?>,-</td>
											<td class="sorting_1"><?=$show["stock"]?></td>
											<td class="sorting_1"><?=$show["kadaluarsa"]?></td>
											<td class="sorting_1"><?=$show["barcode"]?></td>
											<td class="sorting_1">
												<a href="?page=crud/item/update&id=<?=$show['id_item']?>">
													<i class="fa fa-edit"></i><span> Edit</span>
												</a>
											</td>
											<td class="sorting_1"	>
												<a href="pages/crud/item/machine.php?action=delete&id=<?=$show['id_item']?>">
													<i class="fa fa-close"></i><span> Delete</span>
												</a>
											</td>
										</tr>
										<?php
														}
										?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-7">
								<div class="dataTables_paginate paging_simple_numbers" id="itm">
									<ul class="pagination">
										<li class="paginate_button previous disabled" id="example1_previous">
											<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">
												Previous
											</a>
										</li>
										<li class="paginate_button active">
											<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">
												1
											</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">
												2
											</a>
										</li>
										<li class="paginate_button next" id="example1_next">
											<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">
												Next
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<!-- /.box -->
			</div>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>