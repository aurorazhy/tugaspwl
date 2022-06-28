            <!-- Begin Page Content -->
            <div class="container-fluid">
               <!-- Page Heading
               <h1 class="h3 mb-4 text-gray-800"> Blank Page </h1>-->

               <div class="container">
                  <div class="row">
                     <div class="col-6 mx-1 px-2">
                        <form action="<?= base_url() . 'user/caritgl' ?>" method="POST">
                           <div class="input-group m-3 bg-appregis">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">Cari Tanggal</span>
                              </div>
                              <input type="date" class="form-control" name="tgl_awal">
                              <?= form_error('tgl_awal') ?>
                              <input type="date" class="form-control" name="tgl_akhir">
                              <?= form_error('tgl_akhir') ?>
                              <input type="submit" value="Cari" name="cari" class="btn bg-appregis text-appgrey">
                           </div>
                        </form>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-5">
                        <div class="ml-3 bg-appregis rounded">
                           <table class="table table-hover text-center">
                              <thead>
                                 <tr>
                                    <td class="py-3 text-appgrey"> No </td>
                                    <td class="py-3 text-appgrey"> Tanggal Transaksi </td>
                                    <td class="py-3 text-appgrey"> Jumlah </td>
                                    <td></td>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $no = 1;
                                 foreach ($tanggal as $t) {
                                 ?>
                                    <tr class="bg-appcard">
                                       <td><input type="hidden" value="<?= $t->id_transaksi ?>"><?= $no++ ?></td>
                                       <td><?= $t->tanggal ?></td>
                                       <td><?= $t->total_belanja ?></td>

                                       <td>
                                          <a class="btn bg-appside btn-sm" href="<?= base_url() . 'user/transaksi/' . $t->id_transaksi ?>"><span class="glyphicon glyphicon-plus"></span><i class="fas fa-info-circle"></i></a>
                                          <a href="<?= base_url() . 'user/deltransaksi/' . $t->id_transaksi ?>" class="btn bg-danger btn-sm"><i class="fas fa-backspace"></i></a>
                                       </td>

                                    </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>