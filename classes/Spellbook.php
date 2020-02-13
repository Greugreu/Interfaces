<?php


namespace classes;


class Spellbook
{
    public $manaCost;
    public $AoE = false;
    public $dmg;

    public function fireball()
    {
        $this->manaCost = 10;
        $this->AoE = true;
        $this->dmg = 20;

        return $this;
    }
}
