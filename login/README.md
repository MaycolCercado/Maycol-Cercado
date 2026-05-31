# Sistema Login PHP MVC

## Descripción

Proyecto básico de inicio de sesión desarrollado en PHP utilizando el patrón MVC (Modelo - Vista - Controlador), conexión a base de datos MySQL y estilos CSS simples.

El sistema permite:

* Conectarse a una base de datos MySQL
* Verificar usuario y contraseña
* Mostrar mensaje de bienvenida
* Utilizar formularios HTML
* Separar lógica usando MVC

---

# Tecnologías utilizadas

* PHP
* MySQL
* HTML
* CSS
* MVC

---

# Base de datos

## Crear base de datos y tabla

```sql
CREATE DATABASE IF NOT EXISTS base_datos;

USE base_datos;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    contrasena VARCHAR(255)
);

INSERT INTO usuarios(username, contrasena)
VALUES ('admin', '12345');
```

---

# Configuración de conexión

Editar el archivo de conexión y colocar los datos correctos:

```php
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');
define('DB_PORT', 0000);
```

---

# Estructura del proyecto

```bash
proyecto/
│
├── conexion/
│   └── conexion.php
│
├── controlador/
│   └── verificacion.php
│
├── modelo/
│   └── contrasena.php
│
├── vista/
│   ├── index.php
│   └── style.css
│
└── README.md
```


# Funcionamiento

1. El usuario ingresa usuario y contraseña en el formulario.
2. El controlador recibe los datos.
3. El modelo consulta la base de datos.
4. Se verifica si las credenciales son correctas.
5. Se muestra mensaje de éxito o error.

---

# Usuario de prueba

```txt
Usuario: admin
Contraseña: 12345
```

---

# Características

* Arquitectura MVC
* Conexión MySQL con mysqli
* Validación básica
* Formularios HTML simples
* Estilos CSS básicos
* Código organizado

---

# Ejecución

1. Iniciar Apache y MySQL en XAMPP.
2. Importar la base de datos.
3. Colocar el proyecto en la carpeta `htdocs`.
4. Abrir en el navegador:

```txt
http://localhost/proyecto/
```

---

# Nota

Este proyecto es educativo y utiliza validación básica de contraseñas sin cifrado.
