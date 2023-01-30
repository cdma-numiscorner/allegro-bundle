<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

class Offer
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Offer
     */
    public function setId(string $id): Offer
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Offer
     */
    public function setName(string $name): Offer
    {
        $this->name = $name;
        return $this;
    }
}