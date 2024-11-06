# Proyecto 3: Gestión de Contactos

## Descripción:
Este proyecto permite gestionar una lista de contactos, permitiendo agregar, editar y eliminar contactos, junto con sus detalles como nombre, email y teléfono. Los contactos se almacenan en una base de datos.

## Tecnologías Usadas:
  - PHP 8.0+
  - illuminate/database: Eloquent ORM para interactuar con la base de datos.
  - PHPUnit: Framework de pruebas unitarias.
  - monolog/monolog: Librería para registro de logs.

## Requisitos:
  - PHP 8.0 o superior.
  - Composer.
  - Base de datos MySQL o SQLite (configurable).

## Instalación:
  1. Clona el repositorio:

     ```bash
     git clone https://github.com/lucasaacosta1995/php-crud-contacts.git
     cd php-crud-contacts
     ```

  2. Instala las dependencias con Composer:

     ```bash
     composer install
     ```

  3. Configura la base de datos en el archivo `config/database.php`.

  4. Ejecuta el servidor PHP para el entorno de desarrollo:

     ```bash
     php -S localhost:8000 -t public
     ```

## Estructura del Proyecto:

```bash
.
├── src/
│   ├── Controller/
│   │   └── ContactController.php
│   ├── Model/
│   │   └── Contact.php
│   ├── Service/
│   │   └── ContactService.php
├── tests/
│   └── ContactTest.php
├── public/
│   └── index.php
└── config/
    └── database.php
```

## Descripción de Directorios y Archivos:
    - /src: Contiene las clases que implementan la lógica de gestión de contactos.
    - /tests: Contiene las pruebas unitarias para validar la creación y obtención de contactos.
    - /public: Entrada pública de la aplicación.
    - /config: Configuración de la base de datos y otras variables de entorno.

## Funcionalidades:
    - Agregar, editar y eliminar contactos.
    - Almacenamiento de contactos en base de datos.
    - Registro de logs.

## Configuración:
    - Configura tu entorno:
        - Asegúrate de tener configurada la base de datos en el archivo config/database.php.
        - Crea una base de datos y tablas necesarias.

## Ejecución de Pruebas:
```bash
./vendor/bin/phpunit --testdox
```