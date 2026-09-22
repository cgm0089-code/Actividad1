# LAMP con Docker Compose

Entorno de desarrollo con nginx + PHP 8.3 (php-fpm) + MySQL 8, cada uno en su propio contenedor, conectados mediante Docker Compose.

## Servicios

- **web**: nginx, sirve en el puerto 8080 y reenvia peticiones .php a php-fpm.
- **php**: PHP 8.3-fpm con la extension pdo_mysql instalada.
- **db**: MySQL 8.0, con base de datos `appdb` creada automaticamente.

## Como levantarlo

```bash
docker compose up -d
```

Luego abre http://localhost:8080

## Resultado

![captura](captura.png)