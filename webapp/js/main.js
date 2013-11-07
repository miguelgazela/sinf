var BASE_PATH = "http://172.30.27.137:8888/sinf/";
var BASE_PATH2 = "http://localhost:8888/sinf/";
var BASE_URL = "http://localhost:8888/sinf/webapp/";

var sinfapp = sinfapp || {};

$(document).ready(function(){
    console.log("Page ready!");

    sinfapp.ui = {
        sidebar_btns: $('#features ul > .sidebar-btn')
    };

    sinfapp.ui.sidebar_btns.each(function(){
        console.log("Loading "+$(this).attr('data-section'));
        $(this).click(function(){
            console.log("Loading man!");
        });
    });


    console.log("This");

    // trying an ajax request for our RESTful API
    $.getJSON(BASE_URL+'api/encomendas/1', function(data){
        console.log(data);
    });
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
