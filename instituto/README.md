# Proyecto de instituto
Esta es una practica para el modulo de servidor
## Instalo breeze
para instalar ejecuto el comando
````Bash
composer requiere "laravel/breeze"
````

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