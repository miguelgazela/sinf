var BASE_URL = "http://192.168.1.5:8888/sinf/webapp/";
var sinfapp = sinfapp || {};

$(document).ready(function(){
    console.log("document is ready!");

    new FastClick(document.body);

    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });

    // sinfapp.ui = {
    //     sidebar_btns: $('#features ul > .sidebar-btn'),
    //     active_tbody: $('#in_progress .table tbody'),
    //     history_tbody: $('#history .table tbody'),
    //     package_detail: $('#package-detail')
    // };

    // trying an ajax request for our RESTful API
    // $.getJSON(BASE_URL+'api/encomendas/1', function(data){
    //     //console.log(data);
    // });
});

function narrowResults(input) {
    var text = $(input).val().trim().toLowerCase();

    $('.package').each(function(){
        var encomenda = $(this);

        if(text === '') {
            encomenda.show();
        } else {
            encomenda = (encomenda.attr('data-package-id').toLowerCase().indexOf(text) === -1) ? encomenda.hide() : encomenda.show();
        }
    });
}

