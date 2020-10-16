function loadDoubts(callback) {
    var xobj = new XMLHttpRequest();
    xobj.overrideMimeType("application/json");
    xobj.open('GET', 'duvidas.json', true);
    xobj.onreadystatechange = function () {
        if (xobj.readyState == 4 && xobj.status == "200")
            callback(JSON.parse(xobj.responseText));
    };
    xobj.send(null);
}

function init(){
    loadDoubts(function(responseJson){
        var template = document.getElementById('doubts-template').innerHTML;
        var rendered = Mustache.render(template, responseJson);
        document.getElementById('doubts-list').innerHTML = rendered;

        var titleLinks = document.querySelectorAll('.doubts-accordion__title')
        for(var i = 0; i < titleLinks.length; i++){
            titleLinks[i].onclick = function(event){

                var elems = document.querySelectorAll(".doubts-accordion__title.active");
                [].forEach.call(elems, function(el) {
                    if(el.hash !== event.target.hash) {
                        el.classList.remove("active");
                        document.querySelector(el.hash).classList.add('collapsed')
                    }
                });

                event.target.classList.toggle('active')
                document.querySelector(event.target.hash).classList.toggle('collapsed')
                event.preventDefault();
            }
        }
    })
}