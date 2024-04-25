# pruebaTecnica
Prueba Tecnica

## Instrucciones de instalación

Sigue estos pasos para instalar y configurar el sistema:

1. Clona el repositorio en tu máquina local:

git clone https://github.com/tu-usuario/tu-repositorio.git

2. Instala las dependencias del proyecto:
composer install

3. Copia el archivo de configuración de ejemplo y configura tu entorno:
cp .env.example .env

4. Abre el archivo .env en tu editor de texto y configura los detalles de tu base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_de_datos
DB_USERNAME=nombre_usuario
DB_PASSWORD=contraseña

5. Genera una nueva clave de aplicación:
php artisan key:generate

7. Ejecuta las migraciones para crear las tablas de la base de datos:
php artisan migrate

8. Ejecuta los seeders para insertar datos de prueba:
php artisan db:seed

9. Inicia el servidor de desarrollo:
php artisan serve

10. Abre tu navegador y visita http://localhost:8000 para ver la aplicación.
usuario: admin@example.com
Pass: Admin*123  

tambien puedes ver una demo como funciona la aplicacion desde pruebatecnica.sysprossv.com
usuario: admin@sysprossv.com
Pass: Admin*123
