<?php

class Data {

    private $authors;
    private $articles;
    private $categories;

    public function __construct() {

        // => on inclut le fichier data.php
        require __DIR__.'/../data.php';

        $this->authors = $dataAuthorsList;
        $this->articles = $dataArticlesList;
        $this->categories = $dataCategoriesList;
    }

    public function getArticles() {
        return $this->articles;
    }

    /**
     * Méthode retournant un objet article dont l'id est passé en paramètre
     * 
     */
    public function getArticle($id) {
        if (isset($this->articles[$id])) {
            return $this->articles[$id];
        } else {
            // Par défaut, on retourne le premier article
            return $this->articles[1];
        }
    }

    // Getter pour les auteurs
    public function getAllAuthors()
    {
           return $this->authors;
    }

    //Getter pour les catégories
    public function getAllCategories()
    {
           return $this->categories;
    }

    // Getter pour les catégories
    public function getCategories($cat)
    {
          return $this->categories[$cat];
    }

}