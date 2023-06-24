#!/bin/bash
vendor/bin/phpcs -p \
../check-me \
--standard=PHPCompatibility --runtime-set testVersion 7.4
# --standard=Squiz
