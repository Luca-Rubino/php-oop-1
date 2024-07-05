<?php

class Movie{
    private $titolo;
    private $genere;
    private $imgPoster;
    private $vote;

    private function __construct( $_titolo, $_genere, $_imgPoster, $_vote ){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->imgPoster = $_imgPoster;
        $this->vote = $_vote;
    }

    public function getTitle(){
        return $this->titolo;
    }

    public function getGenere(){
        return $this->genere;
    }

    public function getimgPoster(){
        return $this->imgPoster;
    }

    public function getVote(){
        return $this->vote;
    }
}
