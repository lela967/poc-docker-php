# poc-docker-php

## Lancement

```bash
docker-compose up
docker exec -it poc-docker-php_php bash
service php7.4-fpm start
```



## Install symfony

```bash
docker exec -it poc-docker-php_php bash
cd /var/www/html/php
composer create-project symfony/skeleton symfony
cd symfony
composer require symfony/webapp-pack
composer require symfony/orm-pack
composer require symfony/mailer
```

php bin/console doctrine:database:create
php bin/console make:entity
php bin/console make:migration
php bin/console doctrine:migrations:migrate

php bin/console make:controller ProductController
