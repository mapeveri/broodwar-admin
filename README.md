broodwar-admin
==============

Sistema para controlar las reparaciones de computadoras de los clientes del Ciber BroodWar, utilizando 
Symfony 3 como framework y el bundle EasyAdmin.

Instalación
-----------

1. Instalar las dependencias del archivo composer.json

    composer install

2. Configurar la base de datos en el archivo app/config/parameters.yml

3. Ejecutar las migraciones

    php bin/console doctrine:schema:update --force

5. Correr los assets de EasyAdmin

    php bin/console assets:install --symlink

6. Correr el servidor

    php bin/console server:run