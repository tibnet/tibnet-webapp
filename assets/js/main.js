    $("#phone").on("input",function(){
        $lenght = $("#phone").val().length 
        //alert("Ok")
        if($lenght==12){
            
            $phone = $("#phone").val()
            $.ajax({
                type: "POST",
                url: "/_ajax.php",
                data: { checkPhone: $phone},
                cache: false,
                success: function(responce){ 
                    $mes = responce
                    if($mes=="ok"){
                        $("#pass").show()
                        $("#sign_in").show()
                    } else if($mes=="reg"){
                        $("#passhelp").show()
                        $("#pass").show()
                        $("#reg").show()
            
                        $("#sign_up").show()
                        
                    } 
                    else {
                        alert("Tizim xatoligi:"+ responce)
                    }
                }
        });
            
        } else {
            $("#pass").hide()
            $("#reg").hide()
            $("#sign_in").hide()
            $("#sign_up").hide()
            $("#passhelp").hide()
        }
    })
$("#show").click(function(){

    $(this).toggleClass("active")
    if($("#password").attr("type")=="password"){
        $("#password").attr("type","text")
    } else {
        $("#password").attr("type","password")
    }
})