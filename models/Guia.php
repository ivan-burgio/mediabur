<?php

namespace Model;

class Guia extends ActiveRecord {
    protected static $tabla = 'guias';
    protected static $columnasDB = ['id', 'titulo', 'tipo', 'fecha', 'texto1', 'img1', 'texto2', 'img2', 'texto3', 'img3'];

    public $id;
    public $titulo;
    public $tipo;
    public $fecha;
    public $texto1;
    public $img1;
    public $texto2;
    public $img2;
    public $texto3;
    public $img3;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->texto1 = $args['texto1'] ?? '';
        $this->img1 = $args['img1'] ?? '';
        $this->texto2 = $args['texto2'] ?? '';
        $this->img2 = $args['img2'] ?? '';
        $this->texto3 = $args['texto3'] ?? '';
        $this->img3 = $args['img3'] ?? '';
    }

    public function validar() {
        if(!$this->titulo) {
            self::$alertas['error'][] = 'El Titulo es Obligatorio';
        }
        if(!$this->tipo) {
            self::$alertas['error'][] = 'El Tipo de Publicacion es Obligatorio';
        }
    
        return self::$alertas;
    }
}