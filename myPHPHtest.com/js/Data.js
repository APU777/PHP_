 function dataTableSet() {
     $('#hardTable').DataTable({
         "bProcessing": true,
         "sAjaxSource": "phpInclude/setData.php",
         columns: [
             { title: 'First Name' },
             { title: 'Last Name' },
             { title: 'Password' },
             { render: function ( data, type, row ) {
                     return '<button class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Edit</button>';
                 }
             }
         ]
     })
 }
 function clean() {
     $("#firstname").val(null);
     $("#lastName").val(null);
     $("#password").val(null);
     $("#about").val(null);
 }
 function reData() {
     $addfirstName = $("#firstname").val();
     $addlastName = $("#lastName").val();
     $addPassword = $("#password").val();
     $addAbout = $("#about").val();
}
 function addUser () {
     reData();
     $.ajax({
         url:"phpInclude/dbEngine.php",
         type: "POST",
         data: {
             FirstName: $addfirstName,
             LastName:  $addlastName,
             _Password: $addPassword,
             About: $addAbout
         },
         success:function(data){
             $('#hardTable').DataTable().destroy();
             dataTableSet();
             $('#hardTable').draw();
         }
     });
 }
 function showAbout(){
     $.ajax({
         url:"phpInclude/showAbout.php",
         type: "POST",
         data: {
             _FName: $firstName,
             _Pas: $password,
         },
         success:function(data){
             $('#exampleModal').find('#modalAbout').val(data);
          }
     });
 }
 function alterData() {
     $.ajax({
         url:"phpInclude/alterRecord.php",
         type: "POST",
         data: {
             nFirstName: $("#modalFirstName").val(),
             nLastName: $("#modalLastName").val(),
             nPassword: $("#modalPassword").val(),
             nAbout: $("#modalAbout").val(),
             _FirstName: $firstName,
             _Password: $password
         },
         success:function(){
             $('#hardTable').DataTable().destroy();
             dataTableSet();
             $('#hardTable').DataTable().draw();
             $("#exampleModal").modal('hide');

         }
     });
 }
 function deleteRecord() {
     $.ajax({
         url: "phpInclude/deleteData.php",
         type: "POST",
         data: {
             dFirstName: $firstName,
             dLastName: $secondName,
             dPassword: $password
         },
         success: function () {
             $('#hardTable').DataTable().destroy();
             dataTableSet();
             $('#hardTable').DataTable().draw();
         }
     });
 }