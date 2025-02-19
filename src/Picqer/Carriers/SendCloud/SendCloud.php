<?php

namespace Picqer\Carriers\SendCloud;

class SendCloud
{
    /**
     * The HTTP connection
     *
     * @var Connection
     */
    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function invoices(): Invoice
    {
        return new Invoice($this->connection);
    }

    public function labels(): Label
    {
        return new Label($this->connection);
    }

    public function parcels(): Parcel
    {
        return new Parcel($this->connection);
    }

    public function users(): User
    {
        return new User($this->connection);
    }

    public function senderAddresses(): SenderAddress
    {
        return new SenderAddress($this->connection);
    }

    public function shippingProduct(): ShippingProduct
    {
        return new ShippingProduct($this->connection);
    }

    public function shippingMethod(): ShippingMethod
    {
        return new ShippingMethod($this->connection);
    }

    public function shippingPrices(): ShippingPrices
    {
        return new ShippingPrices($this->connection);
    }

    /**
     * SenderAddress Resource
     *
     * @return SenderAddress
     * @deprecated Inconsistent nameing, use senderAddresses()
     */
    public function sender_addresses()
    {
        return $this->senderAddresses();
    }
}
