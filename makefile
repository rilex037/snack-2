APP_CONTAINER=docker exec docker_snack-php_1 bash -c

local:
	cd .docker && docker-compose up -d --build

# test locally
test:
	@$(APP_CONTAINER) "XDEBUG_MODE=coverage vendor/bin/phpunit tests --coverage-text "

code_coverage_report:
	$(APP_CONTAINER) "XDEBUG_MODE=coverage vendor/phpunit/phpunit/phpunit --coverage-html ./storage/build/coverage-report --testsuite Unit --stop-on-failure;"
