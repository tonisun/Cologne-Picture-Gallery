$(document).ready( function() {
    // ... wenn dokument fertiggeladen ist
    // alert('Alles Ok ?');
});

$(function(){
    // alert(Object.entries($("*")));
    // console.log(Object.entries($("*")));
    // alert('Alles Ok ?');
});

$.ajax({
    "type":"POST",
    "url":"ajax.php",
    "data":"var1=val1&var2=val2",
    "success":function(data){
    $("#bar")
        .css("background","yellow")
        .html(data);
    }
});

$.ajaxSetup({
    "type":"POST",
    "url":"ajax.php",
    "success":function(data){
    $("#bar")
        .css("background","yellow")
        .html(data);
    }
});

$.ajax({
    "data":{
        "newvar1":"value1",
        "newvar2":"value2"
    }
});