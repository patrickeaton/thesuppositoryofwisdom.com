(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
//ga('create', 'UA-51936221-1', 'thesuppositoryofwisdom.com');
//ga('send', 'pageview');





$(document).ready(function(){
    function randomItem(itemArray) {
        return itemArray[Math.floor(Math.random()*itemArray.length)];
    }

    function giveSuppository() {
        $.ajax({
            url: "data.json",
            dataType: 'json',
            success: function( data, status, xhr ) {
                var imageData = randomItem(data.abbott_images);
                var quoteData = randomItem(data.abbott_quotes);
                $('#abbottImage').css({
                    "background-image": "url(" + imageData.image + ")",
                    "background-position": imageData.position
                });

                $("#abottQuote").empty().text(quoteData.text).append($("<br>"), $("<br>"),
                    $("<a>").attr({
                        "href":     quoteData.reference,
                        "target":   "blank",
                        "class":    "refer"
                    }).text("Reference"))
            },
            error: function( xhr, errorType, error ) {
                throw 'Cannot load JSON data: ' + error;
            }
        });
    }

    $("#morewisdom").click(function(){
        giveSuppository();
    });

    giveSuppository();
});
