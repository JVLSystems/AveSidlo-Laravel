<?php

namespace App\Services\OrSR\Libs;

use SoapClient;

class TaxIdValidator
{

    /**
     * @const
     */
    private const COUNTRY_CODE = 'SK';

    /**
     * @const
     */
    private const TAXATION_URL = 'http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl';

    /**
     * @param string $taxId
     * @return bool
     */
    public function validate(string $taxId): bool
    {
        try {
            $client = new SoapClient(self::TAXATION_URL);

            $result = $client->checkVat(array(
                'countryCode' => self::COUNTRY_CODE,
                'vatNumber' => $taxId
            ));

            if ($result->valid) {
                return true;
            }
        } catch (\SoapFault $e) {
        }

        return false;
    }

    /**
     * @param string $taxId
     * @return string
     */
    public function getVatId(string $taxId): string
    {
        return self::COUNTRY_CODE . $taxId;
    }

}
