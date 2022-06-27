<div class="col-7 ml-5 bg-white rounded">
   <table class="table table-hover text-center">
      <thead>
         <tr>
            <td> No </td>
            <td> Nama Barang </td>
            <td> Harga </td>
            <td> Qty </td>
            <td> Total </td>
            <td> </td>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         foreach ($tran as $t) {
         ?>
            <tr class="bg-appside">
               <td><?= $no++ ?></td>
               <td><?= $t->nama_barang ?></td>
               <td><?= $t->harga_jual ?></td>
               <td><?= $t->qty_belanja ?></td>
               <td><?= $t->total ?></td>
               <td>
               </td>
            </tr>
         <?php } ?>

         <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total Semua</td>
            <td><?php foreach ($total as $to) {
                     echo $to->total_harga;
                  } ?></td>
            <td></td>
         </tr>
      </tbody>
   </table>
</div>