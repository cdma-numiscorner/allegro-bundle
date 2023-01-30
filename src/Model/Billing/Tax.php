<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

class Tax
{
    /**
     * @var int
     */
    private int $percentage;

    /**
     * @var string|null
     */
    private ?string $annotation;

    /**
     * @return int
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }

    /**
     * @param int $percentage
     * @return Tax
     */
    public function setPercentage(int $percentage): Tax
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }

    /**
     * @param string|null $annotation
     * @return Tax
     */
    public function setAnnotation(?string $annotation): Tax
    {
        $this->annotation = $annotation;
        return $this;
    }
}
