DIR = laradock

infra/raise:
	@echo "Starting infra"
	@cd $(DIR) && docker-compose up -d apache2 phpmyadmin

infra/down:
	@echo "Stopping infra"
	@cd $(DIR) && docker-compose down

infra/bash:
	@echo "Starting bash"
	@cd $(DIR) && docker-compose exec workspace bash

infra/logs:
	@echo "Showing logs"
	@cd $(DIR) && docker-compose logs -f

infra/debug:
	@echo "Starting debug"
	@tail -f ./wp-content/debug.log