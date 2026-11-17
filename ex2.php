<?php
class MiseEnForme {
    private string $chaine;

    public function __construct(string $ch){
        $this->chaine=$ch;
    }

    public function gras(): string {
        return "<b>".$this->chaine."</b>";
    }
    public function italique(): string {
        return "<i>".$this->chaine."</i>";
    }
    public function souligne(): string {
        return "<u>".$this->chaine."</u>";
    }
    public function majuscules(): string {
        return strtoupper($this->chaine);
    }
}

$m=new MiseEnForme("Programmation orientée objet en PHP");
?>
<h2>Exercice 2</h2>
Gras : <?= $m->gras() ?><br>
Italique : <?= $m->italique() ?><br>
Souligné : <?= $m->souligne() ?><br>
Majuscules : <?= $m->majuscules() ?><br>