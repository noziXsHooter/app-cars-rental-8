<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;


class AbstractRepository {

    public function __construct(Model $model) {

        $this->model = $model;
    }

    public function selectAtributosRegistrosRelacionados($atributos){
        
        $this->model = $this->model->with($atributos);
        // a query está sendo montada

    }

    public function filtro($filtros) {

        $filtros = explode(';', $filtros);
        foreach($filtros as $key => $condicao) {

            $c = explode(':', $condicao); // Separa o que ":" está entre e coloca em arrays  
            $this->model = $this->model->where($c[0], $c[1], $c[2]);

        }
    }

    public function selectAtributos($atributos){

        $this->model = $this->model->selectRaw($atributos);// Para que funcione o relacionamento de marca no GET do modelo, o atributo "modelos_id" deve ser chamado

    }

    public function getResultado () {

        return $this->model->get();
        
    }

}


?>