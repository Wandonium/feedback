run:
	rm -rf mysqldata
	mkdir mysqldata
	docker-compose build
	docker-compose up -d