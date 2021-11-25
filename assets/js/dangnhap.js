// xu ly kiem tra ton tai email quen mat khau
$(document).ready(function() {
    $("#quenmk").keyup(function() {
        $.ajax({
            type: "POST",
            url: "./xulydangnhap.php",
            data: {
                "checkemail": $("input[name=emailqmk]").val(),
            },
            success: function(data) {
                $("#error").html(data);
                if(data.length > 0) {
                    $("#sub-qmk").attr("disabled",true);
                    $("#sub-qmk").css({"cursor":"not-allowed","opacity":0.3});
                }
                else {
                    $("#sub-qmk").attr("disabled",false);
                    $("#sub-qmk").css({"cursor":"pointer","opacity":0.9});
                }
            }
        })
    });
});