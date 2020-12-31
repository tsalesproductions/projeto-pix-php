### PROJETO PIX PHP

Projeto desenvolvido usando os seguintes repositórios:
- https://github.com/endroid/qr-code
- https://github.com/jbroadway/urlify
- https://github.com/bonus3/php-pix

Projeto desenvolvido para pessoas que queiram inovar e utilizar o QRCode para receber pagamentos via pix;

O pix chegou para inovar o cenceito de pagamentos online; Agora com apenas poucos cliques, o cliente pode efetuar um pagamento sem muita burocracia e sem precisar criar um cadastro enorme para efetuar uma compra utilizando seu cartão, sendo assim, poupando tempo e convertendo em lucros;



#### COMO FUNCIONA?
O cliente/pagador vai escaniar o código QR que será gerado no site/projeto, e gerará um código pix para o mesmo estar efetuando o pagamento através do seu banco acessando:
**Pix -> Copiar e Colar -> Colar o Código que foi gerado pelo QrCode**
No seu site/projeto eu recomendo ter um tutorial explicando o cliente;

#### REQUISITOS
PHP 7.0+ e < 8.0

#### COMO USAR?
Tem duas formas que encontrei de utilizar: 
Embed ou fazendo a requisição via ajax em algum arquivo php(O utuilizado é **components/QrCode.php** que recebe um get fornecendo os valores) para gerar dinâmicamente os valores, caso queira colocar em prateleira ou em página de produto, por exemplo;

Você pode trocar as informações do recebedor em **components/configs.php**
```
define("email", "anderson_rockandroll@hotmail.com");
define("nome", "Anderson da Silva Gonçalves");
define("cidade", "Rio de Janeiro");
define("cpf", "123456");
define("tamanho_qrCode", 200); //Equivale ao tamanho em pixels; 200 = 200px
```
**OBS: ** O recebedor deve ter o email ou cpf/cnpj cadastrado na chave pix para estar recebendo

**Um exemplo completo de como utilizar:**
```
include_once("configs.php");
include_once("../vendor/autoload.php");
include_once("pix.php");

\PhpPix\Pix::generateQrCode(
	email, //Pix key
	nome, //Name
	cidade, //City
	cpf, //Identifier
	1234.50 //value. Ex.: R$1.234,50 
);

O valor final deve estar em float ou int;
```


### DEMO EM VÍDEO
- Este projeto foi desenvolvido em livestream, então você pode acompanhar o replay ou o resultado final diretamente neste link: [http://https://www.youtube.com/watch?v=A9TBWOLxI1M](http://https://www.youtube.com/watch?v=A9TBWOLxI1M)



**Table of Contents**

[TOCM]

[TOC]



###FIM
Obrigado a todos, e bom uso :)
