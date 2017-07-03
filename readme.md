# Realtime Chat with Laravel 5.4, VueJS, and Pusher

Followed [this tutorial](https://jplhomer.org/2017/01/building-realtime-chat-app-laravel-5-4-vuejs/) to make this.
Original [author's github](https://github.com/jplhomer/laravel-realtime-chat-demo)

## Runs Under
1. Laravel 5.4
1. Vue 2.1.10

## Development

1. Clone or fork this repository
1. Run `composer install`
1. Run `php artisan key:generate`
1. Fill out relevant items in your `.env` file, including:

    ```
    DB_CONNECTION
    DB_DATABASE
    DB_USERNAME
    DB_PASSWORD
    PUSHER_APP_ID
    PUSHER_KEY
    PUSHER_SECRET
    PUSHER_CLUSTER
    ```

1. Edit in `resources/assets/bootstrap.js`:

    ```
    key
    cluster
    ```

1. Run `npm i`
1. Build assets with `npm run dev`
1. Use `php artisan serve` or another method to view the app in the browser