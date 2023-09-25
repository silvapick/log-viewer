# log-viewer
Visor de logs de Laravel

1. Compilar el docker compose e iniciar contenedores
```sh
docker-compose up --build
```
2. Descargar dependencias del composer
```sh
docker-compose exec logs-viewer-app composer install
```
3. Crear archivo .env
```sh
docker-compose exec logs-viewer-app cp .env.example .env
```
4. Crear en enlace simbólico de storage en public
```sh
docker-compose exec logs-viewer-app artisan storage:link
```
5. Generar llave
```sh
docker-compose exec logs-viewer-app php artisan key:generate
```
6. Copiar los archivos de logs en la carpeta `storage/logs`

7. Se ejecuta por el puerto 8010
   - [http://localhost:8010/log-viewer](http://localhost:8010/log-viewer)
