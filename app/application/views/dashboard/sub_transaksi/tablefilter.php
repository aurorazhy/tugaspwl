<div class="container-fluid">
   <div class="container">
      <div class="row">
         <div class="col-6 mx-1 px-2">
            <form action="<?= base_url() . 'user/caritgl' ?>" method="POST">
               <div class="input-group m-3 bg-appregis">
                  <div class="input-group-prepend">
                     <span class="input-group-text">Cari Tanggal</span>
                  </div>
                  <input type="date" class="form-control" name="tgl_awal" value="<?= set_value('tgl_awal') ?>">
                  <input type="date" class="form-control" name="tgl_akhir" value="<?= set_value('tgl_akhir') ?>">
                  <input type="submit" value="Cari" name="cari" class="btn btn-primary">
               </div>
            </form>
         </div>
      </div>

      <div class="row">
         <div class="col-4 ml-2">
            <div class="btn-group mt-3 ml-3 bg-appregis">
               <a href="<?= base_url() . 'user/printtgl/?tgl_awal=' . set_value('tgl_awal') . '&tgl_akhir=' . set_value('tgl_akhir') ?>" class="btn btn-appside btn-sm">
                  <i class="fas fa-print"></i> </a>
            </div>
            <div class="ml-2 bg-appregis rounded">
               <table class="table table-hover text-center">
                  <thead>
                     <tr>
                        <td class="py-3 text-appgrey"> No </td>
                        <td class="py-3 text-appgrey"> Tanggal Transaksi </td>
                        <td class="py-3 text-appgrey"> Jumlah </td>
                        <td> </td>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     foreach ($tgl as $t) {
                     ?>
                        <tr class="bg-appcard">
                           <td><input type="hidden" value="<?= $t->id_transaksi ?>"><?= $no++ ?></td>
                           <td><?= $t->tanggal ?></td>
                           <td></td>

                           <td>
                              <a href="<?= base_url() . 'user/deltransaksi/' . $t->id_transaksi ?>" class="btn btn-outline-danger btn-sm float-left"><i class="fas fa-trash"></i></a>
                           </td>

                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>