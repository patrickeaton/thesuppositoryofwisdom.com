(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-51936221-1', 'thesuppositoryofwisdom.com');
ga('send', 'pageview');

$(document).ready(function(){
    var abbottImages = [];
    var abbottQuotes = [];

    function randomItem(itemArray) {
        return itemArray[Math.floor(Math.random()*itemArray.length)];
    }

    function giveSuppository() {
        if (abbottImages.length !== 0) {
            var imageData = randomItem(abbottImages);
            var quoteData = randomItem(abbottQuotes);

            $('#abbottImage').css({
                "background-image": "url(" + imageData.image + ")",
                "background-position": imageData.position
            });

            $("#abottQuote").empty().text(quoteData.text).append($("<br>"),
                $("<br>"),
                $("<a>").attr({
                    "href":     quoteData.reference,
                    "target":   "blank",
                    "class":    "refer"
                }).text("Reference")
            );
        }
    }

    $("#morewisdom").click(function(){
        giveSuppository();
    });

    $.ajax({
        url: "data.json",
        dataType: 'json',
        success: function( data, status, xhr ) {
            abbottImages = data.abbottImages;
            abbottQuotes = data.abbottQuotes;
            giveSuppository();
        },
        error: function( xhr, errorType, error ) {
            throw 'Cannot load JSON data: ' + error;
        }
    });

});
