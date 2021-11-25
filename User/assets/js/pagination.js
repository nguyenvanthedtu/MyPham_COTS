// Click background hover pagination
$(document).ready(function(){
    var path = window.location.href;
    $('.pagination li a').each(function() {
    if (this.href === path) {
        $(this).addClass('active_1');
    }else{
        $(this).removeClass('active_1')
    }
    });
});
