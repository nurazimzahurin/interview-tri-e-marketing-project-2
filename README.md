## Getting Started

1. Clone this repo
1. Run composer.
   ```shell
    composer install
   ```
1. Create .env file based on env.example
1. Configure db in .env
1. Run artisan key:generate.
   ```shell
    php artisan key:generate
   ```
1. Run artisan migration.
   ```shell
    php artisan migrate
   ```
1. Run artisan serve.
   ```shell
    php artisan serve
   ```

## Features

This project is an api to generate n(user's input) number of unique random number of rows in db.
This api is consumed in project https://github.com/nurazimzahurin/interview-tri-e-marketing-project-1
The performance and project flows is as below:
![image](https://user-images.githubusercontent.com/66508436/122061753-62b1e380-ce21-11eb-9f39-71c4d04a4a27.png)

