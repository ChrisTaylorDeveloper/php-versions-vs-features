#!/bin/bash
vendor/bin/phpcs -p \
../check-me \
--standard=PHPCompatibility --runtime-set testVersion 5.5
# --standard=Squiz
