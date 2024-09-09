# Portfólio de Artista

Este é um sistema criado com Laravel, Bootstrap, Jetstream, jQuery e Ajax. Ele serve como portfólio para um artista, com informações sobre as obras e uma área de administração para gerenciar o conteúdo do site.

## Funcionalidades

### Módulo Público (Site)

- Acessível sem login.
- Visualização de obras de arte.
- Informações detalhadas sobre cada obra (preço, tipo, materiais).
- Opções para entrar em contato e encomendar obras.

### Módulo Admin

- Acesso restrito com login.
- CRUD completo para gerenciar as obras.
- Ao cadastrar uma obra, é possível especificar:
  - Tipo de arte (Digital ou Tradicional).
  - Materiais usados (se for arte tradicional).
  - Se a obra está envernizada ou emoldurada.
  - Preço e outras informações.

## Tecnologias

- **Laravel**
- **Bootstrap**
- **Jetstream**
- **jQuery**
- **Ajax**

## Colaboradores

- **Beatriz:** [GitHub](https://github.com/beatriz-n)
- **Bruno:** [GitHub](https://github.com/brunohsaz)

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/portfolio-artista.git
   ```
2. Instale as dependências:
   ```bash
   composer install
   ```
3. Copie o arquivo .env.example para .env:
   ```bash
   cp .env.example .env
   ```
4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```
5. Configure o .env com suas credenciais de banco de dados.
6. php artisan migrate
   ```bash
   php artisan migrate
   ```
7.Inicie o servidor:
  ```bash
  php artisan serve
  ```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
   
