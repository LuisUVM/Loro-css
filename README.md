# Loro-css
Pagina realizada con CSS-HTML

# 🦜 Proyecto Web: Mi Animal Favorito - El Loro

Este proyecto es una página web desarrollada en **HTML, CSS y PHP** con conexión a **base de datos MySQL**, donde se presenta al loro como mi animal favorito. Incluye imágenes, videos, sonidos, tabla informativa, formulario de contacto y más.

## 📁 Estructura del Proyecto

```
30721284_Luis_Rodriguez/
│
├── index.html                # Página principal
├── css/
│   └── estilos.css           # Estilos CSS
├── php/
│   └── guardar_contacto.php  # Script PHP para guardar datos
├── Multimedia/
│   ├── Imagenes/
│   ├── Videos/
│   └── Sonido/
```

## 🛠 Requisitos

- Tener instalado **XAMPP**
- Apache y MySQL activos
- Navegador web
- Acceso a [phpMyAdmin](http://localhost/phpmyadmin)

## 🚀 Cómo visualizar el proyecto

### 1. Copia la carpeta del proyecto

1. Descarga y **extrae el archivo ZIP**.
2. Copia la carpeta `30721284_Luis_Rodriguez` dentro de:
   ```
   C:\xampp\htdocs\
   ```

### 2. Crea la base de datos

1. Abre tu navegador y entra a:
   ```
   http://localhost/phpmyadmin
   ```
2. Crea una nueva base de datos llamada:
   ```
   loros_db
   ```
3. Luego, selecciona esa base de datos y ve a la pestaña **SQL**.
4. Pega el siguiente código y haz clic en **Continuar**:

```sql
CREATE TABLE contactos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  comentario TEXT NOT NULL
);
```

### 3. Visualiza la página

1. Abre tu navegador y escribe en la barra de direcciones:
   ```
   http://localhost/30721284_Luis_Rodriguez/
   ```

2. Se abrirá la página principal del proyecto con contenido multimedia y un formulario.

### 4. Prueba el formulario

- Escribe tu nombre y comentario.
- Haz clic en **Enviar**.
- Verás un mensaje de confirmación.
- Los datos se guardarán en la base de datos `loros_db`, tabla `contactos`.

Puedes ver los registros guardados en:
```
http://localhost/phpmyadmin → loros_db → contactos
```

## ✨ Características del proyecto

- Página web con **semántica HTML5**
- Estilos personalizados con CSS externo
- Multimedia (imágenes, videos y audio)
- Efectos visuales y organización clara (UI/UX)
- Formulario funcional conectado a base de datos
- Código limpio, estructurado y fácil de entender

## 👨‍🎓 Autor

Luis Rodríguez  
Estudiante UVM  
Materia: Front-End  
Profesor: Yerson Gonzales
