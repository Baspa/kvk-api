<?php

namespace Vormkracht10\KvKApi;

use Swis\JsonApi\Client\Concerns\HasLinks;
use Swis\JsonApi\Client\Item;

class Rechtspersoon extends Item
{
    use HasLinks;

    protected $type = 'rechtspersoon';

    public function basisprofiel()
    {
        return $this->hasOne(Basisprofiel::class);
    }
}
