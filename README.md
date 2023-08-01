## To run the local dev environment:

- Copy .env.example: `cp .env.example .env`
  - Install php dependencies: `composer install`
  - Setup app key: `php artisan key:generate`
  - Migrate database: `php artisan migrate` 
  - Install javascript dependencies: `npm install`
  - Build Frontend: `npm run dev`
- Visit: `http://localhost:8000`
