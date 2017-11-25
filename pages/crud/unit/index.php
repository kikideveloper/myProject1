<section class="content-header">
  <h1>
    Category
    <small>Home</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?page=crud/unit/create"><i class="fa fa-plus"></i> Add New</a></li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Tables</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
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
          			<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            			<thead>
            				<tr role="row">
            					<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 10%;">
            						No.
          						</th>
            					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 30%;">
            						Name
          						</th>
            					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 40%;">
            						Information
          						</th>
          						<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2" aria-label="Browser: activate to sort column ascending" style="width: 20%;">
            						Action
          						</th>
  							</tr>
            			</thead>
            			<tbody>
			            <?php
			            	$i=1;
			            	$q="SELECT * FROM unit";
			            	$data = $eng->getResult($q,null);
			            	foreach ($data as $itm) {
		            	?>
				            <tr role="row" class="odd">
				              <td><?=$i++?></td>
				              <td class="sorting_1"><?=$itm["name"]?></td>
				              <td class="sorting_1"><?=$itm["information"]?></td>
				              <td class="sorting_1">
				              	<a href="?page=crud/item/update&id=<?=$itm['id_category']?>">
				              		<i class="fa fa-edit"></i><span> Edit</span>
				              	</a>
				              </td>
				              <td class="sorting_1">
				              	<a href="pages/crud/item/machine.php?action=delete&id=<?=$itm['id_category']?>">
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
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">
												2
											</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">
												3
											</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">
												4
											</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">
												5
											</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">
												6
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