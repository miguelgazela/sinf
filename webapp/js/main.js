var BASE_PATH = "http://172.30.27.137:8888/sinf/";
var BASE_PATH2 = "http://localhost:8888/sinf/";

$(document).ready(function(){
    console.log("Page ready!");
});

Lungo.dom("#clients").on("load", function(){
    console.log("Loading clients!");
});

Lungo.dom('#main').on('load', function(){
    console.log('Loading main page!');
});

Lungo.dom('#layout-1').on('load', function(){
    console.log('Loading layout');
});
