# EasyDonate

Projeto para a disciplina de Engenharia de Software - 2016


## Descrição do projeto

O objetivo deste projeto é agilizar o processo de doação de notas fiscais, através da elaboração de uma interface entre o usuário comum e uma instituição. Desse modo, foi criado um aplicativo mobile que auxilia o próprio usuário a realizar o procedimento de doação através da leitura de informações presentes em notas fiscais para a instituição Associação Fazendo História. Além disso, foi criado uma aplicação web para auxiliar a instituição a receber e cadastrar essas notas fiscais no site da Receital Federal.

Este material apresenta a criação do site.


## Executando o projeto

O site presente neste projeto está hospedado no endereço [EasyDonate](http://easydonate.sa-east-1.elasticbeanstalk.com/) e estará disponível até a data 29/07/2016.

Após essa data, o projeto pode ser rodado localmente (apenas para testes), explicado abaixo.

1. Clone (ou faça um fork e clone): ```git clone https://github.com/victormn/easydonate.git```
2. Utilize alguma ferramenta para criar um acesso local para suas aplicações. Dica: [Tutorial](https://www.youtube.com/watch?v=ArsbbtkF0ps)
3. Copie a pasta deste projeto para sua aplicação local
4. Cria duas base de dados: db_client e db_notas
5. Crie a seguinte tabela para db_client: tbl_client; cujos parâmetros são: username (varchar), password (varchar)
6. Crie as seguintes tabela para db_notas: tbl_notas; cujos parâmetros são: id (int) (auto increment), cnpj (varchar), valor (varchar), data (varchar), qrcode (varchar)
7. Crie as seguintes tabela para db_notas: tbl_historico; cujos parâmetros são: id (int), cnpj (varchar), valor (varchar), data (varchar), qrcode (varchar)
8. Altere os arquivos ```Database/conectarNotasBD.php``` e ```Database/conectarUserBD.php``` para se conectar na base de dados criada

## Aplicativo Android

O aplicativo android que interage com essa aplicação web pode ser encontrado no repositório [Aplicativo Android](https://github.com/garotow/doar-notafiscal)


## Observação final

1. A função de enviar para o site da Receita Federal não foi feita por completo, pois fugia do propósito do projeto da disciplina. Porém, qualquer um está convidado a fazê-la, podendo entrar em contato caso queira.
2. Para se autenticar no site deste projeto, precisa-se de um cadastro. Como este projeto só admite uma instituição, o cadastro não está aberto publicamente.
3. Há falhas na segurança do site, que poderão ser facilmente arrumadas. Mas, como será utilizado apenas para apresentação, essas alterações não foram feitas ainda. Uma melhor segurança poderá ser provida num tempo não tão distante.

