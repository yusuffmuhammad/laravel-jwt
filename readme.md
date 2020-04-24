## Installation

```sh
$ git clone https://github.com/muhammaddyzf/laravel-jwt.git
$ cd laravel-jwt
$ cp .env.example .env
$ docker-compose up -d
$ docker exec -it laravel_jwt bash
$ php artisan key:generate
$ php artisan jwt:secret
$ php artisan migrate
```
