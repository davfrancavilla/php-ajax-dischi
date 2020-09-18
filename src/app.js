$(document).ready(function(){

    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

    $.ajax({
        url: "http://localhost:8888/46-18-09/esercizio/php-ajax-dischi/db.php",
        method : "GET",
        success : function(element){
            for (i in element){
                var context = {
                    title : element[i].title,
                    author : element[i].author,
                    year : element[i].year,
                    poster : element[i].poster
                }
                var html = template(context);
                $(".container").append(html);
            }
        },
        error : function(err){
            alert(err);
        }
    })
})