let $bufferRow;
let $firstName;
let $secondName;
let $password;
let $about;
let $addfirstName = $("#firstname").val();
let $addlastName = $("#lastName").val();
let $addPassword = $("#password").val();
let $addAbout = $("#about").val();

$(function (event) {
    dataTableSet();

    $( "#hardTable tbody" ).on('mouseenter', 'tr', function(){
        $bufferRow =  $(this);

    });
     $('#hardTable tbody').on('click', 'tr', function(){
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $firstName = $(this).find("td").eq(0).text();
            $secondName = $(this).find("td").eq(1).text();
            $password = $(this).find("td").eq(2).text();
        }
    });



     /*REMOVE ROW*/
   $('#remove').on('click',function (event) {
       deleteRecord();
    });

   /*ADD ROW*/
   $('#modalSave').on('click', function (event) {
        let modal = $(".bs-example-modal-sm");
        addUser();
        modal.modal('hide');
        clean();
   });

   $("#add").on('submit', function (event) {
       event.preventDefault();
       $("#modalAdd").modal();
   });

    /************************************************8/
   /*PUSH EDIT BUTTON*/
    $('#exampleModal').on('show.bs.modal', function (event) {
        showAbout();
        let modal = $(this);
        modal.find('.modal-title').text('Edit user: ' + $firstName);
        modal.find('#modalFirstName').val($firstName);
        modal.find('#modalLastName').val($secondName);
        modal.find('#modalPassword').val($password);
    });
    $('#editForm').on('submit', function (event) {
        alterData();
    });
/***************************************************************************/
});