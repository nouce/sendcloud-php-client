<?php

namespace Picqer\Carriers\SendCloud;

/**
 * Class ShippingPrices
 *
 * @property string price
 * @property string currency
 * @property string to_country
 *
 * @package Picqer\Carriers\SendCloud
 */

class ShippingPrices extends Model {

     use Query\FindAll;

     protected $fillable = [
         'price',
         'currency',
         'to_country'
     ];

     protected $url = 'shipping-price';

     protected $namespaces = [
          'singular' => 'shipping_price',
          'plural' => 'shipping_price'
      ];
}