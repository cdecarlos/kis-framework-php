up:
	cd docker; docker compose up -d
down:
	cd docker; docker compose down
composer-install:
	docker run --rm --interactive --tty --volume ./:/app composer install
