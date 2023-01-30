<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

class Order
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Order
     */
    public function setId(string $id): Order
    {
        $this->id = $id;
        return $this;
    }
}
