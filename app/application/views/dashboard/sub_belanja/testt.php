Search User : <input type="text" id="autouser">

<br><br>
Selected user id : <input type="text" id="userid" value='0'>

<script type='text/javascript'>
   $(document).ready(function() {

      $("#autouser").autocomplete({
         source: function(request, response) {
            // Fetch data
            $.ajax({
               url: "<?= base_url() ?>index.php/User/userList",
               type: 'post',
               dataType: "json",
               data: {
                  search: request.term
               },
               success: function(data) {
                  response(data);
               }
            });
         },
         select: function(event, ui) {
            // Set selection
            $('#autouser').val(ui.item.label); // display the selected text
            $('#userid').val(ui.item.value); // save selected id to input
            return false;
         },
         focus: function(event, ui) {
            $("#autouser").val(ui.item.label);
            $("#userid").val(ui.item.value);
            return false;
         },
      });

   });
</script>