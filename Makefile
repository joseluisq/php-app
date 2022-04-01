devel:
	php -S [::]:8088 -t public/
.PHONY: devel

devel-docker:
	docker-compose up
.PHONY: devel-docker
