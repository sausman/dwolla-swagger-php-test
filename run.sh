#!/bin/bash
set -e

exec docker run -it --rm --name dwolla-swagger-php-test \
  -v "${PWD}":/usr/src/myapp \
  -w /usr/src/myapp \
  -e DWOLLA_TOKEN="${1}" \
  -e DWOLLA_ENV="${2}" \
  php:7.0.32-cli \
  php script.php
