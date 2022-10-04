<?php
// Nas versões do PHP anteriores a 4.1.0, $HTTP_POST_FILES deve ser utilizado ao invés de $_FILES.
if (@$_REQUEST['botao']=="Enviar arquivo") {
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>";
}
/*
$_FILES["arquivo"]["name"] - O nome original do arquivo no computador do usuário. 
$_FILES["arquivo"]["type"] - O tipo mime do arquivo, se o navegador deu esta informação. Exemplo: caso uma imagem GIF tenha sido enviada, o mime será: "image/gif". 
$_FILES["arquivo"]["size"] - O tamanho em bytes do arquivo. 
$_FILES["arquivo"]["tmp_name"] - O nome temporário do arquivo, como está guardado no servidor. 
$_FILES["arquivo"]["error"] - O código de erro associado a este upload de arquivo. Essa opção foi adicionada 

Read more: http://www.linhadecodigo.com.br/artigo/244/upload-de-arquivos-em-php.aspx#ixzz3aXFOv93X

*/

?>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" name=botao value="Enviar arquivo" />
</form>

<?php 
/*

// Tamanho máximo do arquivo em bytes 
$maximo = 50000; 
// Verificação 
if($_FILES["arquivo"]["size"] > $maximo) { 
echo "Erro! O arquivo enviado por você ultrapassa o "; 
echo "limite máximo de " . $maximo . " bytes! Envie outro arquivo"; 
} 

// Verifica se o mime-type é de imagem PNG
if($_FILES["arquivo"]["type"] !== "image/png") { 
echo "O arquivo enviado por você não é uma imagem PNG! Envie outro!"; 
} 

*/
?>

