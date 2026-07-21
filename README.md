#  Act4. Actividad 4: API REST con Laravel y Autenticación con Sanctum

### TECNOLÓGICO NACIONAL DE MÉXICO/
### INTITUTO TECNOLÓGICO DE OAXACA

#### Carrera: Ingeniería en Sistemas Computacionales
#### Estudiante: Macuixtle Gaytán Miguel Angel
#### Materia: Programación Web
#### Docente: Martinez Nieto Adelina
#### Tema: 4
#### Actividad 4: API REST con Laravel y Autenticación con Sanctum
#### Fecha: 20/07/2026

## Descripción del Proyecto
Elaboracion de una API de vehiculos, en el que describe la marca, modelo, año de salida, color y precio, de igual forma necesitaras un usuario para poder hacer las consultas.

## Tecnologías Principales
* PHP 
* Framework Laravel
* Base de datos MySQL
* Laravel Sanctum 
* Bruno

---
## Link de Endpoints

### Registrar usuario
http://66.179.93.253/MAMGact4t4/api/register

### Hacer login
http://66.179.93.253/MAMGact4t4/api/login

### POST y GET en vehiculos
Si quieres crear un nuevo vehiculo, usa la peticion POST y si quieres obtener una lista de los vehiculos en el API usa GET.

http://66.179.93.253/MAMGact4t4/api/vehiculos

### GET, PUT y DELETE 
Si quieries buscar un vehiculo en especifico, debes poner el /id delante de la palabra vehiculos en el url, lo mismo si debes hacer un PUT o DELETE.

http://66.179.93.253/MAMGact4t4/api/vehiculos/1

## Pruebas de Endpoints

### Módulo de Autenticación
* **Registro de Usuario**

  ![Registrar Usuario](img_bruno/registrar_user.png)
  Para registrar un usuario se necesita nombre, email, contraseña y comprobacion dela contraseña.


* **Inicio de Sesión (Login)**
  ![Login de Usuario](img_bruno/login_user.png)
Para entrar necesita que envies el email y contraseña y te genera un token para esa sesión.
* **Protección de Rutas (Error 401 - Sin Token)**

  ![Sin Autorización](img_bruno/Sin_autorizacion.png)
Si no tienes un token no puedes hacer peticiones.
---

### CRUD de Vehículos
* **Listar registros con paginación**

  ![Listar](img_bruno/Listar.png)
Listamos a los vehiculos de la pagina 2.

* **Consultar un registro individual**

  ![Ver Vehículo](img_bruno/GET_vehiculo5.png)
Consultamos el vehiculo con id:5

* **Crear un nuevo vehículo (POST)**
  ![Post Vehículo](img_bruno/post_vehiculo.png)

* **Validación de datos (Error 422)**

  ![Validación de Campos](img_bruno/validacion_campos.png)
Comprobamos que no se pueda hacer POST si hay cmapos vacios.

* **Actualizar un registro (PUT)**
  ![Modificar](img_bruno/modificar.png)

* **Eliminar un registro (DELETE)**
  ![Delete](img_bruno/delete.png)
