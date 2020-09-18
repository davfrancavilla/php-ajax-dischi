$(document).ready(function(){

    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

    allDiscs();

    $("nav li").click(function(){
        if ($(this).text() == "TUTTI"){
            $(".discs").empty();
            allDiscs();
        } else {
            filteredDiscs($(this).text());
        } 
    })

    // funzione che mostra tutti i dischi
    function allDiscs(){
        $.ajax({
            url: "http://localhost:8888/46-18-09/esercizio/php-ajax-dischi/db.php",
            method: "GET",
            success: function (element) {
                for (i in element) {
                    var context = {
                        title: element[i].title,
                        author: element[i].author,
                        year: element[i].year,
                        poster: element[i].poster
                    }
                    var html = template(context);
                    $(".discs").append(html);
                }
            },
            error: function (err) {
                alert(err);
            }
        });
    }

    // funzione che mostra i dischi filtrati per autore quando viene cliccato il realtivo autore
    function filteredDiscs(name){
        $(".discs").empty();
        $.ajax({
            url: "http://localhost:8888/46-18-09/esercizio/php-ajax-dischi/db.php",
            method: "GET",
            success: function (element) {
                for (i in element) {
                    if (element[i].author == name){
                        var context = {
                            title: element[i].title,
                            author: element[i].author,
                            year: element[i].year,
                            poster: element[i].poster
                        }
                        var html = template(context);
                        $(".discs").append(html);
                    } 
                }
            },
            error: function (err) {
                alert(err);
            }
        });
    }
})