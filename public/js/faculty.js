$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(document).ready(function(){

  $('.body1').hide();
  $('.app').hide();

  if(faculty_tabs == '')
  {
    $('input[name="tab_section"]').each(function() {
      this.checked = false;
    });
    $(".tabContent").hide();
    $(".tabContent").find('.form-control').attr('required',false);
    $(".tabContent").find('.tab_title').attr('required',false);

  }
  else
  {
   $(".tabContent").show();
   $(".tabContent").find('.form-control').attr('required',false);
   $(".tabContent").find('.tab_title').attr('required',true);
 }

 if(faculty_type == 'founder')
 {
  $('.body1').show();
  $('#long_desc1').html('Awards');  
}
else if(faculty_type == 'doctor')
{
  $('.app').show();
}
else
{
  $('.app').hide();
  $('.body1').hide();
  $('#long_desc1').html('Body 1');
}

});

$('#type').change(function() {
  $('.app').hide();
 if($("#type").val() == 'founder')
 {
  $('.body1').show();
  $('#long_desc1').html('Awards');  
}
else if($("#type").val() == 'doctor')
{
  $('.app').show();
}
else
{
  $('.app').hide();
  $('.body1').hide();
  $('#long_desc1').html('Body 1');
}

})

$("#tab_section").change(function() {
  var checked = $(this).is(":checked");
  if (checked) {
   $(".tabContent").show();
   $(".tabContent").find('.tab_title').attr('required',true);

 }
 else{
   $(".tabContent").hide();
   $(".tabContent").find('.tab_title').attr('required',false);
 }
});

var cnt = 2;
$("#tbl_add").click(function(){
 var index = $("#tbl1 select").length + 1;
 var lastRowIndex = $("#custom_table tr:last").index() + 1;
    //Clone the DropDownList
    var ddl = '<tr><td><div class="box box-primary"><div class="box-header with-border"><h3 class="box-title">Tab Title</h3><div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div><div class="box-body"><div class="form-group "><input type="text" class="form-control" id="tab_title['+lastRowIndex+']" name="tab_title['+lastRowIndex+']" value="" required=""></div></div></div> <div class="box box-primary"><div class="box-header with-border"><h3 class="box-title">Long Description</h3><div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div><div class="box-body"><div class="form-group "><textarea class="form-control" rows="10" id="tab_body['+lastRowIndex+']" name="tab_body['+lastRowIndex+']" required=""></textarea></div></div></div></td></tr>';

// ddl.find('#tab_title').val('');
// ddl.find('textarea').attr('id','tab_body'+lastRowIndex);
// ddl.find('textarea').attr('name','tab_body'+lastRowIndex);
$('#tbl1').last().append(ddl);

        //


        CKEDITOR.replace('tab_body['+lastRowIndex+']', {customConfig: '/adminlte/js/ckeditor.js'})
        cnt++;
      });


$("#tbl_rem").click(function(){

  if($('#custom_table tr').length >1){

    var Id = $('#tbl1 tr:last-child').attr('value');


    if(Id!=''){
     $.ajax({
       url:  "/admin/faculty/deleteTabSection",
       type: "DELETE",
       data: { id: Id},
       dataType: 'json',
     }).done(function (message) {


     })
     .fail(function (jqXHR, ajaxOptions, thrownError) {
       swal('No response from server');
     });


   }
   $('#tbl1 tr:last-child').remove();
 }
 else{
  swal('One tab section should be present in the page');
}
});


$("#post_id").change(function (e) {

  e.preventDefault();
  var Id = $(this).val();
  var selectedVal = null;
  getSubContent(Id,selectedVal);

});

function getSubContent(Id,selectedVal){
  if(Id!=''){
   $.ajax({
     url:  "/admin/faculties/subcontent",
     type: "GET",
     data: { id: Id},
     dataType: 'json',
   }).done(function (message) {

                  //$("#sub_menu_id option").remove();
                  $("#post_tab_id").empty();
                  $("#post_tab_id").append( // Append an object to the inside of the select box
                    $("<option></option>") // Yes you can do this.
                    .text('--Select--')
                    .val('')
                    );

                  $.each(message, function(index, item) {
                    console.log(message);
              // Iterates through a collection
              if(selectedVal!=null){
                if(index == selectedVal){
                    $("#post_tab_id").append( // Append an object to the inside of the select box
                     $("<option selected></option>") // Yes you can do this.
                     .text(item)
                     .val(index)
                     );
                  }else{
                    $("#post_tab_id").append( // Append an object to the inside of the select box
                     $("<option></option>") // Yes you can do this.
                     .text(item)
                     .val(index)
                     );
                  }

                }else{
                  $("#post_tab_id").append( // Append an object to the inside of the select box
                     $("<option></option>") // Yes you can do this.
                     .text(item)
                     .val(index)
                     );
                }

              });


                })
   .fail(function (jqXHR, ajaxOptions, thrownError) {
     swal('No response from server');
   });


 }
}


