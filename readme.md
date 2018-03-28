KOLINA WEBSITE
===========

Site da KolinaLabs implementado por meio da plataforma open source (licença MIT) Asgard CMS e Laravel 5.5.39

1. ##### Asgard CMS: [https://asgardcms.com](https://asgardcms.com)
2. ##### Laravel: [https://laravel.com/](https://laravel.com/)

## Sumário

  1. [Guia Geral](#guia-geral)
  1. [Workflow](#workflow)
  1. [Instalações da Aplicação](#instalações-da-aplicação)
  1. [Sobre](#sobre)

  ## Guia Geral

Esclarecimentos gerais relacionados à documentação:

  <a name="guia--nomenclaturas"></a><a name="1.1"></a>
  - [1.1](#guia--nomenclaturas) **Nomenclaturas**:

    - Issues: tarefas

  <a name="guia--siglas"></a><a name="1.2"></a>
  - [1.2](#guia--siglas) **Siglas**:

    - PR: Pull Request

  <a name="guia--notas"></a><a name="1.3"></a>
  - [1.3](#guia--notas) **Notas Gerais**:

    - Em comandos, os colchetes `[]` delimitam que alguns conteúdos devem ser preenchidos em seu lugar;
    - A distro Ubuntu 16.04 foi utilizada como base de referência para a elaboração desta documentação, em outras distribuições podem ocorrer pequenas variações.

## Workflow

  <a name="workflow--ferramentas"></a><a name="2.1"></a>
  - [2.1](#workflow--ferramentas) **Ferramentas**:

    - [BucketBoard](https://bitbucket.org/joaozaqueu/kolina_site/addon/bucketboard/board): Gerenciamento de tarefas (issues)
    - [BitBucket](https://bitbucket.org/joaozaqueu/kolina_site/s): Versionamento
    - [Slack](https://kolinalabs-si.slack.com/messages): Chat e bots

  <a name="workflow--fluxo"></a><a name="2.2"></a>
  - [2.2](#workflow--fluxo) **Levantamento e distribuição de tarefas**:

    - 2.2.1. Draft (BitBucket):

      Consiste no levantamento de demanda em reunião de equipe interna, onde são definidas as tarefas.

    - 2.2.2. Tasks (Bucket Board):

     São as menores fragmentações do processo, são as tarefas técnicas executadas para que uma determinada funcionalidade seja implementada, sendo que essas nem sempre são independentes.

  <a name="workflow--tarefas"></a><a name="2.3"></a>
  - [2.3](#workflow--tarefas) **Ciclo de vida de Tarefas**:

    - Para cada tarefa há um prazo máximo de execução de 2 dias;
    - Caso a execução de uma tarefa ultrapasse 2 dias a mesma deve ser reavaliada pela equipe;
    - Tarefas devem ser quebradas em caso de:
      - Tarefas muito grandes;
      - Tarefas que modifiquem diversas áreas distintas do projeto;
      - Tarefas em que a execução ultrapasse os 2 dias.
  <a name="workflow--review"></a><a name="2.4"></a>
  - [2.4](#workflow--review) **Revisão de Pull Request**:

    - As revisões de Pull Request devem ser feitas exclusivamente através do BitBucket;
    - Comentários devem ser feitos na Pull Request e avisados via Slack;
    - É proibido realizar merge de Pull Request sem responder aos comentários;

  <a name="workflow--flags"></a><a name="2.5"></a>
  - [2.5](#workflow--flags) **Solicitações no Slack**: utilizamos por padrão flags de classificações no início de cada solicitação.

    - **REVIEW**: a notificação de REVIEW, é direcionada para o channel correto, de acordo com a categoria.

    `Ex.: @here: gianlucabine needs a *REVIEW*: https://bitbucket.org/joaozaqueu/kolina_site/pull-requests/19`

    Para responder uma solicitação utilizamos por padrão o nome de usuário junto a resposta.

    `Ex.: @gianlucabine [MESSAGE]`

    > **Nota**: Para respostas curtas de confirmação pode ser utilizado apenas `:+1:`

    ## Instalações da Aplicação

  <a name="aplicacao--instacao"></a><a name="3.1"></a>
  - [3.1](#aplicacao--instacao) **Geral**:
  ```
  1. Instalar o COMPOSER: https://getcomposer.org/
  2. Criar uma database no MySQL, ex: kolina_website.
  3. Clonar o repositório.
  4. Entrar na pasta do repositório pelo terminal.
  5. Rodar o comando: 'php artisan asgard:install' e seguir os passos.
  6. Rodar o comando: 'php artisan key:generate'.
  7. Rodar o comando: 'composer install'.
  8. Rodar o comando: 'php artisan serve'.
  9. Entrar e logar no painel administrativo na url: http://localhost:8000/backend
  10. Ir em Workshop > Settings e em 'Front end template' escolher o template 'Kolina'
  11. Ir em Workshop > Modules e ativar os módulos 'Block' e 'Blog' se não estiverem ativados.
  12. Rodar o comando: 'php artisan migrate'
  13. Ir em Workshop > Users > Roles e clicar em Admin.
  14. Ir na aba 'Permissions' e em Block.blocks, Blog.posts e Blog.categories clicar em 'Allow all' e salvar.
  15. Ir em Content > Pages.
  16. Criar as páginas:
    - Home page, com page template 'home' e título 'Home page'.
    - Sobre, com page template 'about' e título 'Sobre'.
    - Contato, com page template 'contact' e título 'Contato'.
    - Solicitar, com page template 'request' e título 'Solicitar'.
    - Sices Solar, com page template 'sices' e título 'Sices Solar'.
    - IMPORTANTE: Deixar a checkbox 'Status' marcada e em 'Body' apenas escrever 'Conteúdo'.
    - IMPORTANTE: Clicar em generate em 'Slug' após escrever o título.
  17. Ir em Content > Blocks e criar os blocos 'telefone' e 'email' e preencer com os devidos valores.
    - IMPORTANTE: Deixar a checkbox 'Online' marcada.
  18. Editar o arquivo .env e adicionar os parametros:
    - CAPTCHA_SECRET=SECRET
    - CAPTCHA_SITEKEY=SITEKEY
  19. Substituir SECRET e SITEKEY pelas chaves corretas do Google reCAPTCHA, ver: https://www.google.com/recaptcha/admin 
  20. Rodar o comando: 'php artisan asgard:publish:theme'.
    - IMPORTANTE: Todas as vezes que forem alterados/adicionados arquivos: HTML, JS, CSS e Imagens rodar o comando do item 20 novamente. 
  ```

## Sobre

  <a name="sobre--equipe"></a><a name="4.1"></a>
  - [4.1](#sobre--equipe) **A equipe**:

    - #### Alisson Alves
    ```
    Full-stack developer
    Slack: @alissonalmachado
    Github: @alissonam
    E-mail: alissonalmachado@gmail.com
    ```

    - #### Claudinei Machado
    ```
    Full-stack developer
    Slack: @cjchamado
    Github: @cjchamado
    E-mail: cjchamado@gmail.com
    ```

    - #### Fabio Dukievicz
    ```
    Full-stack developer
    Slack: @fabiojd47
    Github: @kascat
    E-mail: fabiojd47@gmail.com
    ```

    - #### Gianluca Bine
    ```
    Backend developer
    Slack: @gianlucabine
    Github: @Pr3d4dor
    E-mail: gian_bine@hotmail.com
    ```

    - #### João Zaqueu Chereta
    ```
    Full-stack developer
    Slack: @joaozaqueuchereta
    Github: @joaozaqueu
    E-mail: joaozaqueuchereta@gmail.com
    ```
    - #### Rafael Kendrik
    ```
    Full-stack developer
    Slack: @rafaelkendrik
    Github: @rafamikovski
    E-mail: rafamikovski@hotmail.com
    ```