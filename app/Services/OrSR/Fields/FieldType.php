<?php

namespace App\Services\OrSR\Fields;

abstract class FieldType implements FieldInterface
{

    /**
     * @var string
     */
    private $value;


    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

}
