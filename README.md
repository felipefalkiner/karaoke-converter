# Karaoke Converter
Interpreta o arquivo BD.ini de sistemas de Videokê e exibe em diversos formatos como:
 - Tabelas em HTML
 - CSV
 - JSON
 - Array PHP (para debug)

**Modo de usar:**

Copie o **"converter.php"** para um servidor Web com suporte a PHP e coloque o arquivo **"BD.ini"** do seu sistema na mesma pasta que o **"converter.php"** (esse repositório já contêm um de exemplo, para usa-lo renomeie ele de **BD.ini.sample** para **BD.ini**.

Acesse o arquivo pelo seu navegador, exemplo: http://localhost/karaoke-db-converter/converter.php

Por padrão o modo Tabelas em HTML vai ser exibido, para escolher outros modos adicione ?mode= e o tipo de modo desejado, exemplo:
 - HTML: http://localhost/karaoke-db-converter/converter.php?mode=html
 - CSV: http://localhost/karaoke-db-converter/converter.php?mode=csv
 - JSON: http://localhost/karaoke-db-converter/converter.php?mode=json
 - Array PHP (Debug): http://localhost/karaoke-db-converter/converter.php?mode=debug

