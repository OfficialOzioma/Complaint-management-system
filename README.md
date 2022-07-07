# Complaint-management-system

Complaint-management-system

## How to install

- clone the repository

    ```bash
      git clone  git@github.com:OfficialOzioma/Complaint-management-system.git
    ```

- cd into the directory

    ```bash
      cd Complaint-management-system
    ```

- install composer dependencies

    ```bash
      composer install
    ```

- install node dependencies

    ```bash
    #!/bin/bash
      npm install
    ```

- make a copy of the .env file

    ```bash
    #!/bin/bash
        cp .env.example .env
    ```

### Edit your database configuration on the .env file

- edit this portion on your .env file
  
    ```bash
      DB_HOST=localhost
      DB_DATABASE=
      DB_USERNAME=
      DB_PASSWORD=
    ```  

- run migrations

   ```bash
        php artisan migrate
    ```

- start server

   ```bash
        php artisan serve
    ```

- start npm

   ```bash
        npm run dev
    ```
