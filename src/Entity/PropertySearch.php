<?php

namespace App\Entity;

use App\Repository\PropertySearchRepository;

class PropertySearch{
    private$nom;
    public function getNom():?string{
        return$this->nom;}
        public function setNom(string $nom):self{$this->nom=$nom;
            return$this;
        }
}
