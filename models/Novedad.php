<?php

namespace Model;

class Novedad extends ActiveRecord {
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
}