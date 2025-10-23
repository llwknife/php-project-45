install:
	composer install
brain-games:
	./bin/brain-games.php
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even.php
brain-calc:
	./bin/brain-calc.php
brain-gcd:
	./bin/brain-gsd.php
brain-progression:
	./bin/brain-progression.php
brain-prime:
	./bin/brain-prime.php