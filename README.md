# PROYECTO FINAL OPCIÓN 3




# **1.- Introducción**
Este proyecto trata de una página web dinámica que consiste en una tienda que venderá artesanía en línea y permitirá que los clientes creen sus propios escaparates para vender su artesanía en el sitio web.

# **2.- Objetivos y requisitos del proyecto**
El objetivo es que a una compañía le ayudes a migrar su sitio web y mercado en línea a la nube. La tienda venderá su artesanía en línea y permitirá que los clientes creen sus propios escaparates para vender su artesanía en el sitio web.

Para cumplir el requisito del cliente debemos de crear una página web dinámica en la que los usuarios puedan ser tanto clientes como proveedores, los clientes puedan ver los productos que se venden y los proveedores puedan subir los productos que venden.

# **3.- Estudio previo**
## **3.1.- Estado actual**
Para realizar este proyecto, hemos creado una página web dinámica con su home de inicio en el que los usuarios entrarán en el menú y escogen si son clientes o proveedores, y te redirigirá a sus páginas correspondientes. Ambas páginas tienen diversos formularios y su propia conexión a la base de datos para guardar la información que pongamos en los formularios.

## **3.2.- Estudio de soluciones existentes**
Realizaremos un despliegue en AWS con diferentes servicios.


\- Crearemos una instancia EC2 donde alojaremos nuestra página web y los distintos formularios creados para registrar los datos y los productos de los proveedores.

\- Crearemos una instancia RDS que es donde se aloja nuestra base de datos la cual almacenará los datos registrados en los formularios previamente creados.

\- Creación de VPC para tener alojado los servicios en diferentes sitios.

# **4.- Plan de trabajo**
Nuestro plan de trabajo sería obtener un dominio en Amazon. Una vez tengamos el entorno de trabajo creado, implementaremos medios de seguridad en ese entorno de trabajo, en nuestra instancia, donde se aloja la página web crearemos un grupo de seguridad el cual, tendrá la regla de entrada que nos indica.

En nuestra instancia donde se aloja la base de datos, crearemos un grupo de seguridad para que solo puedan acceder a la base de datos las instancias que se encuentren en el grupo de seguridad web.
# **5.- Diseño**
## **5.1.- Diseño general**
En cuanto al diseño general, montaremos en un nodo nuestra página web en una instancia EC2 y debajo de ella encontraremos la instancia RDS  que no está disponible para los clientes debido a que hemos añadido grupos de seguridad para securizarla.
## **5.2.- Diseño detallado**
Tendremos en nuestras EC2 la siguiente configuración con respecto a las redes.

![](./imagenes/Aspose.Words.764bd500-eb5b-4edb-942c-86c8fe6d70df.001.png)


Y en la instancias de RDS tendremos un grupo de subred en el que incluiremos las subredes privadas.

![](./imagenes/Aspose.Words.764bd500-eb5b-4edb-942c-86c8fe6d70df.002.png)

Además, crearemos una VPC para alojar las instancias en diferentes zonas ( Las zonas se encuentran detalladas en la imagen anterior.

![](./imagenes/Aspose.Words.764bd500-eb5b-4edb-942c-86c8fe6d70df.003.png)
# **6.- Implantación**

Para la implatación de dicho trabajo tenemos que crear un escenario con la implantación de una EC2 para la creación de una página web dinámica y además la creación de una RDS que actuará como base de datos. Dicha base de datos tendrá que securizarse para que no pueda acceder agentes externos a la empresa.

# **7.- Recursos**
## **7.1.- Herramientas hardware**
Instancia EC2 : 

- SO: Ubuntu 22.04
- Tipo instancia: t2.micro
- 1 CPU
- 8 GB de almacenamiento
## **7.2.- Herramientas software**
Instancia EC2 con la siguiente configuración software:

- Servicio Apache.
- Servicio MySQL
- Servicio Php.
- Grupo de seguridad.

Instancia RDS con la siguiente configuración:

- Servicio MySQL.
- Grupo de seguridad.

## **7.3.- Personal**
Actualmente, con la cantidad de clientes que se alojan en nuestra página web, nos hará falta solo una persona, sin embargo en el momento que la empresa vaya creciendo y tengamos que aumentar los recursos, aumentaremos el personal.

**7.4.- Presupuesto**

Presupuesto instancia EC2:

![](./imagenes/Aspose.Words.764bd500-eb5b-4edb-942c-86c8fe6d70df.004.png)

Presupuesto instancia RDS:

Podemos contratar 2 servicios para el RDS que vayamos a disponer;

- Producción, que nos aporta mejores servicios pero es más caro.

![](./imagenes/Aspose.Words.764bd500-eb5b-4edb-942c-86c8fe6d70df.005.png)

- Estándar, que tiene menos servicios pero sirve para este tipo de empresas.

![](./imagenes/Aspose.Words.764bd500-eb5b-4edb-942c-86c8fe6d70df.006.png)






# **8.- Conclusiones**
## **8.1.- Grado de consecución de objetivos**
- Creación de instancias (Totalmente terminado)
- Creación de base de datos (Totalmente terminado)
- Securización de instancias EC2 y RDS (Totalmente terminado)

## **8.2.- Problemas encontrados**
Uno de los errores más sencillos y a la vez más difíciles de encontrar ha sido la inserción de las imágenes en el archivo /var/www/html/imagenes, debido a que no se le asignó los permisos de lectura y escritura no se guardaban las imágenes del formulario en dicho directorio.
## **8.3.- Futuras mejoras**
Al ser una pequeña empresa no habrá muchos clientes inicialmente, sin embargo, una vez que la empresa vaya creciendo y teniendo mayor cantidad de usuarios conviene hacer un proxy inverso con un balanceador de cargas para así evitar futuras saturaciones en la web.
# **9.- Referencias / bibliografía**
<https://getbootstrap.com/>

<https://getbootstrap.com/docs/4.0/components/navbar/>

<https://mdbootstrap.com/docs/standard/extended/gallery/>



