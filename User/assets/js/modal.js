$(document).ready(function() {
    $('.btn').click(function(e) {
        var uid = $(this).data('id');
            $("#view").load("./cthoadon.php", { "id": uid });
            $("#view").css({
                "position": "fixed",
                "background": "#0000008a",
                "width": "100%",
                "z-index": 99,
                "top": 0,
                "left": 0,
                "height": "100%",
                "display": "block"
            
        });
    });
    $("#view").click(function() {
        $("#view").css("display", "none");
    });

    // Tim kiem san pham
    $("#search_product").blur(function(){
        $("#no_search").css("display", "none");
        $("#main").load("../User/search.php",{"search":$("#search_product").val()});
    });
});