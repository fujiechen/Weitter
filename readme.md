# Weitter
Twitter like app using PHP and Laravel framework

## App Screenshots
<img src="https://user-images.githubusercontent.com/18447535/36930096-e6c756b6-1e5f-11e8-88ef-21b57ebb5e7c.png" width="600"/>
<img src="https://user-images.githubusercontent.com/18447535/36930097-e6d8ca18-1e5f-11e8-8c3e-cbc9f358fa03.png" width="600"/>
<img src="https://user-images.githubusercontent.com/18447535/36930098-e6e8ac12-1e5f-11e8-956e-539bb85c69d0.png" width="600"/>
<img src="https://user-images.githubusercontent.com/18447535/36930099-e6f7b2d4-1e5f-11e8-8c32-d0f69d537561.png" width="600"/>
<img src="https://user-images.githubusercontent.com/18447535/36930100-e70bc7f6-1e5f-11e8-836f-e6ea3520bd8b.png" width="600"/>
<img src="https://user-images.githubusercontent.com/18447535/36930095-e6b7cd86-1e5f-11e8-84a7-f3c51635778c.png" width="600"/>
<img src="https://user-images.githubusercontent.com/18447535/36930094-e6a2d1b0-1e5f-11e8-8a70-1b4940debab8.png" width="600"/>
<img src="https://user-images.githubusercontent.com/18447535/36930101-e727dff4-1e5f-11e8-950c-9f307c7fb0d0.png" width="600"/>

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
