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

    //CONFIOGURAÇÃO DA ONDE FICA OS COMPONENTES COMO PADRÃO JA VEM ASSIM
    "config": {
        "vendor-dir": "vendor"
    },

    //DIZ PARA O COMPOSER QUAIS OS ARQUIVOS QUE TEM QUE CARREGAR AUTOMATICAMENTE
    //APENAS COM UM REQUIRE JA CARREGA TUDO QUE PRECISAMOS
    //DIRETORIO ONDE CARREGA AS CLASSES NO CASO O SOURCE/
    //QUANDO RODAR O COMPOSER JA AUTOMATICAMENTE INCLUI O CONFIG.PHP    "autoload": {
        "psr-4":{
            "Source\\": "source/"
        },
        "files": [
            "source/Config.php"
        ]
    },

    //COMPONENTES PARA O PROJETO FUNCIONAR
    "require": {
        //DIZ PARA PEGAR O COMPONENTE MAIS NOVO
        "phpmailer/phpmailer": "6.0.*"
    }

5. composer update