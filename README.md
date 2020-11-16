# PHP TIPS: CONFIGURAR PROJETOS

1. WAMP
    - https://www.youtube.com/watch?v=Zl1ZgfM9rSQ&list=PLi_gvjv-JgXqsmCAOrueT1-4JrnMW8_Gg

2. COMPOSER
    - https://getcomposer.org/download/
    - criar arquivo composer.json para iniciar o projeto

3. CONFIGURAR COMPOSER.JSON
    - "name": "RazielMiranda/php-tips", //Nome do GIT
    - "minimum-stability": "stable", //Versao minima pra rodar o projeto
    - "license": "PROPRIETARY" // QUANDO O CODIGO NAO FOR SEU OU DE CLIENTE
    - "license": "MIT" //CODIGO LIVRE

4. CONFIGURAÇÕES DA PSR-4

    //diretorio de fornecedores de pacotes
    "config": {
        "vendor-dir": "vendor"
    },

    //isso faz com que o autoload se torne comum no projeto 
    "autoload": {
        "psr-4":{
            "Source\\": "source/"
        },
        "files": [
            "source/Config.php"
        ]
    },

    //componetents pro projeto funcionar
    "require": {
        "phpmailer/phpmailer": "6.0.*"
    }