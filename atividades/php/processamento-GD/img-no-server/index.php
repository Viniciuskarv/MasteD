<?php
function redimensionarImagem($caminhoOriginal, $destino,
$novaLargura, $novaAltura, $manterProporcao = true, $qualidade =100) {
    $aInfo = getimagesize($caminhoOriginal);
    switch($aInfo['mime']) {
        case 'image/jpeg' :
            $image = imagecreatefromjpeg($caminhoOriginal);
            break;
        case 'image/gif' :
            $image = imagecreatefromgif($caminhoOriginal);
            break;
        case 'image/png' :
            $image = imagecreatefrompng($caminhoOriginal);
            break;
    }
    if($manterProporcao) {  
        $imgPropocao = $aInfo[0]/$aInfo[1];
            if ($imgPropocao>1) {
        $novaAltura = $novaLargura/$imgPropocao;
    } else {
        $novaLargura = $novaAltura*$imgPropocao;
    }
    }
    $imagemNova = imagecreatetruecolor($novaLargura, $novaAltura);
    imagecopyresized($imagemNova, $image, 0, 0, 0, 0, $novaLargura,
    $novaAltura, $aInfo[0], $aInfo[1]);
    switch($aInfo['mime']) {   
        case 'image/jpeg' :
            imagejpeg($imagemNova,$destino,$calidad);
        break;
        case 'image/gif' :
            imagegif($imagemNova,$destino);
        break;
        case 'image/png' :
            imagepng($imagemNova,$destino);
        break;
    }
}
if($_POST['btnEnviar']) {
    if($_FILES['imagemOriginal']['size'] > 0 ) {
    // obter a extensão da imagem dividida em partes com o separador '.', e passar para minúsculas
    $extensao = strtolower(end(explode('.',$_FILES['imagemOriginal']['name'])) );
    // Validar extensão
    if( !in_array($extensao, array('jpg','gif','png') ) ) {
        echo 'A imagem deve estar num dos seguintes formatos: JPG, GIF ou PNG';
    } else {
    // Redimensionar e mostrar
    redimensionarImagem($_FILES['imagemOriginal']['tmp_name'],'./resize.jpg', 150, 150,true, 100);
    echo 'Imagem Redimensionada<br/> <img src="./resize.jpg" />';
    }
    } else {
    echo 'Tem que fazer upload de um ficheiro!';
    }
}
echo '<br /><br /><form action="" method="post" enctype="multipart/form-data">Upload:<br />
<input type="file" name="imagemOriginal" id="imagemOriginal"size="30" />
<input type="submit" name="btnEnviar" id="btnEnviar" value="Enviarimagen" />
</form> ';
?>