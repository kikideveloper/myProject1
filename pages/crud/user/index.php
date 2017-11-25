<section class="content-header">
	<h1>
	User
	<small>Home</small>
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Users</h3>
					<a href="?page=crud/level/create" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="itm" class="dataTables_wrapper form-inline `dt-bootstrap">
						<div class="row">
							<div class="col-sm-6">
								<div class="dataTables_length" id="example1_length">
									<label>Show
										<select name="example1_length" aria-controls="example1" class="form-control input-sm">
											<option value="10">10</option><option value="25">25</option>
											<option value="50">50</option><option value="100">100</option>
										</select>
									entries</label>
								</div>
							</div>
							<div class="col-sm-6">
								<div id="example1_filter" class="dataTables_filter">
									<label>Search:
										<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="level" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 5%;">
												No.
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 30%;">
												Username
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 20%;">
												Email
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 20%;">
												level
											</th>
											<th rowspan="1" colspan="2" style="width: 20%;text-align: center;">
												Action
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$i=1;
											$q="SELECT * FROM user";
											$data = $eng->getResult($q,null);
											foreach ($data as $itm) {
										?>
										<tr role="row" class="odd">
											<td><?=$i++?></td>
											<td class="sorting_1"><?=$itm["name"]?></td>
											<td class="sorting_1">
												<a href="?page=crud/level/update&id=<?=$itm['id_level']?>">
													<i class="fa fa-edit"></i><span> Edit</span>
												</a>
											</td>
											<td class="sorting_1">
												<a href="pages/crud/level/machine.php?action=delete&id=<?=$itm['id_level']?>">
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
								<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
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
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>