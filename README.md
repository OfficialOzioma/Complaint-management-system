# Complaint-management-system

Complaint-management-system

## How to install

    ```bash
      git clone  git@github.com:OfficialOzioma/Complaint-management-system.git
    ```
    ```bash
      cd Complaint-management-system
    ```
    ```bash
        composer install
    ```
    ```bash
        npm install
    ```
     ```bash
        cp .env.example .env
    ```

### Edit your database configuration on the .env file

    ```bash
        DB_HOST=localhost
        DB_PORT=3306
        DB_DATABASE=name
        DB_USERNAME=username
        DB_PASSWORD=password
    ```

- run migrations

   ```bash
        php artisan migrate
    ```

- start server

   ```bash
        php artisan serve
    ```
