<?php

namespace Model;

class Todo extends ActiveRecord {
    protected static $tabla = 'todo';
    protected static $columnasDB = ['id', 'id_publicacion', 'titulo_publicacion', 'tipo_publicacion', 'fecha_publicacion', 'categoria_publicacion', 'activo_publicacion'];

    public $id;
    public $id_publicacion;
    public $titulo_publicacion;
    public $tipo_publicacion;
    public $fecha_publicacion;
    public $categoria_publicacion;
    public $activo_publicacion;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->id_publicacion = $args['id_publicacion'] ?? null;
        $this->titulo_publicacion = $args['titulo_publicacion'] ?? '';
        $this->tipo_publicacion = $args['tipo_publicacion'] ?? '';
        $this->fecha_publicacion = $args['fecha_publicacion'] ?? '';
        $this->categoria_publicacion = $args['categoria_publicacion'] ?? '';
        $this->activo_publicacion = $args['activo_publicacion'] ?? '0';
    }

    public static function buscar($terminoBusqueda) {
        // Escapa el término de búsqueda para prevenir la inyección de SQL
        $terminoBusquedaEscapado = '%' . $terminoBusqueda . '%';
    
        // Construye la consulta SQL para buscar en las columnas relevantes
        $consulta = "SELECT * FROM " . static::$tabla . " WHERE titulo_publicacion LIKE ? OR categoria_publicacion LIKE ?";
        $stmt = self::$db->prepare($consulta);
    
        // Enlaza los parámetros y ejecuta la consulta
        $stmt->bind_param("ss", $terminoBusquedaEscapado, $terminoBusquedaEscapado);
        $stmt->execute();
    
        // Obtiene los resultados de la consulta
        $resultados = $stmt->get_result();
    
        // Itera sobre los resultados y crea objetos Noticia
        $novedades = [];
        while ($fila = $resultados->fetch_assoc()) {
            $novedades[] = static::crearObjeto($fila);
        }
    
        // Libera los recursos y retorna los resultados
        $stmt->close();
        return $novedades;
    }    

    public static function buscarId($id_publicacion, $tipo_publicacion) {
        // Construye la consulta SQL para buscar en la columna id_publicacion
        $consulta = "SELECT * FROM " . static::$tabla . " WHERE id_publicacion = ? AND tipo_publicacion = ?";
        $stmt = self::$db->prepare($consulta);
        
        // Enlaza los parámetros y ejecuta la consulta
        $stmt->bind_param("is", $id_publicacion, $tipo_publicacion); // "is" para integer y string
        $stmt->execute();
        
        // Obtiene los resultados de la consulta
        $resultados = $stmt->get_result();
        
        // Itera sobre los resultados y crea objetos Todo
        $todos = [];
        while ($fila = $resultados->fetch_assoc()) {
            $todos[] = static::crearObjeto($fila);
        }
        
        // Libera los recursos y retorna los resultados
        $stmt->close();
        return $todos;
    }
}