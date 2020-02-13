<?php

namespace classes;

abstract class Character implements Combat
{
    protected int $hp = 100;
    protected int $str = 1;
    protected int $int = 1;
    protected int $mana = 0;
    protected int $resist = 0;
    protected int $exp = 0;

    public function __construct($hp, $str, $int, $mana, $resist, $exp)
    {
        $this->hp = $hp;
        $this->str = $str;
        $this->int = $int;
        $this->mana = $mana;
        $this->resist = $resist;
        $this->exp = $exp;
    }

    public function attack($target, $hit)
    {
        $target->hp -= $hit;
    }

    public function getHit($dmg)
    {
        // TODO: Implement getHit() method.
    }

    public function flee()
    {
        // TODO: Implement flee() method.
    }

    public function spell()
    {
        // TODO: Implement spell() method.
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getStr(): int
    {
        return $this->str;
    }

    /**
     * @param int $str
     */
    public function setStr(int $str): void
    {
        $this->str = $str;
    }

    /**
     * @return int
     */
    public function getInt(): int
    {
        return $this->int;
    }

    /**
     * @param int $int
     */
    public function setInt(int $int): void
    {
        $this->int = $int;
    }

    /**
     * @return int
     */
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     * @param int $mana
     */
    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    /**
     * @return int
     */
    public function getResist(): int
    {
        return $this->resist;
    }

    /**
     * @param int $resist
     */
    public function setResist(int $resist): void
    {
        $this->resist = $resist;
    }

    /**
     * @return int
     */
    public function getExp(): int
    {
        return $this->exp;
    }

    /**
     * @param int $exp
     */
    public function setExp(int $exp): void
    {
        $this->exp = $exp;
    }
}
