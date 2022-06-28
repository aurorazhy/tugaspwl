            <!-- Begin Page Content -->
            <div class="container-fluid">
               <!-- Page Heading
               <h1 class="h3 mb-4 text-gray-800"> Blank Page </h1>-->

               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <form action="<?= base_url() . 'user/caritgl' ?>" method="POST">
                           <div class="input-group col-5 my-3">
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
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-5">
                        <div class="ml-3 bg-appregis rounded">
                           <table class="table table-hover text-center">
                              <thead>
                                 <tr>
                                    <td class="py-3"> No </td>
                                    <td class="py-3"> Tanggal Transaksi </td>
                                    <td class="py-3"> Jumlah </td>
                                    <td> </td>
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
                                          <a class="btn btn-outline-info btn-sm" href="<?= base_url() . 'user/transaksi/' . $t->id_transaksi ?>"><span class="glyphicon glyphicon-plus"></span>Detail</a>
                                       </td>
                                       <td><a href="<?= base_url() . 'user/deltransaksi/' . $t->id_transaksi ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a></td>

                                    </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>