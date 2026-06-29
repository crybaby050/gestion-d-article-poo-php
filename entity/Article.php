<?php

class Article{

    private int $id;
    private string $libelle;
    private float $prix;
    private int $quantite;

    public function __construct($id, $libelle, $prix, $quantite){

        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

    public function getLibelle(){
        return $this->libelle;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function getQuantite(){
        return $this->quantite;
    }

    public function getId(){
        return $this->id;
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }

    public function setQuantite($quantite){
        $this->quantite = $quantite;
    }
}