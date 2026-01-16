# 📚 School Management System

Sistema de gestión escolar para administrar alumnos, proyectos y usuarios con soporte multiidioma (Español e Inglés).

---

## 📋 Tabla de Contenidos

- [Descripción del Proyecto](#descripción-del-proyecto)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Requisitos Previos](#requisitos-previos)
- [Instalación](#instalación)
- [Configuración Inicial](#configuración-inicial)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Funcionalidades Principales](#funcionalidades-principales)
- [Uso del Sistema](#uso-del-sistema)
- [Sistema de Idiomas](#sistema-de-idiomas)
- [Base de Datos](#base-de-datos)
- [Autenticación](#autenticación)

---

## 📖 Descripción del Proyecto

**School Management System** es una aplicación web moderna para la gestión integral de instituciones educativas. Permite administrar información de alumnos, proyectos y usuarios de manera eficiente, con una interfaz intuitiva y soporte para múltiples idiomas.

### Características Principales:
- ✅ Gestión completa de alumnos (crear, leer, actualizar, eliminar)
- ✅ Sistema de autenticación seguro
- ✅ Soporte multiidioma (Español e Inglés)
- ✅ Interfaz responsive y moderna
- ✅ Dashboard intuitivo
- ✅ Validación de datos en servidor y cliente

---

## 🛠️ Tecnologías Utilizadas

### Backend
- **Laravel 11** - Framework PHP moderno y robusto
- **PHP 8.2+** - Lenguaje de programación
- **MySQL/MariaDB** - Base de datos relacional
- **Composer** - Gestor de dependencias PHP

### Frontend
- **Blade** - Motor de plantillas de Laravel
- **Tailwind CSS** - Framework CSS utilidad-first
- **DaisyUI** - Componentes pre-diseñados basados en Tailwind
- **Alpine.js** - Framework JavaScript reactivo ligero
- **Vite** - Bundler moderno y rápido

### Herramientas de Desarrollo
- **Laravel Breeze** - Scaffolding de autenticación
- **Pest** - Framework de testing
- **Git** - Control de versiones
- **Docker** (opcional) - Contenedorización

---

## 📦 Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- **PHP 8.2 o superior** - Lenguaje backend
- **Composer** - Gestor de dependencias PHP
- **Node.js 16+** - Runtime JavaScript
- **npm o yarn** - Gestor de paquetes Node
- **MySQL/MariaDB 5.7+** - Base de datos
- **Git** - Control de versiones

### Verificar instalaciones:
```bash
php --version
composer --version
node --version
npm --version
mysql --version
```

---

## 🚀 Instalación

### 1. Clonar el Repositorio
```bash
git clone https://github.com/tu-usuario/instituto.git
cd instituto
```

### 2. Instalar Dependencias PHP
```bash
composer install
```

### 3. Instalar Dependencias JavaScript
```bash
npm install
```

### 4. Configurar Archivo de Entorno
```bash
cp .env.example .env
```

Edita el archivo `.env` con tus credenciales:
```env
APP_NAME="School Management"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=instituto
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generar Clave de Aplicación
```bash
php artisan key:generate
```

### 6. Crear Base de Datos
```bash
mysql -u root -p
CREATE DATABASE instituto;
exit;
```

### 7. Ejecutar Migraciones
```bash
php artisan migrate
```

### 8. Ejecutar Seeders (Opcional - Datos de prueba)
```bash
php artisan db:seed
```

### 9. Compilar Assets
```bash
npm run dev
```

---

## ⚙️ Configuración Inicial

### Iniciar el Servidor de Desarrollo

En una terminal:
```bash
php artisan serve
```

En otra terminal:
```bash
npm run dev
```

La aplicación estará disponible en: `http://localhost:8000`

### Crear Usuario de Prueba
```bash
php artisan tinker
User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => Hash::make('password'),
]);
```

---

## 📁 Estructura del Proyecto

```
instituto/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AlumnoController.php      # Gestión de alumnos
│   │   │   ├── ProyectoController.php    # Gestión de proyectos
│   │   │   ├── LocaleController.php      # Cambio de idioma
│   │   │   └── ProfileController.php     # Perfil de usuario
│   │   ├── Middleware/
│   │   │   └── SetLocale.php             # Middleware para idioma
│   │   └── Requests/
│   │       ├── StoreAlumnoRequest.php    # Validación crear alumno
│   │       └── UpdateAlumnoRequest.php   # Validación actualizar alumno
│   ├── Models/
│   │   ├── Alumno.php                    # Modelo de Alumno
│   │   ├── Proyecto.php                  # Modelo de Proyecto
│   │   └── User.php                      # Modelo de Usuario
│   └── Providers/
│       └── AppServiceProvider.php        # Proveedor de aplicación
├── database/
│   ├── migrations/                       # Migraciones de BD
│   ├── seeders/                          # Seeders de datos
│   └── factories/                        # Factories para testing
├── resources/
│   ├── views/
│   │   ├── auth/                         # Vistas de autenticación
│   │   │   ├── login.blade.php          # Página de login
│   │   │   └── register.blade.php       # Página de registro
│   │   ├── alumnos/
│   │   │   ├── create.blade.php         # Crear alumno
│   │   │   ├── edit.blade.php           # Editar alumno
│   │   │   └── listado.blade.php        # Listado de alumnos
│   │   ├── components/
│   │   │   └── layouts/
│   │   │       ├── header.blade.php     # Encabezado
│   │   │       └── footer.blade.php     # Pie de página
│   │   ├── layouts/
│   │   │   ├── app.blade.php            # Layout principal
│   │   │   ├── guest.blade.php          # Layout para invitados
│   │   │   └── navigation.blade.php     # Navegación
│   │   ├── dashboard.blade.php          # Dashboard
│   │   └── main.blade.php               # Página principal
│   ├── lang/
│   │   ├── en/
│   │   │   └── messages.php             # Traducciones en inglés
│   │   └── es/
│   │       └── messages.php             # Traducciones en español
│   ├── css/
│   │   └── app.css                      # Estilos principales
│   └── js/
│       ├── app.js                       # JavaScript principal
│       └── bootstrap.js                 # Bootstrap de la app
├── routes/
│   ├── web.php                          # Rutas web
│   ├── auth.php                         # Rutas de autenticación
│   └── console.php                      # Rutas de consola
├── config/
│   ├── app.php                          # Configuración de la app
│   ├── auth.php                         # Configuración de autenticación
│   ├── database.php                     # Configuración de BD
│   └── ... (otras configuraciones)
├── public/
│   ├── images/
│   │   └── logo-escuela.png             # Logo de la escuela
│   └── index.php                        # Punto de entrada
├── .env                                 # Variables de entorno
├── .env.example                         # Ejemplo de variables
├── composer.json                        # Dependencias PHP
├── package.json                         # Dependencias JavaScript
├── vite.config.js                       # Configuración de Vite
└── README.md                            # Este archivo
```

---

## ✨ Funcionalidades Principales

### 1. Gestión de Alumnos
- **Listar**: Ver todos los alumnos en una tabla
- **Crear**: Añadir nuevos alumnos con validación
- **Editar**: Modificar información de alumnos existentes
- **Eliminar**: Borrar alumnos con confirmación
- **Campos**: Nombre, Apellidos, Email, Fecha de Nacimiento

### 2. Sistema de Autenticación
- Registro de nuevos usuarios
- Login seguro
- Recuperación de contraseña
- Perfil de usuario
- Logout

### 3. Sistema Multiidioma
- Soporte para Español e Inglés
- Cambio dinámico de idioma
- Persistencia en sesión
- Traducciones completas

### 4. Dashboard
- Vista personalizada para usuarios autenticados
- Información resumida
- Acceso rápido a funciones

### 5. Interfaz Responsiva
- Diseño mobile-first
- Compatible con todos los dispositivos
- Navegación adaptable

---

## 🎯 Uso del Sistema

### Acceder al Sistema
1. Abre `http://localhost:8000`
2. Haz clic en **Register** para crear una cuenta
3. Completa el formulario y confirma
4. Inicia sesión con tus credenciales

### Gestionar Alumnos
1. Una vez autenticado, haz clic en **Alumnos**
2. **Ver listado**: Se mostrarán todos los alumnos
3. **Agregar alumno**: Completa el formulario y haz clic en **Create**
4. **Editar alumno**: Haz clic en el botón **Editar**
5. **Eliminar alumno**: Haz clic en **Eliminar** (requiere confirmación)

### Cambiar Idioma
- En el header, haz clic en el botón **English** o **Español**
- El idioma se guarda en la sesión
- La página se refresca automáticamente

---

## 🌐 Sistema de Idiomas

### Archivos de Traducción
```
resources/lang/
├── en/messages.php          # Traducciones al inglés
└── es/messages.php          # Traducciones al español
```

### Uso en Vistas
```blade
{{ __('messages.welcome') }}        <!-- Obtiene la traducción -->
{{ __('messages.add_student') }}    <!-- Mensaje específico -->
```

### Agregar Nuevas Traducciones
1. Abre `resources/lang/es/messages.php` y `en/messages.php`
2. Agrega la clave y sus traducciones:
```php
'nueva_clave' => 'Valor en idioma',
```

3. Usa en la vista:
```blade
{{ __('messages.nueva_clave') }}
```

---

## 🗄️ Base de Datos

### Tablas Principales

#### users
- id (PK)
- name
- email (UNIQUE)
- email_verified_at
- password
- remember_token
- timestamps

#### alumnos
- id (PK)
- nombre
- apellidos
- email (UNIQUE)
- fecha_nacimiento
- timestamps

#### proyectos
- id (PK)
- nombre
- descripción
- timestamps

### Relaciones
- Un usuario puede tener múltiples alumnos
- Un alumno puede estar en múltiples proyectos
- Un proyecto puede tener múltiples alumnos

---

## 🔐 Autenticación

### Proveedor de Autenticación
- **Driver**: session (sesiones de PHP)
- **Guard**: web
- **Provider**: users

### Funciones Disponibles
```php
auth()->user()              // Usuario autenticado
auth()->check()             // ¿Está autenticado?
auth()->guard('web')        // Guard específico
Auth::user()->name          // Datos del usuario
```

### Directivas de Blade
```blade
@auth
    <!-- Contenido para usuarios autenticados -->
@endauth

@guest
    <!-- Contenido para invitados -->
@endguest
```

---

## 🎨 Personalización

### Cambiar Colores
- **Header**: Edita `bg-blue-600` en `header.blade.php`
- **Botones**: Modifica clases de Tailwind en componentes
- **Tema**: Personaliza en `resources/css/app.css`

### Cambiar Logo
1. Reemplaza `/public/images/logo-escuela.png`
2. Actualiza la referencia en `header.blade.php`

### Agregar Campos a Alumnos
1. Crea una migración: `php artisan make:migration add_campos_to_alumnos`
2. Define los campos
3. Ejecuta: `php artisan migrate`
4. Actualiza el modelo `Alumno.php` (fillable)
5. Modifica vistas de crear/editar

---

## 🐛 Troubleshooting

### Error: "Class not found"
```bash
composer dump-autoload
```

### Error: "Base de datos no encontrada"
```bash
php artisan migrate:fresh --seed
```

### Assets no se cargan
```bash
npm run build
php artisan cache:clear
```

### Problemas de permisos
```bash
chmod -R 775 storage bootstrap/cache
```

---

## 📚 Recursos Útiles

- [Documentación de Laravel](https://laravel.com/docs)
- [Documentación de Tailwind CSS](https://tailwindcss.com/docs)
- [Documentación de Blade](https://laravel.com/docs/blade)
- [DaisyUI Components](https://daisyui.com/)
- [Alpine.js Documentation](https://alpinejs.dev/)

---

## 📝 Licencia

Este proyecto está bajo licencia MIT. Ver archivo `LICENSE` para más detalles.

---

## 👥 Contribuciones

Las contribuciones son bienvenidas. Por favor:
1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

---

## 📧 Contacto

Para preguntas o sugerencias, contacta a través de:
- Email: contacto@ejemplo.com
- Issues: GitHub Issues

---

## 🎓 Autor

Desarrollado con ❤️ para la gestión educativa moderna.

**Versión**: 1.0.0  
**Última actualización**: Enero 2026

## Instalo Daisy
Para la interfaz
````Bash
npm i -D daisyui@latest
````

## Instalo Tailwind
Para los estilos
````Bash
npm install -D tailwindcss@latest
````

## Instalo Concurrent
Para ejecutar varios comandos a la vez
````Bash
npm install concurrenly
````

## Uso currently para crear un script local
Ejecuta docker Compose para levantar contenedores y ejecuta el script dev para vite
````Bash
"local": "docker compose up -d && concurrently \"npm run dev\" \"php artisan serve\" && concurrently \"php artisan serve --port=8003\" "
````