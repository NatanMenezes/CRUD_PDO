# CRUD_PDO
Um sistema de gerenciamento de produtos baseado em PHP com PDO.

Esse sistema foi criado como parte de um curso de php realizado no inicio do ano de 2021. Segue abaixo uma descrição da estrutura do sistema.

Os arquivos index, create, edit e delete na pasta raiz são os includes e requires dos arquivos do projeto.

O arquivo session.php configura as sessões do projeto, que são as mensagens de status enviadas pelo sistema para o usuário.

O composer nesse projeto foi utilizado somente para gerar o arquivo de autoload.

A pasta App possui dois diretórios, o primeiro deles é o model, que possui os seguintes arquivos:

1. Conexao.php: estabelece a conexão com o mysql
2. Produto.php: estabelece um modelo com os atributos que um produto deve ter
3. Produto_DAO.php: classe com o CRUD do banco de dados dos produtos

O diretório view possui as partes dos templates do sistema, esse diretório possui os seguintes arquivos: 

1. create.php: Formulário de criação e seus respectivos filtros.
2. edit.php: Formulário de edição e seus respectivos filtros.
3. footer.php: Footer padrão da aplicação.
4. header.php: Header padrão da aplicação.
5. main.php: Visualização inicial e modelo da tabela dos produtos.
6. tbody.php: Tabela de produtos.

A estilização do sistema foi feita com o Material Library.


