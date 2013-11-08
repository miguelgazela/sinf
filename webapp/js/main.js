var BASE_PATH = "http://192.168.1.3:8888/sinf/webapp/";
var BASE_PATH2 = "http://localhost:8888/sinf/";
var BASE_URL = "http://localhost:8888/sinf/webapp/";

var sinfapp = sinfapp || {};

$(document).ready(function(){
    console.log("Page ready!");

    sinfapp.ui = {
        sidebar_btns: $('#features ul > .sidebar-btn'),
        active_tbody: $('#active .table tbody'),
        package_detail: $('#package-detail')
    };

    // sinfapp.ui.sidebar_btns.each(function(){
    //     console.log("Loading "+$(this).attr('data-section'));
    //     $(this).click(function(){
    //         console.log("Loading man!");
    //     });
    // });

    // trying an ajax request for our RESTful API
    $.getJSON(BASE_URL+'api/encomendas/1', function(data){
        //console.log(data);
    });


    // mark the search wods that matched in the title of the questions
    $(".search_word").each(function(e){
        var word = $(this).text().toLowerCase();

        $(".question-title").each(function(e){

            /*
            var searchMask = "is";
            var regEx = new RegExp(searchMask, "ig");
            var replaceMask = "as";

            var result = 'This iS IIS'.replace(regEx, replaceMask);
            */

            var searchMask = word;
            var regEx = new RegExp(searchMask, "ig");
            var replaceMask = "<span class='matched-word'>"+word+"</span>";
            var before = $(this).html();
            var after = before.replace(regEx, replaceMask);
            $(this).html(after);
        });
    });

});


Lungo.dom("#active").on("load", function(){
    sinfapp.ui.active_tbody.html("");

    $.getJSON(BASE_URL+'tmp-data/encomendas.json', function(data) {
        $('#tmpl-package-row').tmpl(data.ArrayOfDocVenda['DocVenda']).appendTo(sinfapp.ui.active_tbody);

        sinfapp.ui.active_tbody.find('tr > td > button').click(function(){
            var button = $(this);
            $("#package-detail").attr('data-package-id', button.attr('data-package-id'));
            Lungo.Router.article('main', 'package-detail');
        });

        $('#active .panel-footer p').text("# Encomendas: "+sinfapp.ui.active_tbody.children('tr').length);
    });
});

// When a package detail page loads, it needs to get the info from the database and add it to the page
Lungo.dom('#package-detail').on('load', function(){
    //sinfapp.ui.package_detail.html("");
    console.log(sinfapp.ui.package_detail.attr('data-package-id'));
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

