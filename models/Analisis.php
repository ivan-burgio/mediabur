<?php

namespace Model;

class Analisis extends ActiveRecord {
    protected static $tabla = 'analisis';
    protected static $columnasDB = ['id', 'titulo', 'portada', 'tipo', 'fecha', 'creador', 'categoria', 'activo', 'texto'];

    public $id;
    public $titulo;
    public $portada;
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
        $this->portada = $args['portada'] ?? '';
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
        if(!$this->portada) {
            self::$alertas['error'][] = 'La Portada es Obligatorio';
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

    public static function buscar($terminoBusqueda) {
        // Escapa el término de búsqueda para prevenir la inyección de SQL
        $terminoBusquedaEscapado = '%' . $terminoBusqueda . '%';
        
        // Construye la consulta SQL para buscar en las columnas relevantes
        $consulta = "SELECT * FROM " . static::$tabla . " WHERE id = ? OR titulo LIKE ? OR categoria LIKE ?";
        $stmt = self::$db->prepare($consulta);
        
        // Enlaza los parámetros y ejecuta la consulta
        $stmt->bind_param("sss", $terminoBusqueda, $terminoBusquedaEscapado, $terminoBusquedaEscapado);
        $stmt->execute();
        
        // Obtiene los resultados de la consulta
        $resultados = $stmt->get_result();
        
        // Itera sobre los resultados y crea objetos Noticia
        $analisis = [];
        while ($fila = $resultados->fetch_assoc()) {
            $analisis[] = static::crearObjeto($fila);
        }
        
        // Libera los recursos y retorna los resultados
        $stmt->close();
        return $analisis;
    }
}