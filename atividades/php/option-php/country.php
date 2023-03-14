<html>
<head>
  <meta charset="utf-8">   
</head>
<body >
    <form action="" name="" method="post">
        País: <select name="pais" id="pais" onchange="devolverProvincias()" >
            <option value="">selecione um país</option>
            <option value="pt">Portugal</option>
            <option value="es">Espanha</option>
        </select><br>
        <div id="provincias"></div>     
    </form>
    <script type="text/javascript">
    function getHTTPObject(){
        if (window.ActiveXObject){
           return new ActiveXObject("Microsoft.XMLHTTP"); 
        }else if (window.XMLHttpRequest){
            return new XMLHttpRequest();
        }else {
            alert("Não suportado");
            return null;
        }
    }
    function devolverProvincias(){
        var pais = document.getElementById('pais').value;
        httpObject = getHTTPObject();
        if (httpObject != null) {
            httpObject.open("GET", "provinces.php?pais=" + pais, true);
            httpObject.onreadystatechange = function(){
                if(httpObject.readyState == 4){
                    document.getElementById('provincias').innerHTML =httpObject.responseText;
                }
            }
            httpObject.send(null);
        }
    }
</script>
</body>
</html>