<?php

require_once 'Libro.php';

class Manuale extends Libro {

    public $argomento;

    public function __construct($_titolo, $_autore, $_argomento) {
        parent::__construct($_titolo, $_autore);
        $this->argomento = $_argomento;

    }

    public function tempo_lettura($tempo_pagina) {

        //return $tempo_pagina * $this->numero_pagine * 2;

        return parent::tempo_lettura($tempo_pagina) * 2;

    }

}
//esempio extends: permettere di creare una nuova classe utilizzando
//tutte le proprietà di una classe già esistente più quelle specifiche della nuova classe
?>
