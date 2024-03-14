<?php

namespace Model;

class Todo extends ActiveRecord {
    protected static $tabla = 'todo';
    protected static $columnasDB = ['id', 'id_publicacion', 'tipo_publicacion', 'fecha_publicacion', 'categoria_publicacion', 'activo_publicacion'];

    public $id;
    public $id_publicacion;
    public $tipo_publicacion;
    public $fecha_publicacion;
    public $categoria_publicacion;
    public $activo_publicacion;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->id_publicacion = $args['id_publicacion'] ?? null;
        $this->tipo_publicacion = $args['tipo_publicacion'] ?? '';
        $this->fecha_publicacion = $args['fecha_publicacion'] ?? '';
        $this->categoria_publicacion = $args['categoria_publicacion'] ?? '';
        $this->activo_publicacion = $args['activo_publicacion'] ?? '0';
    }

    public static function buscarId($id_publicacion) {
        // Construye la consulta SQL para buscar en la columna id_publicacion
        $consulta = "SELECT * FROM " . static::$tabla . " WHERE id_publicacion = ?";
        $stmt = self::$db->prepare($consulta);
        
        // Enlaza el parámetro y ejecuta la consulta
        $stmt->bind_param("i", $id_publicacion);
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