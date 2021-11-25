$(document).ready(function() {
    $("#fromdate").blur(function() {        //Xu ly khi click khoi vung input date
        var fromdate = $("#fromdate").val();
        var date = fromdate.split("-");
        if(parseInt(date[2])+1<10){
            var day = '0'+(parseInt(date[2])+1);
        }
        else day = parseInt(date[2])+1;
        var todate = date[0]+'-'+date[1]+'-'+day;
        $("#todate").attr("min",todate);   
    });
});