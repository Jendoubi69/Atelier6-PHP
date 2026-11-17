<?php
class Salarie {
    protected int $code;
    protected string $nom;
    protected string $prenom;
    protected float $salaireBase;
    protected float $indemnite;

    public function __construct(int $c, string $n, string $p, float $s, float $i){
        $this->code=$c;
        $this->nom=$n;
        $this->prenom=$p;
        $this->salaireBase=$s;
        $this->indemnite=$i;
    }
    public function calculSalaire(): float {
        return $this->salaireBase+$this->indemnite;
    }
    public function infosSalarie(): string {
        return "Code : ".$this->code."<br>Nom : ".$this->nom."<br>Prénom : ".$this->prenom."<br>Salaire de base : ".$this->salaireBase." DT<br>Indemnité : ".$this->indemnite." DT";
    }
}

class Contractuel extends Salarie {
    private string $dateContrat;
    private string $typeContrat;

    public function __construct(int $c, string $n, string $p, float $s, float $i, string $d, string $t){
        parent::__construct($c,$n,$p,$s,$i);
        $this->dateContrat=$d;
        $this->typeContrat=$t;
    }
    public function infosSalarie(): string {
        return parent::infosSalarie()."<br>Date du contrat : ".$this->dateContrat."<br>Type du contrat : ".$this->typeContrat;
    }
}

$s1=new Salarie(1,"Ben Ali","Ahmed",1200,200);
$c1=new Contractuel(2,"Trabelsi","Sara",1000,150,"01/09/2026","CDD");
?>
<h2>Exercice 3</h2>
<h3>Salarié</h3>
<?= $s1->infosSalarie() ?><br>
Salaire calculé : <?= $s1->calculSalaire() ?> DT<br>

<h3>Contractuel</h3>
<?= $c1->infosSalarie() ?><br>
Salaire calculé : <?= $c1->calculSalaire() ?> DT<br>