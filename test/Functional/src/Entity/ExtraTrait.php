<?php
namespace Hostnet\FunctionalFixtures\Entity;

trait ExtraTrait
{
    /**
     * I am from a trait
     * @return $this|WithTraitClass
     */
    public function extra()
    {
        return $this;
    }
}
