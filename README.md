```bash
git clone https://github.com/Aney44/test_mgg.git
chmod -R 777 test_mgg
cd test_mgg
composer install
```
добавить в AppKernel.php
new Nelmio\ApiDocBundle\NelmioApiDocBundle(),

#Создадим базу
```bash
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load
```
# создадим пользователя для входа в приложение
```bash
php app/console fos:user:create admin admin@email password
php app/console fos:user:promote admin ROLE_API
```

#стартуем сервер
```bash
php app/console server:run
http://127.0.0.1:8000/
```