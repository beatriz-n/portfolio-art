# Artist Portfolio

This is a system built with Laravel, Bootstrap, Jetstream, jQuery, and Ajax. It serves as a portfolio for an artist, with information about the artworks and an admin area to manage the website's content.

## Features

### Public Module (Website)

- Accessible without login.
- View artworks.
- Detailed information about each artwork (price, type, materials).
- Options to contact and commission artwork.

### Admin Module

- Restricted access with login.
- Full CRUD to manage artworks.
- When registering an artwork, the following can be specified:
  - Type of art (Digital or Traditional).
  - Materials used (if it's traditional art).
  - Whether the artwork is varnished or framed.
  - Price and other details.

## Technologies

- Laravel
- Bootstrap
- Jetstream
- jQuery
- Ajax

## Contributors

- **Beatriz:** [GitHub](https://github.com/beatriz-n)
- **Bruno:** [GitHub](https://github.com/brunohsaz)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/portfolio-artista.git
    ```

2. Install the dependencies:

    ```bash
    composer install
    ```

3. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Configure the `.env` with your database credentials.

6. Run the migrations:

    ```bash
    php artisan migrate
    ```

7. Start the server:

    ```bash
    php artisan serve
    ```

## License

The Laravel framework is open-sourced software licensed under the MIT license.
