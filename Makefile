setup:
	@make build
	@make up
	@make composer-update

build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
down:
	docker-compose down
composer-update:
	docker exec php-docker bash -c "composer update"