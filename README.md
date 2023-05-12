# Fee Calculator

The project was based on a recruitment task. It consists in converting the fee from the given amount, assuming two different terms. You can edit the fee scheme as needed. The user has the option to see his previous calculations

## Technology

- PHP 8.1
- Symfony 6
- Twig
- PostgreSQL 14.1

## Instalacja

1. Clone repository
2. Open project, move to build folder and run docker

   ```bash
   cd build
   docker-compose build
   docker-compose up
   ```
3. After the containers start correctly, open the php console in a new console
   
   ```bash
   cd build
   docker-compose exec php bash
   ```
   
4. Run composer install in bash

   ```bash
   composer install
   ```

5. Push migration to database

   ```bash
   bin/console doctrine:migrations:migrate
   ```

6. Run fixtures

   ```bash
   bin/console doctrine:fixtures:load
   ```

The application is running on port 8080

   ```bash
   http://127.0.0.1:8080/
   ```

## Testing

To run all tests you need to run this in php bash  

   ```bash
   bin/phpunit
   ```