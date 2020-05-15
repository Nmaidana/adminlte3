Instalacion del Paquete Adminlte3

<b>Nueva Instalacion de laravel</b>

1º Paso<br>
<b> Instalar de laravel </b> <br>
- composer create-project --prefer-dist laravel/laravel blog<br>

2º paso<br>
<b>Instalar de Auth.</b><br>
- composer require laravel/ui
- php artisan ui vue --auth<br>

3º Paso<br>
<b>Instalar el paquete Wolfsyncro/Adminlte3.</b><br>
- composer require wolfsyncro/adminlte3<br>

4º Paso<br>
<b>Publicar los archivos.</b><br>
- php artisan vendor:publish --provider="wolfsyncro\adminlte3\Adminlte3ServiceProvider" --force<br>

<b>Usamos --force para sobreescribir algunos archivos.</b><br>

Archivos que se sobreescriben<br>
- welcome.blade.php
- home.blade.php
- login.blade.php
- register.blade.php
- reset.blade.php<br>

Si ya tiene instalado laravel Paso 3 y 4.