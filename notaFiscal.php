<?php 

 //Carregar o arquivo xml 
 $xml = simplexml_load_file('NFe_assinada.xml');

 foreach ($xml->infNFe as $registro):

    echo "UF" . $registro->ide->cUF . "<br>";

 endforeach;
    