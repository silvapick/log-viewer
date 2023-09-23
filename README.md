# log-viewer
Visor de logs de Laravel

1- Compilar el docker compose e iniciar contenedores

```sh
docker-compose up --build
```

2- Descargar dependencias del composer (quedan local y en el contenedor)

```sh
docker-compose exec logs-viewer-app composer install
```

3- Crear en enlace simbolico de storage en public

```sh
docker-compose exec app_php php artisan storage:link
```

### Datos conexión base de datos
```
SERVER HOST = localhost
PORT        = 3310
DATABASE    = logs_viewer
USERNAME    = root
PASSWORD    = abc123
```

### Se ejecuta por el puerto 8010
```
http://localhost:8010
```
