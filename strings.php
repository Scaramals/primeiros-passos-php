<?php

$idade = 22;
//para concatenar utiliza-se o ".";
//mas não precisa quando é aspas duplas;
echo "Olá Mundo!" . PHP_EOL;//Alguns sistemas operacionais utilizam o caracter \n para representar uma quebra de linha. Outros, utilizam \r. Já o Windows utiliza ambos (\r\n). Utilizando a constante PHP_EOL nos é abstraída esta diferença e podemos deixar nosso código funcionando de forma igual em todas as plataformas.
//PARA EXIBIR OS CARACTERES ESPECIAIS UTILIZA-SE O \
echo "Minha idade é $idade";