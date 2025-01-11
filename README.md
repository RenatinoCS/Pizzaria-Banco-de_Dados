# 🍕 Sistema de Pedidos de Pizza  

## Resumo  
Este projeto foi desenvolvido com o objetivo principal de treinar e aprofundar os conhecimentos em **SQL**, por meio da criação e manipulação de um banco de dados voltado para o gerenciamento de pedidos de uma pizzaria.  

Além disso, o projeto demonstra a integração entre um banco de dados SQL e páginas web, utilizando **PHP** e **CSS** para construir as interfaces e processar os dados.  

### Estrutura do Sistema  
1. **Banco de Dados SQL**:  
   - Criado para armazenar os pedidos, com tabelas estruturadas para receber as informações: bordas, massas, pedidos, pizza_sabor, pizzas, sabores, status.
   - Manipulação dos dados realizada via SQL, incluindo inserção, atualização e remoção de registros.  

2. **Página do Cliente**:  
   - Permite selecionar as opções da pizza, como massa, borda e recheios.  
   - Os dados são enviados e armazenados no banco de dados.  

3. **Página do Proprietário**:  
   - Exibe os pedidos realizados, com os dados enviados pelos clientes.  
   - Oferece funcionalidades para atualizar o status do pedido ou removê-lo do banco de dados.  

O sistema é executado localmente utilizando **XAMPP**, e o banco de dados pode ser gerenciado com ferramentas como o **MySQL Workbench**.  

## Tecnologias Utilizadas  
- **SQL**: Foco principal do projeto, usado para criar, consultar, atualizar e excluir registros no banco de dados.  
- **PHP**: Para integração do banco de dados com as páginas web e manipulação dos dados recebidos.  
- **CSS**: Para estilização das páginas.  
- **XAMPP**: Ambiente de desenvolvimento local para servidor e banco de dados.  

## Como Executar o Projeto  
1. Instale o [XAMPP](https://www.apachefriends.org/index.html) e configure o ambiente local.  
2. Clone este repositório em sua máquina local.  
3. Importe o banco de dados SQL usando o **MySQL Workbench** ou outro cliente SQL.  
4. Coloque os arquivos do projeto na pasta `htdocs` do XAMPP.  
5. Inicie o servidor Apache e o MySQL pelo painel do XAMPP.  
6. Acesse as páginas:  
   - **Cliente**: `localhost/pizzariajoao/index.php`  
   - **Proprietário**: `localhost/pizzariajoao/dashboard.php`  

## Objetivo de Aprendizado  
- Criar e estruturar um banco de dados SQL funcional.  
- Realizar operações de manipulação de dados (CRUD) em SQL.  
- Integrar o banco de dados com páginas web utilizando PHP.  
- Compreender a interação entre frontend e backend em um contexto prático.  

## Melhorias Futuras  
- Expandir o banco de dados com novas funcionalidades, como registro de clientes e relatórios de pedidos. 
- Adicionar autenticação para o proprietário.  

Contribuições e feedback são sempre bem-vindos! 😊  

