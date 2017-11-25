<?php
// session_start();
?>
<section class="content-header">
    <h1>
        Purchase
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Pembelian</h3>
                </div>
                <div class="box-body">
                    <form id="purchase">
                        <div class="form-group">
                            <label>Purchase Invoice</label>
                            <input type="text" name="invoice" class="form-control select2">
                        </div>
                        <div class="form-group">
                            <label>Suppliers</label>
                            <input type="text" name="suppliers" class="form-control select2">
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="number" name="Total" class="form-control select2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Purchase Details Data</h3>
                </div>
                <div class="box-body">
                    <form id='frm_detail'>
                        <div class="form-group">
                            <label>Name of Goods</label>
                            <select class="form-control select2" style="width: 100%;" name="id_item" tabindex="1" aria-hidden="true">
                                <?php
                                $data = $eng->select("item");
                                while ($row = $data->fetch()) {
                                    echo "
										<option value='$row[id_item]'>
																			$row[name]
										</option>
										";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Expired</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="kadaluarsa" id="kadaluarsa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="number" class="form-control" name="amount" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" name="price" class="form-control" required>
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary pull-right" onclick="addItm('#frm_detail')"><i class="fa fa-plus"></i> Add</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="box box-info">
                <form>
                    <div class="box-header">
                        <h3 class="box-title">Data Barang</h3>
                    </div>
                    <div class="box-body data-item">

                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary pull-right" onclick="saveDetails()">Acept!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
// $(document).ready(function() {
//       if (Notification.permission !== "granted")
//         Notification.requestPermission();
// });
// function notifikasi() {
//   if (!Notification) {
//     alert('Browsermu tidak mendukung Web Notification.');
//     return;
//   }
//   if (Notification.permission !== "granted")
//     Notification.requestPermission();
//   else {
//     var notifikasi = new Notification('Judul Notifikasi', {
//       icon: 'img/13249930_1725572604349544_1125473422_a.jpg',
//       body: "Belajar di Jago Coding, Sangat Menyenangkan !",
//     });
//     notifikasi.onclick = function () {
//       window.open("index.php?page=crud/item/index");
//     };
//     setTimeout(function(){
//       notifikasi.close();
//     }, 5000);
//   }
// };
</script>