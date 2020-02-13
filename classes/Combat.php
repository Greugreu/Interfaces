<?php


namespace classes;


interface Combat
{
    public function attack($target, $hit);
    public function getHit($dmg);
    public function flee();
    public function spell();
}
