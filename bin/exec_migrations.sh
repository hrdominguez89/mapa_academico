sleep 60
php /var/www/html/bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration
