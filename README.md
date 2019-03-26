# Crud Básico con Laravel(TDD)

##Pruebas Unitarias(TDD)
Para ejecutar las pruebas unitarias primero deben establecer en el archivo .env a la base de datos que desean conectar, una vez creada, deben crear otra base de datos con el mismo nombre(es a su gusto) pero al final puede poner un sufijo 'test'(esto es solo referencia con que base de datos haran las pruebas), luego deben ir al archivo phpunit.xml y dentro de etiqueas php poner la siguiente linea <env name="DB_DATABASE" value="mibasededatos_test"/> le estamos diciendo a phpunit que los test lo haremos en otra Base de Datos y no con la que estaremos trabajando. Por ultimo, para ejecutar las pruebas unitarias, deben correr en las consola lo siguiente vendor/bin/phpunit
###IMPORTANTE: A pesar de que escribí varias pruebas, no fueron suficientes pruebas 'como tal', he hecho pruebas básicas, o las que más pienso yo que eran importantes.

##Migracion y Seeder
Primero deben correr las migraciones con el comando php artisan migrate, luego deben correr el seeder con el comando php artisan db:seed, un tip es que pueden correr estos 2 comandos en una sola linea que es php artisan migrate --seed

todo el conocimiento aplicado este en este crud es aprendido desde styde.net, por cierto, el curso de Laravel Básico es totalmente gratis!

