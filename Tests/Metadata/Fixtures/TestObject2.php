<?php

namespace SimpleThings\Bundle\SolrBundle\Tests\Metadata\Fixtures;

class TestObject2
{
    /** @var string */
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
