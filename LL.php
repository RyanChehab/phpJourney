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
            while($current->next !==null){
                $current= $current->next;
            }
            $current->next = $newNode;
        }
        
    }

    private function countVowels($string) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
    
        foreach (str_split(strtolower($string)) as $char) {
            if (in_array($char, $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    public function printNodesWithTwoVowels() {
        $current = $this->head;

        while ($current !== null) {

            if ($this->countVowels($current->value) === 2) {
                echo $current->value . "\n";
            }
            $current = $current->next;
        }
    }  
}

$list = new LinkedList();


$list->addNode("Ryan");
$list->addNode("Taha");
$list->addNode("Charbel");
$list->addNode("Nabiha");


echo "Nodes with exactly 2 vowels:   ";
$list->printNodesWithTwoVowels();