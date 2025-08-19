# pwiii-Paula-Rodrigues
Aulas de programação Web III com o professor João 
# Bem - vinde !

Você está no caderno inteligente!!
No meu, no seu, no nosso caderno irá conter a descrição das aulas de Programação Web III. Então se prepare e preste bem atenção!!

**

## Links para acesso

**
Laravel: https://laravel.com/
Composer: https://getcomposer.org/
Git Hub: https://github.com/?locale=pt-br


# Laravel 

O Laravel oferece um ecossistema completo para web artesãos. Nosso framework PHP de código aberto, produtos, pacotes e kits iniciais oferecem tudo o que você precisa para construir, implantar e monitorar aplicações web.

1º Clicar no link do inicio da documentação indicando que é o site do Laravel;
2º Clicar dentro do site em documentação; 
3º Na sessão **Criar uma aplicação em Laravel** clicar em Composer;

**
## Composer

![enter image description here](https://getcomposer.org/img/logo-composer-transparent5.png)
Um gerenciador de dependências para PHP

4º Clicar em Download; 
5º Instalar o Composer; 

O importante na instalação é importante na parte dos pacotes selecionar para instalar tudo, no mais é next toda vida. 
**

## Criar arquivos e pastas 

 - Para iniciarmos projetos com o Laravel necessitamos ter o Composer
   instalado
   
   Com o composer instalado e a documentação do laravel aberta precisamos iniciar o PHP e o MySQL a partir do xampp que ira fazer nossa ligação para utilizar o Laravel.
   ![enter image description here](https://wpmudev.com/blog/wp-content/uploads/2019/03/Start_MySQL_Server_XAMPP.png)

Após o passo anterior precisamos clonar nosso repositório do git para nossa pasta htdocs

Observação: Se você não direcionar seu repositório para a pasta htdocs não conseguirá consultar e nem criar novos projetos, tendo em vista que o php é a base do nosso projeto. 

**Copiar link do repositório onde irá criar o projeto:**

1º Logar no Git hub;
2º Ir na parte lateral esquerda;
3º Clicar sobre o seu repositório; 
4º Clicar em Code (geralmente sinalizado com sinal de menor e maior <> com o botão na cor verde e ao lado uma seta indicando que ao clicar conseguirá ter mais opções);
5º Será expandido uma "telinha" com algumas opções. Mas já estará um endereço em http e você deve clicar na imagem onde tem como se fossem duas folhinhas juntas; 

**Após copiar o endereço do nosso repositório no git hub seguimos para o passo na nossa máquina.**

**Git Bash:**

1º Na pastas **htdocs** clicar com o lado direito do mouse;
2º Clicar em Mostrar mais opções;
3º Git bash Here;
4º Digitar: git clone e apertar as teclas Ctrl + shift + Insert que irá colar o endereço do repositório criado. 
5º Clicar enter e o repositório será criado; 

Segue imagem para ilustração:

![enter image description here](https://sos-cer.github.io/projects/git-guide/images/clone.png)

Para iniciarmos o nosso projeto utilizando o Laravel agora iremos abrir o PowerShell como administrador e realizar os comandos necessários, segue abaixo a descrição:

**PowerShell:**

1º Clicar no teclado na tecla do Windows; 
2º Pesquisar por PowerShell; 
3º Clicar sobre o PowerShell e após isso clicar em **Executar como Administrador**  
4º Na documentação do Laravel terá o comando para instalar caso necessário o Php, o Composer e o instalador Laravel e caso já tenha instalado é um outro comando. Segue quando usar cada um:

Pelo Windows para instalar todo o pacote, caso não tenha instalado é o comando :

**Run as administrator...**
**Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol =** **[System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object** **System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))**

Se você já tem o PHP e o Composer instalados, você pode instalar o instalador do Laravel via Composer:

**composer global require laravel/installer**

Após rodsa o comando irá apresentar as informações conforme imagem abaixo:
![enter image description here](https://terminalroot.com.br/assets/img/laravel/install/10-laravel-01.jpg)
Após isso é necessário criar o projeto, para isso basta rodar o comando:

**laravel new example-app**

Observação: após o laravel new você define o nome do projeto, neste caso aula02

Aparecera  o nome da laravel e terá a opção para você personalizar caso queira em alguma linguagem especifica, no nosso caso colocaremos **none** onde indica que faremos a configuração conforme quisermos. 

Após nossa escolha será configurado os pacotes de acordo. 

Chega em uma parte do processamento de dados onde será apresentado opções de banco de dados e no nosso caso iremos escrever a opção que queremos, que é a: **sqlite**e da um enter.

Após todas as definições temos a opção final onde é apresentado se queremos rodas o npm install e npm run build e temos a opção de colocar yes, que queremos ou no, não queremos. No nosso caso queremos. 

Após rodar tudo e fazer todas as escolher rodar o comando code . para abrir o projeto no vscode para criarmos o nosso projeto. 


## Iniciar um projeto criado e salvo no Git Hub

**
- Arquivo de configuração de ambiente, famoso **.env** (ambiente) protege os dados sensíveis. 
Nunca entrega aos desenvolvedores os dados de banco de dados. Este arquivo jamais sobe no git hub, pois é um documento que contém senhas, dados sensíveis. 

**observação:** .env.example -> nunca apagar este documento. 

Para realizar alterações e conseguir rodas o projeto quando baixado do git devemos:


1º Criar uma cópia do arquivo .env.example  e renomear a cópia como .env 

2º **Dentro da pasta do projeto abrir o PowerShell e executar o comando *composer install***

O comando ***composer install*** faz a instalação do ***php*** e gera a pasta ***vendor***

3º Ainda no PowerShell rodar o comando ***npm install*** que irá instalar os pacotes para utilização do ***node***

4º Rodar o comando ***npm run build*** pois ele vai transformar os arquivos de uma forma que a máquina vai entender

observação: php artisan apresenta os comandos disponíveis 

5º Executar o comando ***php artisan key:generate,*** este comando irá criar uma chave criptografada com uma senha para o banco. 

observações: ***migrations*** arquivos gerados pelo ***orm***  que é o gerenciamento de objeto relacional que permite que trabalhemos com banco de dados usando linguagem alternativa.  

observação: é necessário rodar as migrates para criar o banco de dados. 

6º Executar o comando ***php artisan migrate*** para poder criar o banco de dados

7º Executar o comando **composer run dev**

8º Segurar o Ctrl + clicar sobre o endereço no Power Shell identificado na categoria Server da seguinte forma:

[server]    INFO  Server running on [http://127.0.0.1:8000].
