# 📦 Sistema de Entregas & Logística (API)

Uma API REST robusta para gerenciamento e cotação de envios de frete, desenvolvida com **Laravel 11** e integrada a um ecossistema conteinerizado via **Laravel Sail (Docker)**. O sistema conta com autenticação segura para aplicações SPA (Single Page Application) utilizando o **Laravel Sanctum** e validações avançadas de dados de entrada.

---

## 🚀 Tecnologias Utilizadas

* **Back-end:** PHP 8.3 + Laravel 11 Framework
* **Autenticação:** Laravel Sanctum (Tokens Bearer)
* **Banco de Dados:** MySQL 8.0
* **Ambiente:** Laravel Sail / Docker & Docker Compose
* **Client de Testes:** Insomnia

---

## 🛠️ Arquitetura e Recursos Implementados

* **Arquitetura MVC / REST:** Separação clara de responsabilidades entre Rotas, Controllers, Models e Requests.
* **Segurança (Sanctum):** Rotas de cadastro de frete e gerenciamento internas blindadas por autenticação baseada em Token.
* **Form Requests (Validação):** Camada isolada de validação que impede a persistência de dados inconsistentes (ex: CEPs inválidos ou pesos negativos) com respostas HTTP 422 padronizadas.
* **Mass Assignment Protection:** Models configurados defensivamente usando propriedades fillable modernas do PHP/Laravel 11.

---