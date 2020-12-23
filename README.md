Instalación:
Después de clonar el repositorio crear la base de datos local y crear el archivo .env de acuerdo a esta.
composer install
npm installl
php artisan migrate

Con el fin de cumplir con la prueba, se alimento la base de datos con 3 roles:
-admin
-user
-error

Para validar estos roles se crearon 3 usuarios cada uno con uno de estos roles:
user: admin@correo.co
password: 1234
role: admin

user: user1@correo.co
password: 1234
role: user

user: user2@correo.co
password: 1234
role: error

Al ingresar, mediante las funciones de validación de los roles del usuario, se visualizan comportamientos diferentes. Para el rol admin
se mostrara el botón configure, para el user este botón no aparecerá, y para el rol de error se retornara una vista distinta a la de los otros dos roles la cual indica error.

Al realizar el registro de usuarios estos inmediatamente quedaran registrados con el rol user.
