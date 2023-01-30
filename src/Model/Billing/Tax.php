<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

class Tax
{
    /**
     * @var string
     */
    private string $percentage;

    /**
     * @var string|null
     */
    private ?string $annotation;

    /**
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }

    /**
     * @param string $percentage
     * @return Tax
     */
    public function setPercentage(string $percentage): Tax
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
