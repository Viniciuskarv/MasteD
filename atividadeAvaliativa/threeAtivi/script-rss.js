// JavaScript para carregar e exibir notícias RSS 
window.onload = function() {
    var url = 'https://rss.tecmundo.com.br/feed';
    $.ajax({ url:"https://api.rss2json.com/v1/api.json?rss_url=" + url,type: 'GET',
        success: function (data) {
            objeto_json = eval(data);
            // ler o conteúdo
            var frase = "";
            for (i = 0; i < objeto_json.items.length; i++){
                frase += '<div class="card mb-2 shadow p-3 mb-3 bg-body rounded " style="max-width: 95%;">'
                frase += '<div class="row">'
                frase += '<div class="col-xxl-4">'
                frase += '<img src="'+ objeto_json.items[i].enclosure.link +'" class="img-fluid rounded-start" alt="imgNoticia">'
                frase += '</div>'
                frase += '<div class="col-xl-8">'
                frase += '<div class="card-body">'
                frase += '<a class="card-title" href="' + objeto_json.items[i].link + '">'+ objeto_json.items[i].title +'</a>'
                frase += '<p>' + objeto_json.items[i].pubDate + '</p>'
                frase += '</div>'
                frase += '</div>'
                frase += '</div>'
                frase += '</div>'
            };
            $("#caixa").html(frase);

            $("#Carousel0").html('<img src="'+ objeto_json.items[0].enclosure.link +'" class="img-fluid rounded-start" alt="imgNoticia">');
            $("#Carousel1").html('<img src="'+ objeto_json.items[1].enclosure.link +'" class="img-fluid rounded-start" alt="imgNoticia">');
            $("#Carousel2").html('<img src="'+ objeto_json.items[2].enclosure.link +'" class="img-fluid rounded-start" alt="imgNoticia">');

        }
    });
}
// Alert
//$(document).ready(function(){
//    setTimeout(function(){
//        alert('Boas-vindas ao website');
//    },5000);
//});