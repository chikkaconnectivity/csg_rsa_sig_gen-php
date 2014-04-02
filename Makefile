default:
	@echo "Nothing to make. Try 'make test' instead"

test:
	phpunit test/RSATest

install:
	@echo "NOTE: This project is not installable; copy or use this in your code instead. For more information, please see README.md"

.PHONY: default test clean install

