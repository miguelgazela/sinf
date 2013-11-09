var BASE_PATH = "http://192.168.1.4:8888/sinf/webapp/";
var BASE_PATH2 = "http://localhost:8888/sinf/";
var BASE_URL = "http://localhost:8888/sinf/webapp/";

var sinfapp = sinfapp || {};

$(document).ready(function(){
    console.log("Page ready!");

    sinfapp.ui = {
        sidebar_btns: $('#features ul > .sidebar-btn'),
        active_tbody: $('#in_progress .table tbody'),
        history_tbody: $('#history .table tbody'),
        package_detail: $('#package-detail')
    };

    // trying an ajax request for our RESTful API
    $.getJSON(BASE_URL+'api/encomendas/1', function(data){
        //console.log(data);
    });
});


Lungo.dom("#history").on("load", function(){
    sinfapp.ui.history_tbody.html("");

    $.getJSON(BASE_URL+'tmp-data/encomendas.json', function(data) {
        $('#tmpl-package-row').tmpl(data).appendTo(sinfapp.ui.history_tbody);

        sinfapp.ui.history_tbody.find('tr > td > button').click(function(){
            var button = $(this);
            $("#package-detail").attr('data-package-id', button.attr('data-package-id'));
            Lungo.Router.article('main', 'package-detail');
        });

        $('#history .panel-footer p').text("# Encomendas: "+sinfapp.ui.history_tbody.children('tr').length);
    });
});


// When a package detail page loads, it needs to get the info from the database and add it to the page
Lungo.dom('#package-detail').on('load', function(){
    sinfapp.ui.package_detail.html("");
    var package_id = sinfapp.ui.package_detail.attr('data-package-id');

    $.getJSON(BASE_URL+'tmp-data/encomendas.json', function(data) {

        for(var i = 0; i < data.length; i++) {
            if(data[i]['id'] === package_id) {
                $("#tmpl-package-detail").tmpl(data[i]).appendTo($("#package-detail"));
                $("#tmpl-package-item-row").tmpl(data[i]['LinhasDoc']).appendTo($('#package-detail .table tbody'));
            }
        }
    });
});


function narrowResults(input) {
    var text = $(input).val().trim().toLowerCase();

    $('.package-id').each(function(){
        if(text === '') {
            $(this).parent().show();
        } else {
            if($(this).text().toLowerCase().indexOf(text) == -1) {
                $(this).parent().hide();
            } else {
                $(this).parent().show();
            }
        }
    });
}

