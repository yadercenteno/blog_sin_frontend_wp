# Obtener datos (Loop) de mi blog en WordPress 4.4 sin usar el front-end de WordPress

Código PHP para obtener las entradas de blogs y hacer comentarios en WordPress 4.4 haciendo uso de los Loops de WordPress y la API (solo para agregar comentarios), sin tener que usar el Front-end que da WordPress. Esta idea surge de la necesidad de usar los estilos y Javascript de nuestro sitio web (suponiendo que nuestro sitio web NO usa WordPress), en cualquier página PHP (sin necesidad de frameworks) y podamos listar/ver post de nuestro blog WordPress (sin usar su front-end) para que el Blog se integre completamente a nuestro sitio web y sus estilos.

Primero hay que cargar la Base de Datos (BD) a MySQL, La BD se llama "mi_blog" y el archivo SQL se llama "mi_blog.sql", que podrán encontrar en la raíz de este directorio.

Las entradas del blog serán visibles en http://tuservidor.com/blog_sin_frontend_wp/blog, donde tuservidor.com debe ser tu website.   Ahí será el lugar donde los usuarios podrán leer y comentar tus blogs.

WordPress está instalado en la carpeta "blogbase", el cual siempre deberán usar (como Backend) para escribir nuevas entradas, agregar usuarios, aprobar comentarios, etc. En este caso (uso de Backend), deberán acceder a la página de autenticación: http://tuservidor.com/blog_sin_frontend_wp/blogbase/wp-admin, donde tuservidor.com debe ser tu website.  Los datos del usuario Administrador del WordPress son (recuerden cambiarlos ya estándo logueados en el backend de WordPress): 
Usuario:  admin
Clave:    admin

TODAVIA PENDIENTE:
* Las imagenes que se tienen alguna propiedad de que el texto las rodee, se muestran bien, pero el texto NO las rodea.  Debe haber algúna propiedad CSS que permita esto, pero yo no lo he encontrado.
