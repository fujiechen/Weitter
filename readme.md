# Weitter
Twitter like app using PHP and Laravel framework

## Demo

http://whispering-atoll-74812.herokuapp.com/

## Installation 
- Clone the repo and run `composer install` once installed you can create `.env` by `cp .env.example .env` now add your db credential in it. You can use MySQL or PostgreSQL as your db.
- Now generate a key for your app using `php artisan key:generate`
- Then run the `php artisan db:seed` to seed the app with dummy data
- point the baseURL of axios http to your app url by editing it in `resources/assets/js/utils/http.js`, by default it set to `http://locahost:8000`
- If your url is localhost:8000 you can run the app by `php artisan serve` otherwise you need to install npm deps by running `npm install` after this you need to `npm run watch` to build the app browse.

## License  
[MIT license](http://opensource.org/licenses/MIT).