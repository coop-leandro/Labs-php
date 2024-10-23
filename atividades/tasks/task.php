<?php

class Task {
    public $title;
    public $description;
    public $completed;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false; 
    }

    public function markAsCompleted() {
        $this->completed = true;
    }

    public function markAsIncomplete() {
        $this->completed = false;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDesc() {
        return $this->description;
    }

    public function isCompleted() {
        return $this->completed;
    }
}

$work = new Task("Estudar PHP", "Revisar classes e objetos");
$work->markAsCompleted();

echo "Titulo:" . $work->getTitle() . "<br>";
echo "Descrição: " . $work->getDesc()  . "<br>"; 
echo "Completado?: " . ($work->isCompleted() ? "sim" : "não") . "<br>";

$trabalho = new Task("Trabalho", "Trabalho terminado");
$trabalho->markAsIncomplete();

echo "<br> Titulo:" . $trabalho->getTitle() . "<br>";
echo "Descrição: " . $trabalho->getDesc()  . "<br>"; 
echo "Completado?: " . ($trabalho->isCompleted() ? "sim" : "não") . "<br>";


