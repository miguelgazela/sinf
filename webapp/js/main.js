var BASE_URL = "http://192.168.1.3:8888/sinf/webapp/";
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

    $('.package').click(function(){
        // console.log($(this).attr('data-package-id'));
        window.location = BASE_URL+'pages/encomendas/view.php?id='+$(this).attr('data-package-id');
    });
});

function narrowResults(input) {
    var text = $(input).val().trim().toLowerCase();

    $('.package').each(function(){
        if(text === '') {
            $(this).show();
        } else {
            if($(this).attr('data-package-id').toLowerCase().indexOf(text) == -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        }
    });
}

function narrowProductResults(input) {
    var text = $(input).val().trim().toLowerCase();

    $('.product').each(function(){
        if(text === '') {
            $(this).show();
        } else {
            if($(this).attr('data-product-id').toLowerCase().indexOf(text) == -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        }
    });
}