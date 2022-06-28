<div class="col-7">
   <div class="ml-3 bg-appcard rounded">
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <td class="py-3"> Tanggal </td>
               <td class="py-3"> Nama Barang </td>
               <td class="py-3"> Harga </td>
               <td class="py-3"> Qty </td>
               <td class="py-3"> Total </td>
               <td> </td>
         </thead>
         <?php
         $no = 1;
         foreach ($tran as $t) {
         ?>
            <tbody>
               <tr class="bg-appside">
                  <td><?= $t->tanggal ?></td>
                  <td><?= $t->nama_barang ?></td>
                  <td><?= $t->harga_jual ?></td>
                  <td><?= $t->qty_belanja ?></td>
                  <td><?= $t->total ?></td>
                  <td></td>
               </tr>

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
         <?php } ?>
      </table>
   </div>
</div>

</div>
</div>
</div>
</div>