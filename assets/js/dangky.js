// xu ly kiem tra ton tai email
$(document).ready(function() {
    $("#email").keyup(function() {
        $.ajax({
            type: "POST",
            url: "./xulydangky.php",
            data: {
                "checkemail": $("input[name=email]").val(),
            },
            success: function(data) {
                $("#error").html(data);
                if(data.length > 0) {
                    $(".registerbtn").attr("disabled",true);
                    $(".registerbtn").css({"cursor":"not-allowed","opacity":0.3});
                }
                else {
                    $(".registerbtn").attr("disabled",false);
                    $(".registerbtn").css({"cursor":"pointer","opacity":0.9});
                }
            }
        })
    });
});