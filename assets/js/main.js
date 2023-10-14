    $("#phone").on("input",function(){
        $lenght = $("#phone").val().length 
        //alert("Ok")
        if($lenght==12){
            //alert("Ok")
            $phone = $("#phone").val()
            $("#pass").show()
            $("#reg").show()

            $("#sign_up").show()
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