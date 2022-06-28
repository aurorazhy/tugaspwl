<div class="col-7">
   <form action="<?= base_url() . 'user/print_perone' ?>" method="post">
      <div class="ml-3 bg-appcard rounded">
         <table class="table table-hover text-center">
            <thead>
               <tr>
                  <td class="py-3"> No </td>
                  <td class="py-3"> Nama Barang </td>
                  <td class="py-3"> Harga </td>
                  <td class="py-3"> Qty </td>
                  <td class="py-3"> Total </td>
                  <td> </td>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               foreach ($transaksi as $t) {
               ?>

                  <tr class="bg-appside">
                     <td><input type="hidden" value="<?= $t->id_transaksi ?>"><?= $no++ ?></td>
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

         <div class="btn-group">
            <a <?php foreach ($transaksi as $t) {
               ?> href="<?= base_url() . 'user/print_perone/' . $t->id_transaksi ?>" <?php } ?> class="btn btn-appside btn-sm">
               <i class="fas fa-print"></i> </a>
         </div>

      </div>
   </form>
</div>
</div>
</div>

</div>
</div>