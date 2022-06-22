<div class="col-5 ml-5 bg-appcard rounded">
   <form action="<?= base_url() . 'user/belanjabarang' ?>"></form>
   <table class="table table-hover text-center">
      <thead>
         <tr>
            <td> No </td>
            <td> Nama Barang </td>
            <td> Harga </td>
            <td> Jumlah </td>
            <td> Total </td>
            <td></td>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         ?>
         <tr>
            <td><?= $no++; ?></td>
            <td><input type="text" name="nm[]"></td>
            <td><input type="number" name="hrg[]"></td>
            <td><input type="number" name="brp[]"></td>
            <td><input type="number" name="total[]"></td>
            <td>
               <button type="submit" class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/stokbarang/' ?>"><span class="glyphicon glyphicon-plus"></span>Tambah List</button>
            </td>
         </tr>
         </form>
         <form action="<?= base_url() . 'user/belanjabarang' ?>">
            <tr>
               <td><?= $no++; ?></td>
               <td><input type="text" name="nm[]"></td>
               <td><input type="number" name="hrg[]"></td>
               <td><input type="number" name="brp[]"></td>
               <td><input type="number" name="total[]"></td>
               <td>
                  <button type="submit" class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/stokbarang/' ?>"><span class="glyphicon glyphicon-plus"></span>Tambah List</button>
               </td>
            </tr>
      </tbody>
   </table>
   </form>
</div>
</div>
</div>
</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->