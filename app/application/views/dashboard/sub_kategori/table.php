<div class="col-5 ml-5 bg-appcard rounded">

   <table class="table table-hover text-center">
      <thead>
         <tr>
            <td> No </td>
            <td> Nama Kategori </td>
            <td></td>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         foreach ($kategori as $k) {
         ?>
            <tr>
               <td>
                  <?= $no++; ?>
                  <input type="hidden" name="id[]" value="<?= $k->id_kategorii  ?>">
               </td>
               <td width="200px"><input type="hidden" name="nm[]" value="<?= $k->nama_kategori ?>"><?= $k->nama_kategori ?></td>
               <td width="160px">
                  <a class="btn bg-danger btn-sm" href="<?= base_url() . 'user/kategori/' . $k->id_kategorii ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                  <a class="btn bg-warning btn-sm" href="<?= base_url() . 'user/kategori_del_act/' . $k->id_kategorii ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
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