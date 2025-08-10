# **Backend FashionMode**

Este proyecto es el backend del sistema **FashionMode**, desarrollado con **Laravel v12** y **PHP 8.2**.  
Proporciona una API REST para gestionar productos, categorías y proveedores, conectada a una base de datos MySQL.

---

## **Requisitos previos**
Antes de comenzar, asegúrate de tener instalado:
- **PHP 8.2** o superior
- **Composer** (gestor de dependencias de PHP)
- **MySQL** (incluido en XAMPP) o Docker para la base de datos
- **XAMPP** (opcional, si prefieres usar un entorno local tradicional)
- **Git**

---

## **Instalación del proyecto**

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/ospinaestefania86/Backend_FashionMode.git
   cd Backend_FashionMode
   ```

2. **Instalar dependencias**
   ```bash
   composer install
   ```

3. **Configurar el archivo `.env`**
   - Copia el archivo `.env.example` a `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configura la conexión a la base de datos MySQL:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=fashionmode
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Generar la clave de la aplicación**
   ```bash
   php artisan key:generate
   ```

---

## **Base de datos y migraciones**

1. **Ejecutar migraciones**
   ```bash
   php artisan migrate
   ```

2. **Cargar datos de prueba con seeders**
   ```bash
   php artisan db:seed
   ```

Esto creará las tablas necesarias y llenará la base de datos con información inicial.

---

## **Ejecución del servidor de desarrollo**

Para iniciar el servidor local de Laravel:
```bash
php artisan serve
```
Por defecto, estará disponible en:
[http://localhost:8000](http://localhost:8000)

---

## **Uso con XAMPP**
Si prefieres trabajar con XAMPP:
- Asegúrate de que **Apache** y **MySQL** estén en ejecución.
- Crea la base de datos `fashionmode` desde **phpMyAdmin** antes de correr las migraciones.

---

## **Uso con Docker (opcional)**
Si prefieres usar Docker:
1. Instala Docker y Docker Compose.
2. Configura un contenedor MySQL con:
   ```bash
   docker run --name mysql-fashionmode -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=fashionmode -p 3306:3306 -d mysql:8.0
   ```
3. Ajusta la configuración en `.env` para apuntar al contenedor Docker.

---

## **Pruebas con Postman**
Puedes probar los endpoints del backend utilizando Postman:
- `GET /api/productos` → Listar productos
- `POST /api/productos` → Crear producto
- `GET /api/productos/{id}` → Ver producto
- `PUT /api/productos/{id}` → Actualizar producto
- `DELETE /api/productos/{id}` → Eliminar producto

- `GET /api/categorias` → Listar categorias
- `POST /api/categorias` → Crear categorias
- `GET /api/categorias/{id}` → Ver categorias
- `PUT /api/categorias/{id}` → Actualizar categorias
- `DELETE /api/categorias/{id}` → Eliminar categorias

- `GET /api/proveedores` → Listar proveedores
- `POST /api/proveedores` → Crear proveedores
- `GET /api/proveedores/{id}` → Ver proveedores
- `PUT /api/proveedores/{id}` → Actualizar proveedores
- `DELETE /api/proveedores/{id}` → Eliminar proveedores

---

## **Recursos adicionales**
- [Documentación oficial de Laravel](https://laravel.com/docs)
- [Documentación de Composer](https://getcomposer.org/doc/)

