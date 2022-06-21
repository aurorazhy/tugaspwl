<div class="col-7 ml-5 bg-appcard rounded">

   <form action="<?= base_url() . 'auto/kategori' ?>" method="post" class="col-md-12">
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
                  <td width="200px"><input type="text" name="nm[]" value="<?= $k->nama_kategori ?>" class="form-control"></td>
                  <td width="160px">
                     <a class="btn btn-outline-danger btn-sm" href="<?= base_url() . 'user/kategori/' . $k->id_kategorii ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                     <a class="btn btn-outline-warning btn-sm" href="<?= base_url() . 'user/kategori_del_act/' . $k->id_kategorii ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
                  </td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
      <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
   </form>
</div>

</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->