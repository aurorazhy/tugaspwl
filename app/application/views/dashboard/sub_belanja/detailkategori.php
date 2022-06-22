<div class="col-7 ml-5 bg-appcard rounded">

   <table class="table table-hover text-center">
      <thead>
         <tr>
            <td> No </td>
            <td> Nama Barang </td>
            <td> Harga </td>
            <td> Stok </td>
            <td></td>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         foreach ($barang as $b) {
         ?>
            <tr>
               <td><?= $no++; ?></td>
               <td><?= $b->nama_barang ?></td>
               <td><?= $b->harga_jual ?></td>
               <td><?= $b->qty ?></td>
            </tr>
         <?php } ?>
      </tbody>
   </table>

</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->