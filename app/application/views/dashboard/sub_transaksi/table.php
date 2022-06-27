<form action="<?= base_url() . 'user/caritgl' ?>" method="POST">
   <div class="input-group col-4 ml-5 mb-3">
      <div class="input-group-prepend">
         <span class="input-group-text">Cari Tanggal</span>
      </div>
      <input type="date" class="form-control" name="tgl_awal">
      <?= form_error('tgl_awal') ?>
      <input type="date" class="form-control" name="tgl_akhir">
      <?= form_error('tgl_akhir') ?>
      <input type="submit" value="Cari" name="cari" class="btn btn-primary">
   </div>
</form>

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
               <td><?= $t->total_belanja ?></td>

               <td>
                  <a class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/transaksi/' . $t->id_transaksi ?>"><span class="glyphicon glyphicon-plus"></span>Detail</a>
               </td>
               <td><a href="<?= base_url() . 'user/deltransaksi/' . $t->id_transaksi ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a></td>

            </tr>
         <?php } ?>
      </tbody>
   </table>
</div>