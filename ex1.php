<?php
class Ville {
    private string $nom;
    private string $gouvernorat;

    public function __construct(string $n, string $g){
        $this->nom=$n;
        $this->gouvernorat=$g;
    }
    public function __destruct(){
        ?>
        La ville <?= $this->nom ?> est détruite<br>
        <?php
    }
    public function setNom(string $n): self {
        $this->nom=$n;
        return $this;
    }
    public function getNom(): string {
        return $this->nom;
    }
    public function setGouvernorat(string $g): self {
        $this->gouvernorat=$g;
        return $this;
    }
    public function getGouvernorat(): string {
        return $this->gouvernorat;
    }
    public function get_info(): string {
        return "La ville ".$this->nom." est dans le gouvernorat ".$this->gouvernorat;
    }
}

$ville1=new Ville("Chebba","Mahdia");
$ville2=new Ville("Rades","Ben Arous");
?>
<h2>Exercice 1</h2>
<h3>Questions 2 et 3 : get_info()</h3>
<?= $ville1->get_info() ?><br>
<?= $ville2->get_info() ?><br>

<h3>Getters et setters</h3>
Nom de $ville2 : <?= $ville2->getNom() ?><br>
Gouvernorat de $ville2 : <?= $ville2->getGouvernorat() ?><br>
<?php unset($ville1); ?>
<?php unset($ville2); ?>

<?php
class VilleStr {
    private string $nom;
    private string $gouvernorat;

    public function __construct(string $n, string $g){
        $this->nom=$n;
        $this->gouvernorat=$g;
    }
    public function __toString(): string {
        return "La ville ".$this->nom." est dans le gouvernorat ".$this->gouvernorat;
    }
}

$ville1=new VilleStr("Chebba","Mahdia");
?>
<h3>Question 4 : __toString()</h3>
<?= $ville1 ?><br>
