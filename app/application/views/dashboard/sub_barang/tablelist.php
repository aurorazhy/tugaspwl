<div class="container-fluid py-4">

   <div class="col-11 ml-5 p-0 bg-appcard rounded">

      <div class="card-body text-white bg-appregis">
         <div class="row justify-content-between">
            <div class="col-6">
               <h5 class="card-title text-appgrey"> List Nama Barang </h5>
            </div>
            <div class="col-6 text-right">
               <a href="<?= base_url() . 'user/stokbarang'; ?>" class="btn btn-appcard">+</a>
            </div>

            <!-- new -->
            <?= form_open('user/search') ?>
            <div class="input-group col-12 ml-1 mt-2 p-0">
               <button class="btn btn-appcard" type="submit"><i class="fas fa-search"></i></button>
               <input type="text" name="keyword" class="form-control">
            </div>
            <?= form_close() ?>
            <div>

            </div>
         </div>
      </div>

      <table class="table table-hover text-center">
         <thead>
            <tr>
               <td> No </td>
               <td></td>
               <td> Nama Barang </td>
               <td> Harga Beli </td>
               <td> Qty </td>
               <td> harga Jual </td>
               <td> Nama Kategori </td>
               <td></td>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            foreach ($barang as $b) {
            ?>
               <tr>
                  <td>
                     <?= $no++; ?>
                     <input type="hidden" name="id[]" value="<?= $b->id_barang  ?>">
                  </td>
                  <td style="display:none;"><?= $b->id_barang  ?></td>
                  <td width="200px"><?= $b->nama_barang ?></td>
                  <td><?= $b->harga_beli ?></td>
                  <td><?= $b->qty ?></td>
                  <td><?= $b->harga_jual ?></td>
                  <td> <?= $b->nama_kategori ?></td>
                  <td><button type="button" class="btn bg-appside btn-sm mr-2 editbtn"><i class="fas fa-pencil-alt"></i></button>
                     <a href="<?= base_url() . 'user/delbarang/' . $b->id_barang ?>" class="btn bg-danger btn-sm"><i class="fas fa-backspace"></i></a>
                  </td>
               </tr>
            <?php } ?>
         </tbody>
      </table>

      <script>
         $("input").on("keyup", function() {
            $("tbody tr").filter(function() {
               $(this).toogle($(this).text().toLowerCase().indexOf($("input").val().toLowerCase()) > -1);
            });
         })
      </script>
      </form>

   </div>
   <!-- Modal -->
   <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header bg-appside">
               <h5 class="modal-title" id="exampleModalLabel">Edit Barang </h5>
               <a href="<?= base_url() . 'user/barangtable' ?>" class="btn-close" aria-label="Close"></a>
            </div>

            <form action="<?= base_url() . 'user/barang_edit_modal' ?>" method="POST">

               <div class="modal-body">
                  <input type="hidden" name="update_id" id="update_id">
                  <div class="form-group">
                     <label>Nama Barang</label>
                     <input type="text" name="nm" id="nm" class="form-control">
                     <?= form_error('nm'); ?>
                  </div>
                  <div class="form-group">
                     <label>Harga Beli</label>
                     <input type="text" name="hb" id="hb" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Qty</label>
                     <input type="text" name="qty" id="qty" class="form-control">
                     <?= form_error('qty'); ?>
                  </div>
                  <div class="form-group">
                     <label>Harga Jual</label>
                     <input type="number" name="hj" id="hj" class="form-control">
                  </div>

                  <div class="modal-footer">
                     <a href="<?= base_url() . 'user/barangtable' ?>" class="btn bg-danger" data-dismiss="modal">Batal</a>
                     <button type="submit" name="insertdata" class="btn bg-appside">Ubah</button>
                  </div>
            </form>

         </div>
      </div>
   </div>
   <script>
      $(document).ready(function() {
         $('.editbtn').on('click', function() {
            $('#editmodal').modal('show');

            $tr = $(this).closest('tbody tr');

            var data = $tr.children("td").map(function() {
               return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[1]);
            $('#nm').val(data[2]);
            $('#hb').val(data[3]);
            $('#qty').val(data[4]);
            $('#hj').val(data[5]);
         });
      });
   </script>
</div>
</div>




</div>
<!-- End of Main Content -->