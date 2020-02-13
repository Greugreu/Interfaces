<?php


namespace classes;
use classes\Spellbook;

class Mage extends Character implements Spells
{
    public function __construct($hp, $str, $int, $mana, $resist, $exp)
    {
        parent::__construct($hp, $str, $int, $mana, $resist, $exp);
    }

    public function cast(string $spell, string $effect, $target)
    {
        $spell = new Spellbook();
        $this->mana -= $spell->fireball()->manaCost;
        $this->$target -= $spell->fireball()->dmg;

        return $this;
    }
}
