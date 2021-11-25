$(document).ready(function(){
    $("#name,#phone,#address,.gender").blur(function(){
        var name = $("#name").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var gender = $(".gender").val();
        $.ajax({
            type: "POST",
            url: "../User/ajax.php",
            data: {
                "id":1,
                "name":name,
                "phone":phone,
                "address":address,
                "gender":gender,
            },
            success: function(data) {
                alert(data);    
            }
        })
    });

    $("#matkhaumoi,#rematkhaumoi").blur(function(){
        var matkhaumoi = $("#matkhaumoi").val();
        var rematkhaumoi = $("#rematkhaumoi").val();
        if(matkhaumoi != rematkhaumoi){
            $("#error").html("Mật khẩu không khớp");
            $(".btn-doimk").attr("disabled",true);
            $(".btn-doimk").css({"cursor":"not-allowed","opacity":0.3});
        }
        else{
            $("#error").html("");
            $(".btn-doimk").attr("disabled",false);
            $(".btn-doimk").css({"cursor":"pointer","opacity":1});
        }
       
    });

    $(".bill").blur(function(){
        var status = $(this).val();
        $("#bill").load("./trangthaidon.php",{"status":status});
    });
  
});

