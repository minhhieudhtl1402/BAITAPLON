$(document).ready(function(){
    $('#IngputEmail').change(function(){
       let Email =$('InpuEmail').val();
       if(Email != ''){
           $.ajax({
        url: "process_signup.php",
        type: "post",
        data:{email:$(this).val()},
        success:function(res){
            $('#emailhelp').text(res).css('color:red');
        }
    })
       }
    })
    
})