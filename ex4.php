<?php
abstract class Personne {
    protected string $nom;
    protected string $prenom;

    public function __construct(string $n, string $p){
        $this->nom=$n;
        $this->prenom=$p;
    }
    abstract public function getInfo(): string;
}

class Adulte extends Personne {
    private string $metier;
    private float $salaire;

    public function __construct(string $n, string $p, string $m, float $s){
        parent::__construct($n,$p);
        $this->metier=$m;
        $this->salaire=$s;
    }
    public function getInfo(): string {
        return "Nom : ".$this->nom."<br>Prénom : ".$this->prenom."<br>Métier : ".$this->metier."<br>Salaire : ".$this->salaire." DT";
    }
}

class Adolescent extends Personne {
    private int $age;
    private string $loisir;

    public function __construct(string $n, string $p, int $a, string $l){
        parent::__construct($n,$p);
        $this->age=$a;
        $this->loisir=$l;
    }
    public function getInfo(): string {
        return "Nom : ".$this->nom."<br>Prénom : ".$this->prenom."<br>Âge : ".$this->age." ans<br>Loisir : ".$this->loisir;
    }
}

$Adulte1=new Adulte("Gharbi","Karim","Ingénieur",2500);
$Adolescent1=new Adolescent("Jlassi","Yasmine",15,"Football");
?>
<h2>Exercice 4</h2>
<h3>Adulte</h3>
<?= $Adulte1->getInfo() ?><br>

<h3>Adolescent</h3>
<?= $Adolescent1->getInfo() ?><br>