# Estructura del proyecto

El proyecto cuenta con la siguiente estructura:

<pre>
  ┌── app/                    Código fuente del proyecto
  │   ├── controllers/        Controladores de la aplicación
  │   └── models/             Modelos de datos
  ├── config/                 Archivos de configuración
  │   ├── config.php          Configuración principal del sistema
  │   └── database/           Archivos relacionados con la base de datos
  │       ├── migrations/     Migraciones de la base de datos
  │       └── database.php    Configuración de la base de datos
  ├── doc/                    Documentación (diagramas y manuales)
  ├── public/                 Archivos públicos
  │   ├── css/                Archivos CSS
  │   ├── font/               Fuentes del sistema
  │   ├── img/                Imágenes
  │   ├── js/                 Archivos javascripts
  │   ├── .htaccess           Archivo de control de acceso
  │   └── index.php           Archivo principal de la aplicación
  ├── resources/              Vistas y componentes del proyecto
  │   ├── components/         Componentes del sistema (plantillas)
  │   ├── sass/               Archivos SASS del proyecto
  │   └── views/              Vistas del proyecto
  ├── routes/                 Configuraciones relacionadas a las rutas
  │   ├── web.php             Archivo que contiene las rutas web
  │   └── router.php          Archivo enrutador
  ├── .env                    Variables de entorno
  ├── .env.example            Archivo de ejemplo para variables de entorno
  ├── .gitignore              Archivos ignorados por Git
  ├── CONTRIBUTING.md         Guía para colaboradores
  ├── LICENSE                 Licencia del proyecto
  └── README.md               Documentación general del proyecto
</pre>