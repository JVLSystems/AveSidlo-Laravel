<?php

namespace App\Services\OrSR;


use App\Services\OrSR\Fields\FieldType;
use App\Services\OrSR\Libs\FindInOrsr;
use App\Services\OrSR\Libs\FindInRegisterUz;
use App\Services\OrSR\Libs\Results;

class Parser
{

    /**
     * @var Results
     */
    private $results;

    /**
     *
     */
    public function __construct()
    {
        $this->results = new Results();
    }

    /**
     * @param FieldType $field
     * @return $this
     */
    public function find(FieldType $field): Parser
    {
        $orsr = new FindInOrsr();
        $results = $orsr->find($field);
        $this->results->append($results);

        $registerUz = new FindInRegisterUz();
        $results = $registerUz->find($field);
        $this->results->append($results);

        return $this;
    }

    /**
     * @return array
     */
    public function getResults(): array
    {
        return $this->results->getAll();
    }
}
