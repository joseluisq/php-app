devel:
	enve php -S [::]:8088 -t public/
.PHONY: devel

devel-docker:
	docker-compose up
.PHONY: devel-docker

sqlite3:
	sqlite3 database/todos.db < database/todos.sql
.PHONY: sqlite3
