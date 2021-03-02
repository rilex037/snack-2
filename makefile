.PHONY: startup install test
APP_CONTAINER=docker exec docker_snack-php_1 bash -c

startup:
	cd .docker && docker-compose up -d --build

install:
	$(APP_CONTAINER) "composer install"

down:
	cd .docker && docker-compose down

# Unit Tests
test:
	@echo "\033[1mRunning unit tests\033[0m"
	@$(APP_CONTAINER) "XDEBUG_MODE=coverage vendor/bin/phpunit tests --coverage-text"

code_coverage_report:
	$(APP_CONTAINER) "XDEBUG_MODE=coverage vendor/phpunit/phpunit/phpunit --coverage-html ./storage/build/coverage-report --testsuite Unit --stop-on-failure;"

fix_files_owners_and_permissions:
	@echo "Fixing files owners and permissions..."
	@sudo find ./source/storage -type d -exec chmod 777 {} \;
	@echo "Fixing files owners and permissions - OK"