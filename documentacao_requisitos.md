# Documentação de Análise de Requisitos — Sistema de Gestão PetShop

Esta documentação apresenta a análise de requisitos funcionais e não funcionais do sistema **Gestão Mundo Pet**, desenvolvido em PHP estruturado e MySQL. O sistema tem como objetivo principal controlar o cadastro e a movimentação de estoque de produtos e medicamentos voltados para o setor de pet shop.

---

## 1. Requisitos Funcionais (RF)

Os requisitos funcionais descrevem o que o sistema deve fazer (as ações, processos e fluxos de informação).

### 1.1. Controle de Acesso e Autenticação
*   **RF-001 - Autenticação de Usuário (Login):** O sistema deve permitir o acesso restrito apenas a usuários administradores mediante o fornecimento de credenciais pré-definidas (usuário: `Admin`, senha: `456`).
*   **RF-002 - Encerramento de Sessão (Logout):** O sistema deve permitir que o usuário autenticado finalize sua sessão ativa de forma segura através do botão "Sair".
*   **RF-003 - Proteção de Rotas:** O sistema deve bloquear o acesso direto às páginas de gerenciamento (menu, cadastros e relatórios) se o usuário não estiver autenticado na sessão corrente.

### 1.2. Gerenciamento de Produtos Pet
*   **RF-004 - Cadastro de Produtos:** O sistema deve permitir o cadastro de novos produtos contendo as informações: Nome, Código, Fabricante, Preço, Validade, Peso da Embalagem, Indicação de Espécie (ex: cão, gato), Sabor e Categoria.
*   **RF-005 - Edição de Produtos:** O sistema deve permitir a alteração das informações cadastrais de um produto já existente.
*   **RF-006 - Exclusão de Produtos:** O sistema deve permitir a remoção de um produto cadastrado.
*   **RF-007 - Movimentação de Estoque de Produtos:** O sistema deve permitir o registro de movimentações (Entrada ou Saída) de um determinado produto informando a quantidade e a data do movimento.

### 1.3. Gerenciamento de Medicamentos / Remédios Pet
*   **RF-008 - Cadastro de Medicamentos:** O sistema deve permitir o cadastramento de remédios registrando: Nome do Remédio, Validade, Peso Líquido, Indicação Terapêutica e Instruções de Uso.
*   **RF-009 - Edição de Medicamentos:** O sistema deve permitir a alteração dos dados cadastrados de qualquer remédio.
*   **RF-010 - Exclusão de Medicamentos:** O sistema deve permitir a exclusão de medicamentos do banco de dados.
*   **RF-011 - Movimentação de Estoque de Medicamentos:** O sistema deve permitir lançar movimentações de entrada e saída para cada medicamento, informando a quantidade respectiva.

### 1.4. Visualização e Relatórios (Gestão)
*   **RF-012 - Painel Geral de Estoque (Gestão):** O sistema deve disponibilizar uma tela unificada de consulta de estoque atual de produtos e medicamentos, calculada dinamicamente através do somatório das movimentações de entrada e saída.

---

## 2. Requisitos Não Funcionais (RNF)

Os requisitos não funcionais especificam critérios que podem ser usados para julgar a operação de um sistema, em vez de comportamentos específicos.

### 2.1. Arquitetura e Linguagem
*   **RNF-001 - Linguagem de Programação:** O backend da aplicação deve ser desenvolvido utilizando **PHP estruturado**.
*   **RNF-002 - Banco de Dados:** O sistema deve utilizar o SGBD **MySQL** para a persistência das informações.

### 2.2. Segurança e Controle
*   **RNF-003 - Segurança de Sessão:** O controle de autorização e retenção do estado de login deve ser feito utilizando o mecanismo de sessões nativas do PHP (`session_start()`).

### 2.3. Interface e Usabilidade
*   **RNF-004 - Simplicidade de Interface:** A interface web deve ser construída de forma simples utilizando HTML puro, permitindo navegação através de listas de links diretos.

---

## 3. Estrutura do Banco de Dados

O banco de dados do sistema (`petshop_db`) é composto pelas seguintes entidades principais:
1.  **`produtpet`**: Armazena as características físicas e comerciais dos produtos para animais.
2.  **`remedio`**: Armazena os dados científicos, instruções de uso e indicações dos remédios.
3.  **`movprodut`**: Armazena os registros históricos de entrada/saída de mercadorias gerais.
4.  **`movremed`**: Armazena as entradas e saídas específicas de medicamentos para pets.
