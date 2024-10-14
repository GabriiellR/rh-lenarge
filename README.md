# Model View Controller - Padrão de Design para PHP

## Modelos

Todas as funções do banco de dados são armazenadas aqui.  
Cada tabela possui seu próprio objeto dentro da pasta model.

## Visualizações

Todas as páginas da web são armazenadas aqui.  
Cada página tem sua própria pasta com um index.php.  
Todos os dados são passados ​​para a visualização por meio da variável $data.

## Controlador

Todas as funcionalidades são armazenadas aqui.  
Todos os modelos são chamados dentro dos controladores e podem ser modificados e depois passados ​​​​para a visualização.