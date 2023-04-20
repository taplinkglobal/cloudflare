.PHONY: all fix lint test

all: lint test

fix:
	php vendor/bin/php-cs-fixer fix

lint:
	php vendor/bin/php-cs-fixer fix --dry-run

analyze:
	 php vendor/bin/phpstan --memory-limit=1024M --error-format=github

test:
	php vendor/bin/phpunit --configuration phpunit.xml
