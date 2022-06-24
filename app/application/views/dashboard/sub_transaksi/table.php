<div class="col-7 ml-5 bg-white rounded">
   <table class="table table-hover text-center">
      <thead>
         <tr>
            <td> No </td>
            <td> Tanggal Transaksi </td>
            <td> Banyak </td>
            <td> Jumlah </td>
            <td> </td>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         foreach ($tanggal as $t) {
         ?>
            <tr class="bg-appside">
               <td><input type="hidden" value="<?= $t->id_transaksi ?>"><?= $no++ ?></td>
               <td><?= $t->tanggal ?></td>
               <td></td>
               <td></td>
               <td>
                  <a class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/transaksi/' . $t->id_transaksi ?>"><span class="glyphicon glyphicon-plus"></span>Detail</a>
               </td>
            </tr>
         <?php } ?>