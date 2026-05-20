# Puerta de Paz en la Web

**Grupo Teórico:** G03T

## Integrantes
- Christian Javier Rosales Palacios - RP241102
- Jefferson Ulises Martínez López - ML250841
- Rene Osmin Aparicio Ruiz - AR240329
- Fernando José Cornejo Solano - CS250072

---
# Instrucciones para ejecutar el proyecto

## 1. Clonar el repositorio

```bash
git clone https://github.com/ReneAparicio/Puerta-La-paz.git
cd Puerta-La-paz
```

## 2. Instalar dependencias

```bash
composer install
```

## 3. Copiar y configurar el archivo `.env`

```bash
cp .env.example .env
```

Editar el archivo `.env` con los datos de la base de datos:

```env
APP_KEY=
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=puerta_paz
DB_USERNAME=root
DB_PASSWORD=
```

## 4. Generar la clave de la aplicación

```bash
php artisan key:generate
```

## 5. Crear la base de datos

1. Abrir XAMPP y encender Apache y MySQL.
2. Ir a `http://localhost/phpmyadmin`
3. Crear una base de datos llamada `puerta_paz`

## 6. Ejecutar las migraciones

```bash
php artisan migrate
```

## 7. Crear el enlace para las imágenes

```bash
php artisan storage:link
```

## 8. Ejecutar el servidor

```bash
php artisan serve
```

## 9. Abrir el proyecto en el navegador

```text
http://localhost:8000
```

## 10. Acceder al panel administrativo

```text
http://localhost:8000/admin/login
```

### Credenciales de acceso

- **Usuario:** `admin@puertadepaz.com`
- **Contraseña:** `admin123`


## ENLACES

- **Trello:** [https://trello.com/invite/b/69b1ffb73b86159b811ca924/ATTI03cefcf90aebb757e5a29969adbede8e805BA134/proyecto-de-catedra-dss](https://trello.com/invite/b/69b1ffb73b86159b811ca924/ATTI03cefcf90aebb757e5a29969adbede8e805BA134/proyecto-de-catedra-dss)

- **Mockups (Figma):** [https://www.figma.com/site/0kWyauz4HtoULQD38nrCKF/Untitled?node-id=0-6&t=PVXzmPk82gE9FjNr-1](https://www.figma.com/site/0kWyauz4HtoULQD38nrCKF/Untitled?node-id=0-6&t=PVXzmPk82gE9FjNr-1)

---

## Licencia
<a href="https://github.com/ReneAparicio/Puerta-La-paz.git">Puerta de Paz en la Web</a> © 2026 by <a href="https://github.com/ReneAparicio">UDB DON BOSCO</a> is licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a><br>

<img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" alt="" style="max-width: 1em;max-height:1em;margin-left: .2em;"><img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" alt="" style="max-width: 1em;max-height:1em;margin-left: .2em;"><img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg" alt="" style="max-width: 1em;max-height:1em;margin-left: .2em;"><img src="https://mirrors.creativecommons.org/presskit/icons/sa.svg" alt="" style="max-width: 1em;max-height:1em;margin-left: .2em;">
