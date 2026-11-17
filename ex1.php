<?php
class Ville {
    private string $nom;
    private string $gouvernorat;

    public function __construct(string $n, string $g){
        $this->nom=$n;
        $this->gouvernorat=$g;
    }
    public function get_info(): string {
        return "La ville ".$this->nom." est dans le gouvernorat ".$this->gouvernorat;
    }
}

$ville1=new Ville("Chebba","Mahdia");
$ville2=new Ville("Rades","Ben Arous");
?>
<h2>Exercice 1</h2>
<?= $ville1->get_info() ?><br>
<?= $ville2->get_info() ?><br>