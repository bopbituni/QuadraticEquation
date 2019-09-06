<?php


class QE
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDiscriminant()
    {
        return $delta = pow($this->b, 2) - 4 * $this->a * $this->c;
    }

    public function getRoot1()
    {
        if ($this->a > 0) {
            if ($this->getDiscriminant() > 0) {
                return $r1 = (-$this->b + sqrt($this->getDiscriminant()) / 2 * $this->a);
            } else if ($this->getDiscriminant() == 0) {
                return $r1 = -$this->b / 2 * $this->a;
            } else {
                return 0;
            }
        } else {
            return "Cút";
        }

    }

    public function getRoot2()
    {
        if ($this->a > 0) {
            if ($this->getDiscriminant() > 0) {
                return $r2 = (-$this->b + sqrt($this->getDiscriminant()) / 2 * $this->a);
            } else if ($this->getDiscriminant() == 0) {
                return $r2 = -$this->b / 2 * $this->a;
            } else {
                return 0;
            }
        } else {
            return "Biến";
        }
    }
}