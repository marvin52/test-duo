<html>
    <head>
        <title>Dúvidas Frequentes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Listamos aqui algumas dúvidas frequentes">
        <meta name="author" content="Marvin Medeiros">
        <link rel="stylesheet" href="assets/css/app.css">
    </head>
    <body onload="init()">
        <div class="doubts-header">
            <div class="doubts-header__navbar">
                <button class="doubts-header__franchisee-button">Seja um Franqueado</button>
                <button class="doubts-header__consultant-button">Seja um consultor(a)</button>
                <button class="doubts-header__buy-button">Quero Comprar</button>
            </div>
            <button class="doubts-header__restricted-area-button">Área Restrita</button>
            <div class="doubts-header__doubts-text">
                <h1>Dúvidas</h1>
                <p><b>Listamos aqui algumas dúvidas frequentes</b><br>caso a sua dúvida não esteja aqui você pode <br>entrar em contato conosco <a href="#">clicando aqui</a></p>
            </div>
        </div>
        <div id="doubts-list"></div>
        <div class="doubts-navbar-bottom"></div>
        <script id="doubts-template" type="x-tmpl-mustache">
            <div class="doubts-accordion">
                {{#lista_tarefas}}
                <a class="doubts-accordion__title" href="#doubt-{{id}}">{{titulo}}</a>
                <p class="doubts-accordion__description collapsed" id="doubt-{{id}}">{{descricao}}</p>
                {{/lista_tarefas}}
            </div>
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/4.0.1/mustache.min.js" integrity="sha512-6AXIWogbKpsHvoZJrJtHpIYES4wP8czSj0zk7ZfwOYS8GWYFNSykwdfapt7yQc4ikZytemBu+QyVObzBHJMwYg==" crossorigin="anonymous"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>