<?php

//creazione di una classe, contiene tutte le proprietà di un oggetto
class Libro {
    public $titolo;
    public $autore;
    public $genere;
    public $numero_pagine;

    public function __construct($_titolo, $_autore) {
        $this->titolo = $_titolo;
        $this->autore = $_autore;
    }

    public function tempo_lettura($tempo_pagina) {
        return $tempo_pagina * $this->numero_pagine;
    }
}

?>
