<?php

namespace App\Services\OrSR\Libs;

use App\Services\OrSR\Fields\BusinessId;
use App\Services\OrSR\Fields\FieldType;
use App\Services\OrSR\Fields\TaxId;

class FindInRegisterUz
{

    /**
     * @const
     */
    private const URL_MAIN = 'http://www.registeruz.sk/cruz-public/api/uctovne-jednotky?zmenene-od=2000-01-01&pokracovat-za-id=1&max-zaznamov=100&{field}={search}';

    /**
     * @const
     */
    private const URL_DETAIL = 'http://www.registeruz.sk/cruz-public/api/uctovna-jednotka?id={id}';

    /**
     * @const
     */
    private const FIELD_STATE = 'stav';

    /**
     * @const
     */
    private const INVALID_STATES = ['ZMAZANÉ'];

    /**
     * @var TaxIdValidator
     */
    private $validator;

    public function __construct()
    {
        $this->validator = new TaxIdValidator();
    }

    /**
     * @param FieldType $field
     * @return array
     */
    public function find(FieldType $field): array
    {
        if (
            $field instanceof BusinessId ||
            $field instanceof TaxId
        ) {
            $items = $this->getAllResults($field);
            $results = [];

            foreach ($items as $id) {
                $detail = $this->getResultDetail($id);

                if (!is_null($detail)) {
                    $results[$detail['business_id']] = $detail;
                }
            }

            return $results;
        }

        return [];
    }

    /**
     * @param FieldType $field
     * @return array|null
     */
    private function getAllResults(FieldType $field): ?array
    {
        $data = [
            'field' => $field->getName(),
            'search' => $field->getValue()
        ];

        $request = new Request();
        $url = Request::buildUrl(self::URL_MAIN, $data);
        $response = $request
            ->setConnection($url)
            ->getResponse();

        $json = json_decode($response);

        if (!!$json) {
            return array_unique($json->id);
        }

        return null;
    }

    /**
     * @param string $id
     * @return array|null
     */
    private function getResultDetail(string $id): ?array
    {
        $data = [
            'id' => $id
        ];

        $request = new Request();
        $url = $request->buildUrl(self::URL_DETAIL, $data);
        $request->setConnection($url);
        $response = $request->getResponse();

        $json = json_decode($response);

        if (!!$json) {
            return $this->parseDetail($json);
        }

        return null;
    }

    /**
     * @param object $detailObject
     * @return array|null
     */
    private function parseDetail(object $detailObject): ?array
    {
        if (property_exists($detailObject, self::FIELD_STATE)) {
            $state = $detailObject->{self::FIELD_STATE};

            if (in_array($state, self::INVALID_STATES)) {
                return null;
            }
        }

        $return = [];
        $return['name'] = $detailObject->nazovUJ;
        $return['street'] = $detailObject->ulica;
        $return['city'] = $detailObject->mesto;
        $return['zip'] = $detailObject->psc;
        $return['business_id'] = $detailObject->ico;

        $taxId = null;
        if (isset($detailObject->dic)) {
            $taxId = (string) $detailObject->dic;

            if ($this->isTaxIdValid($taxId)) {
                $return['vat_id'] = $this->getVatId($taxId);
            }
        }

        $return['tax_id'] = $taxId;

        return array_map('trim', $return);
    }

    /**
     * @param string $taxId
     * @return bool
     */
    private function isTaxIdValid(string $taxId): bool
    {
        return $this->validator->validate($taxId);
    }

    /**
     * @param string $taxId
     * @return string
     */
    private function getVatId(string $taxId): string
    {
        return $this->validator->getVatId($taxId);
    }
}
