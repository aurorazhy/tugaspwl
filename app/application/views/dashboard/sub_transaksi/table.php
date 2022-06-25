<div class="col-7 ml-5 bg-white rounded">
   <table class="table table-hover text-center">
      <thead>
         <tr>
            <td> No </td>
            <td> Tanggal Transaksi </td>
            <td> Banyak </td>
            <td> Jumlah </td>
            <td> </td>
            <td></td>
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
               <td><?php foreach ($banyak as $tra) {
                        $tra->banyak;
                     } ?></td>
               <td><?php foreach ($total as $to) {
                        echo $to->total_harga;
                     } ?></td>

               <td>
                  <a class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/transaksi/' . $t->id_transaksi ?>"><span class="glyphicon glyphicon-plus"></span>Detail</a>
               </td>
               <td><a href="<?= base_url() . 'user/deltransaksi/' . $t->id_transaksi ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a></td>

            </tr>
         <?php } ?>