<?php

namespace Picqer\Carriers\SendCloud;

/**
 * Class ShippingProduct
 *
 * @property integer id
 * @property string name
 * @property float price
 * @property array options
 * @property array countries
 *
 * @package Picqer\Carriers\SendCloud
 */
class ShippingProduct extends Model
{
    use Query\Findable;

    protected $fillable = [
        'id',
        'name',
        'carrier',
        'service_points_carrier',
        'code',
        'weight_range',
        'methods',
        'available_functionalities'
    ];

    protected $url = 'shipping-products';

    protected $namespaces = [
        'singular' => 'shipping-product',
        'plural' => 'shipping-products'
    ];

}
