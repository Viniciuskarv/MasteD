// JavaScript para carregar e exibir notícias RSS 
window.onload = function() {
    var url = 'https://rss.tecmundo.com.br/feed';
    $.ajax({ url:"https://api.rss2json.com/v1/api.json?rss_url=" + url,type: 'GET',
        success: function (data) {
            objeto_json = eval(data);
            // ler o conteúdo
            var frase = "";
            for (i = 0; i < objeto_json.items.length; i++){
                frase += '<div class="card mb-2 p-3 mb-3 bg-body rounded " style="max-width: 100%;">'
                frase += '<div class="row">'
                frase += '<div class="col-md-12 col-sm-4">'
                frase += '<img src="'+ objeto_json.items[i].enclosure.link +'" class="img-fluid rounded-start" alt="imgNoticia">'
                frase += '</div>'
                frase += '<div class="col-md-12 col-sm-8">'
                frase += '<div class="card-body">'
                frase += '<a class="card-title" href="' + objeto_json.items[i].link + '">'+ objeto_json.items[i].title +'</a>'
                frase += '<p>' + objeto_json.items[i].pubDate + '</p>'
                frase += '</div>'
                frase += '</div>'
                frase += '</div>'
                frase += '</div>'
            };
            $("#caixa").html(frase);

            var car1 = '<img src="'+ objeto_json.items[1].enclosure.link +'" class="img-fluid rounded" alt="imgNoticia">'
            car1 += '<div class="carousel-caption">'
            car1 += '<a class="card-title" href="'+ objeto_json.items[1].link +'">'+ objeto_json.items[1].title + '</a>'
            car1 += '</div>'
            
            $("#Carousel0").html(car1);

            var car2 = '<img src="'+ objeto_json.items[2].enclosure.link +'" class="img-fluid rounded" alt="imgNoticia">'
            car2 += '<div class="carousel-caption">' 
            car2 += '<a class="card-title" href="'+ objeto_json.items[2].link +'">'+ objeto_json.items[2].title + '</a>'
            car2 += '</div>'
           
            $("#Carousel1").html(car2);

            var car3 = '<img src="'+ objeto_json.items[3].enclosure.link +'" class="img-fluid rounded" alt="imgNoticia">'
            car3 += '<div class="carousel-caption">'
            car3 += '<a class="card-title" href="'+ objeto_json.items[3].link +'">'+ objeto_json.items[3].title + '</a>'
            car3 += '</div>'
            
            $("#Carousel2").html(car3);
        }
    });
}
$(document).ready(function() {
    $('.image-link').magnificPopup({type:'image'});
  });
// Alert
//$(document).ready(function(){
//    setTimeout(function(){
//        alert('Boas-vindas ao website');
//    },5000);
//});