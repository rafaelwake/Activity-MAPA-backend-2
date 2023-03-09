#Backend and Database

## Como rodar a aplicação

- Importar o banco de dados arquivo: **banco_de_dados.sql**
- Configurar a conexão com o banco no arquivo: **config.php**
  - DB_NAME --> Nome do banco
  - DB_USER --> Usuário do banco
  - DB_PASS --> Senha do usuário
  - DB_HOST --> Host do banco
- Executar o arquivo **index.php** e toda a aplicação iniciará

###Find bellow the activity:
Você foi designado para criar um sistema web (PHP e Mysql) que irá registrar e listar o protocolo de solicitação de atendimento de uma cooperativa de crédito. Confira os requisitos abaixo:

1 - Para o registrar o protocolo, será necessário que o atendente ou cliente preencha os seguintes campos: solicitante, descrição e e-mail. Além destes campos, o sistema irá armazenar em cada registro o ano, a data/hora do cadastro e a situação de status 1 (aguardando analise). O número do protocolo é a chave primária do registro no banco de dados (não é preciso gerar número especifico para o protocolo).
2 - Após realizar a solicitação de cadastro, você deve imprimir em tela os dados que foram cadastrados a fim de confirmar e imprimir o protocolo ao solicitante.
3 - O solicitante pode a qualquer momento buscar informações de sua solicitação, para isso ele deve informar o número do protocolo gerado e o sistema deverá imprimir estas informações na tela.
4 – O sistema deve ser construído utilizando a linguagem PHP, banco de dados Mysql com PDO.
5 – Seguir a estrutura da tabela protocolo.
![image](https://user-images.githubusercontent.com/60991402/223887727-d089719b-e5df-4eeb-892a-e9610a812e4f.png)
