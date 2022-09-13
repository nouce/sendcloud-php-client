<?php

namespace Picqer\Carriers\SendCloud\Query;

use Picqer\Carriers\SendCloud\Connection;

/**
 * Trait FindAll
 *
 * @method Connection connection()
 *
 * @package Picqer\Carriers\SendCloud\Persistance
 */
trait FindAll
{

    public function all($params = [])
    {
        $result = $this->connection()->get($this->url, $params);

        return $this->collectionFromResult($result);
    }

    public function collectionFromResult($result)
    {
          $collection = [];

          $results = isset($result[$this->namespaces['plural']]) 
                         ? $result[$this->namespaces['plural']] 
                         : $result;

          foreach ($results as $r) {
               $collection[] = new self($this->connection(), $r);
          }

          return $collection;
    }

}