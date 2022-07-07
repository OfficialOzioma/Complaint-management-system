# Complaint-management-system

Complaint-management-system

## How to install

- clone the repository

    ```
      git clone  git@github.com:OfficialOzioma/Complaint-management-system.git
    ```

- cd into the directory

    ```
      cd Complaint-management-system
    ```

- install composer dependencies

    ```
      composer install
    ```

- install node dependencies

    ```
      npm install
    ```

- make a copy of the .env file

    ```
        cp .env.example .env
    ```

### Edit your database configuration on the .env file

    ```
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
