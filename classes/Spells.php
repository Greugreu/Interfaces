<?php


namespace classes;


interface Spells
{
    public function cast(string $spell, string $effect, $target);

}
