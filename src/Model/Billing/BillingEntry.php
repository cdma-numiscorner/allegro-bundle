<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

class BillingEntry
{
    private string $id;

    private \DateTime $occurredAt;

    private Type $type;

    private Offer $offer;

    private Value $value;

    private Tax $tax;

    private Balance $balance;

    private Order $order;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return BillingEntry
     */
    public function setId(string $id): BillingEntry
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOccurredAt(): \DateTime
    {
        return $this->occurredAt;
    }

    /**
     * @param \DateTime $occurredAt
     * @return BillingEntry
     */
    public function setOccurredAt(\DateTime $occurredAt): BillingEntry
    {
        $this->occurredAt = $occurredAt;
        return $this;
    }

    /**
     * @return Type
     */
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * @param Type $type
     * @return BillingEntry
     */
    public function setType(Type $type): BillingEntry
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return Offer
     */
    public function getOffer(): Offer
    {
        return $this->offer;
    }

    /**
     * @param Offer $offer
     * @return BillingEntry
     */
    public function setOffer(Offer $offer): BillingEntry
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * @return Value
     */
    public function getValue(): Value
    {
        return $this->value;
    }

    /**
     * @param Value $value
     * @return BillingEntry
     */
    public function setValue(Value $value): BillingEntry
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return Tax
     */
    public function getTax(): Tax
    {
        return $this->tax;
    }

    /**
     * @param Tax $tax
     * @return BillingEntry
     */
    public function setTax(Tax $tax): BillingEntry
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return Balance
     */
    public function getBalance(): Balance
    {
        return $this->balance;
    }

    /**
     * @param Balance $balance
     * @return BillingEntry
     */
    public function setBalance(Balance $balance): BillingEntry
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     * @return BillingEntry
     */
    public function setOrder(Order $order): BillingEntry
    {
        $this->order = $order;
        return $this;
    }
}

