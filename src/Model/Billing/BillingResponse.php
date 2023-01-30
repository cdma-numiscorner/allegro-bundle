<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\SerializedName;
class BillingResponse
{
    private Collection $billingEntries;

    public function __construct()
    {
        $this->billingEntries = new ArrayCollection();
    }

    public function getBillingEntries(): Collection
    {
        return $this->billingEntries;
    }

    public function addBillingEntry(BillingEntry $transaction): BillingResponse
    {
        if (!$this->billingEntries->contains($transaction))
        {
            $this->billingEntries->add($transaction);
        }

        return $this;
    }

    public function removeBillingEntry(BillingEntry $transaction): BillingResponse
    {
        if ($this->billingEntries->contains($transaction))
        {
            $this->billingEntries->removeElement($transaction);
        }

        return $this;
    }
}
