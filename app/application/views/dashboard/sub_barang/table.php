<div class="col-7 offset-1">
   <table>
      <thead>
         <tr>
            <th> No </th>
            <th> Nama Barang </th>
            <th> Harga Beli </th>
            <th> Qty </th>
            <th> Harga Jual </th>
            <th></th>
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
               <td><?= $b->harga_beli ?></td>
               <td><?= $b->qty ?></td>
               <td><?= $b->harga_jual ?></td>
               <td>
                  <a class="btn btn-warning btn-sm" href=""><span class="glyphicon glyphicon-plus"></span>Edit</a>
                  <a class="btn btn-danger btn-sm" href=""><span class="glyphicon glyphicon-trash"></span>Hapus</a>
               </td>
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