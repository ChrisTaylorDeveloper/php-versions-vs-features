# PHP Versions vs Features

https://cs.symfony.com  
https://github.com/squizlabs/PHP_CodeSniffer  
https://github.com/PHPCompatibility/PHPCompatibility

```
docker build -t php_check .
```

```
docker run -it --rm \
--name running_php_check \
-v "$PWD":/usr/src/myapp \
-w /usr/src/myapp \
php_check bash
```

```
cd php_coding_standards_fixer
run_checks.sh
```

```
cd squizlabs_php_codesniffer
run_checks.sh
```

```
php check-me/script.php
```
