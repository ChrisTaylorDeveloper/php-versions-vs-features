#!/bin/bash
vendor/bin/php-cs-fixer \
fix ../check-me \
-vvv --dry-run --using-cache=no
