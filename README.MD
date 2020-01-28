# Test Laravel Project

This was a sample used to recommend product migration from usual PHP work to Laravel back in 2017.

## Steps

- Create a database locally named homestead utf8_general_ci
- Run `curl -sS https://getcomposer.org/installer | php` to install [composer](https://getcomposer.org/download/).
- Run `git clone https://github.com/Rwothoromo/testing.git` to pull this project.
- Rename `.env.example` file to `.env` inside the project root and fill in the database information. You could simply `run mv .env.example .env`. For example using PostgreSQL:

    ```txt
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=<secret>
    ```

- In the project root directory, run:

    ```txt
    - composer install
    - composer update
    - php artisan key:generate
    - php artisan migrate
    - php artisan db:seed
    - php artisan serve
    ```
