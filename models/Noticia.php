<?php

namespace Model;

class Noticia extends ActiveRecord {
    protected static $tabla = 'noticias';
    protected static $columnasDB = ['id', 'titulo', 'tipo', 'fecha', 'creador', 'categoria', 'activo', 'texto'];

    public $id;
    public $titulo;
    public $tipo;
    public $fecha;
    public $creador;
    public $categoria;
    public $activo;
    public $texto;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->creador = $args['creador'] ?? '';
        $this->categoria = $args['categoria'] ?? '';
        $this->activo = $args['activo'] ?? '0';
        $this->texto = $args['texto'] ?? '';
    }

    public function validar() {
        if(!$this->titulo) {
            self::$alertas['error'][] = 'El Titulo es Obligatorio';
        }
        if(!$this->tipo) {
            self::$alertas['error'][] = 'El Tipo de Publicacion es Obligatorio';
        }
        if(!$this->categoria) {
            self::$alertas['error'][] = 'La Categoria de Publicacion es Obligatorio';
        }
        if(!$this->texto) {
            self::$alertas['error'][] = 'El Contenido de la Publicacion es Obligatorio';
        }
    
        return self::$alertas;
    }
}