## Para descargar el proyecto en su maquina local

- Descargar git de esta pagina https://git-scm.com
- Copie este link en git bash https://github.com/blueblazerchrist/prueba-amazon.git y presione enter

## Acerca del proyecto

este proyecto esta creado con laravel 11 el dia 26-07-2024, para ejecutar el proyecto siga los pasos

- Descargar el repositorio en su maquina local
- dentro del direcotorio del proyecto debe ejecutar composer install si no lo tiene descarguelo he instale desde esta pagina https://getcomposer.org/ 
- Debe tener un gestor de base de datos instalado en su equipo si no lo tiene instale pgsql 
- Cree una base de datos en blanco
- Copie el archivo .env.example y cambie el nombre a .env
- Cambie o añada los valores de nombre de base de datos, nombre de usuario, password y host
- Si usa un motor distino al predeterminado cambielo por el que tenga instalado puede ser mysql pgsql sql server
- Ejecute migraciones con el comando php artisan migrate en el directorio del proyecto
- La vista del registro esta en http://su-host/register
- Debe cambiar el dominio en el formulario registro para consumir la api con ajax esta resources/views/users/register.blade
- en el caso que no tenga un servidor web tipo nginx o apache puede ejecutar el proyecto con el comando php artisan serve ejecutado en la raiz del proyecto

## Otras aclaraciones

- El proyecto es demaciado corto para implementar bueas practicas en proyectos mas grandes podremos hacer la implementacion adecuada
