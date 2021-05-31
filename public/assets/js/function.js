$(document).ready(function(){
    $('#btn').css('display','none');
    $('#myTxt').focus(function() {
        $('#btn').fadeIn();
    });
});
