<?php
Class Node{
    public $value;
    public $next;

    public function __construct($value){
        $this->value = $value;
        $this->next = null;
    }
}

Class LinkedList{
    public $head; 

    public function __construct(){
        $this->head = null;
    }

    public function addNode($value){
        $newNode = new Node($value);
    
        if ($this->head === null){
            $this->head = $newNode;
        }
        else{
            $current = $this->head;
            while(current->next !==null){
                $current= $current->$next;
            }
            }
        $current->next = $newNode;
    }
}

