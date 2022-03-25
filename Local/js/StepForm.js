$(document).ready(function(){  
    var form_count = 1, form_count_form, next_form, total_forms;
    total_forms = $("fieldset").length;  
    $(".nextPage").click(function(){
          
          let previous = $(this).closest("fieldset").attr('id');
          let next = $('#'+this.id).closest('fieldset').next('fieldset').attr('id');
          $('#'+next).show();
          $('#'+previous).hide();
          setProgressBar(++form_count);
         
    }); 
  });