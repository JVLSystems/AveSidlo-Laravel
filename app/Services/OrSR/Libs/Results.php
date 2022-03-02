<?php

namespace App\Services\OrSR\Libs;

class Results
{

    /**
     * @var array
     */
    private $data = [];

    /**
     * @param array $items
     * @return void
     */
    public function append(array $items): void
    {
        foreach ($items as $id => $data) {
            if ($this->idExists($id)) {
                $this->extendsData($id, $data);
            } else {
                $this->addToData($id, $data);
            }
        }
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return array_values($this->data);
    }

    /**
     * @param string $id
     * @return bool
     */
    private function idExists(string $id): bool
    {
        return array_key_exists($id, $this->data);
    }

    /**
     * @param string $id
     * @param array $data
     * @return void
     */
    private function addToData(string $id, array $data): void
    {
        $this->data[$id] = $data;
    }

    /**
     * @param string $id
     * @param array $data
     * @return void
     */
    private function extendsData(string $id, array $data): void
    {
        $newData = $this->data[$id];

        foreach ($data as $key => $value) {
            $newData[$key] = $value;
        }

        $this->data[$id] = $newData;
    }

}
