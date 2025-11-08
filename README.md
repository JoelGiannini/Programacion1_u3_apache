# Programación 1 - Unidad 5 (PHP)  
**Trabajo Práctico - Sitio Web del Club Social y Deportivo**

Este proyecto corresponde a la **Unidad 5** de la materia **Programación 1** de la **Tecnicatura en Software Libre (UNL)**.  
Es una continuación del trabajo realizado en la rama anterior (**u4_php**), incorporando nuevas funcionalidades dinámicas utilizando **PHP**, **formularios**, y **cookies**.

---

## 📁 Estructura del proyecto

```yaml
Programacion1_u3_apache/
├── index.html                # Página principal estática (versión HTML)
├── index.php                 # Nueva versión PHP del sitio con contador de visitas mediante cookies
├── contacto.php              # Página de contacto con formulario (nombre, email, consulta)
├── consultas/                # Carpeta donde se almacenan los archivos de consultas (generada automáticamente)
├── estilos.css               # Hojas de estilo
├── img/                      # Carpeta de imágenes
│   └── logo.png
└── php/                      # Archivos PHP adicionales (si aplica)
```

---

## 🧩 Funcionalidades agregadas en esta versión (u5_php)

### 1. Contador de visitas con cookies  
Se implementó un sistema de **cookies** para registrar cuántas veces un usuario visitó el sitio.  
- En la **primera visita**, se muestra un mensaje de bienvenida:  
  > “Bienvenidos al Sitio Oficial del Club Social y Deportivo …”  
- En las siguientes visitas, se muestra la cantidad de veces que ingresó el usuario.

Esta lógica se encuentra implementada dentro de `index.php`.

---

### 2. Página de contacto con formulario  
Se creó la página `contacto.php` con los siguientes campos:  
- **Nombre y Apellido**  
- **E-mail**  
- **Consulta**  

Al enviar el formulario:  
✅ Se muestra un mensaje confirmando el envío exitoso.  
✅ Se guarda el contenido de la consulta en un archivo dentro del directorio `consultas/`.  
✅ El nombre del archivo sigue el formato:  
   ```
   apellido-nombre.txt
   ```  
✅ Si el archivo ya existe, se agrega la nueva consulta al final del archivo sin borrar las anteriores.

---

### 3. Manejo automático del directorio `consultas/`
El directorio donde se almacenan las consultas se crea automáticamente si no existe.  
Esto se logra mediante código PHP que verifica su existencia y lo genera en caso necesario.

---

## ⚙️ Requisitos para ejecución local

1. Tener instalado **Apache** y **PHP** (por ejemplo con XAMPP o LAMP).  
2. Clonar el repositorio y situarse en la carpeta del proyecto:
   ```bash
   git clone https://github.com/JoelGiannini/Programacion1_u3_apache.git
   cd Programacion1_u3_apache
   git checkout u5_php
   ```
3. Copiar los archivos del proyecto al directorio raíz de Apache, por ejemplo:
   ```bash
   sudo cp -r Programacion1_u3_apache /var/www/html/
   ```
4. Acceder desde el navegador a:
   ```
   http://localhost/Programacion1_u3_apache/index.php
   ```

---

## 📌 Autor
**Joel Giannini**  
Tecnicatura en Software Libre - Universidad Nacional del Litoral (UNL)

---

## 🧠 Nota
Este trabajo práctico amplía el anterior (rama `u4_php`) agregando funcionalidades dinámicas y de persistencia de datos mediante PHP, simulando un comportamiento más cercano a un sitio web real con interacción del usuario.
