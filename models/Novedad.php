<?php

namespace Model;

class Novedad extends ActiveRecord {
    protected static $tabla = 'todo';
    protected static $columnasDB = ['id', 'id_publicacion', 'tipo_publicacion', 'fecha_publicacion'];

    public $id;
    public $id_publicacion;
    public $tipo_publicacion;
    public $fecha_publicacion;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->id_publicacion = $args['id_publicacion'] ?? '';
        $this->tipo_publicacion = $args['tipo_publicacion'] ?? '';
        $this->fecha_publicacion = $args['fecha'] ?? '';
    }
}