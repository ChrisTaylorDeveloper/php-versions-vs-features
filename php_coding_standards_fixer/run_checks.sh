#!/bin/bash
vendor/bin/php-cs-fixer fix \
--config=.php-cs-fixer.dist.php \
-vvv --dry-run --using-cache=no
