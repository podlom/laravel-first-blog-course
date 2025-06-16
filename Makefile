up:
	docker-compose up -d --build

down:
	docker-compose down

restart:
	docker-compose down && docker-compose up -d --build

bash:
	docker exec -it laravel_app bash

artisan:
	docker exec -it laravel_app php artisan

composer:
	docker exec -it laravel_app composer

migrate:
	docker exec -it laravel_app php artisan migrate

seed:
	docker exec -it laravel_app php artisan db:seed
