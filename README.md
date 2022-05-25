# ProyectoAvanzadoIBARRA

## Idea
La idea del proyecto es una página web para una Asociación la cual va a tener inscriptos y los va a tener que gestionar. 

## Lado del usuario no registrado.

En el login tenemos un botón que nos redirecciona a la página de "Inscripción"
Ahí lo que podemos hacer es inscribirnos en caso de no haber registrado el documento antes. Aquí podemos ver el envio de formularios a una Base de Datos.  

Tenemos una barra de navegación especial para este tipo de "Usuarios" de la aplicación la cual consta de un botón para volver al "Login" y luego dos más uno para la página de inscripción antes mencionada y otro para ver la comisión de la asociación.

En la parte de la comisión actualmente vamos a tener 3 botones los cuales nos van a traer los mienbros actuales. 

La mayoría de la lógica de la DB se maneja a través de otra aplicación. La página Web solo muestra estos campos. 


## Lado del usuario registrado.

Una vez que validemos nuestro usuario y contraseña nos redirigiremos a una vista en donde estarán todos las personas que llenaron el formulario de inscripción y no fueron eliminadas. 
Aquí podrémos modificar algunos datos comunes (a trávez del botón "MODIFICAR") como email, telefono, carrera e institución, en este caso hacemos empleo la actualización de datos.

Luego hay en la navegación 2 botones mas, uno para hacer un logout y otro para ir a una página "Comentarios" la cual no esta disponible, esto es futuro requerimiento que fue pedido, pero desarrollarlo para el proyecto era más de lo mismo. 


## Que utilizamos en este proyecto:
- Programación orientada a objetos en vez de hacer estructurado.
- Patron MVC para organizar el código
- Para la conexión de base de datos usamos PDO
  - Updates
  - Selects
  - Inserts 
  - Delete (Podría haber usado pero preferí hacer un update en un estado activo, ya que no me gusta eliminar registros de la base de datos desde aplicación)



