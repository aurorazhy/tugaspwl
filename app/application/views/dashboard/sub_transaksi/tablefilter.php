<form action="<?= base_url() . 'user/caritgl' ?>" method="POST">
   <div class="input-group col-4 ml-5 mb-3">
      <div class="input-group-prepend">
         <span class="input-group-text">Cari Tanggal</span>
      </div>
      <input type="date" class="form-control" name="tgl_awal" value="<?= set_value('tgl_awal') ?>">
      <input type="date" class="form-control" name="tgl_akhir" value="<?= set_value('tgl_akhir') ?>">
      <input type="submit" value="Cari" name="cari" class="btn btn-primary">
   </div>
</form>


<div class="col-7 ml-5 bg-white rounded">
   <div class="btn-group">
      <a href="<?= base_url() . 'user/printtgl/?tgl_awal=' . set_value('tgl_awal') . '&tgl_akhir=' . set_value('tgl_akhir') ?>" class="btn btn-appside btn-sm">
         <i class="fas fa-print"></i> </a>
   </div>
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
         foreach ($tgl as $t) {
         ?>
            <tr class="bg-appside">
               <td><input type="hidden" value="<?= $t->id_transaksi ?>"><?= $no++ ?></td>
               <td><?= $t->tanggal ?></td>
               <td></td>
               <td></td>

               <td>
                  <a class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/caritgl/' . $t->id_transaksi ?>"><span class="glyphicon glyphicon-plus"></span>Detail</a>
               </td>
               <td><a href="<?= base_url() . 'user/deltransaksi/' . $t->id_transaksi ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a></td>

            </tr>
         <?php } ?>
      </tbody>
   </table>
</div>