<?php
declare(strict_types=1);
namespace TwelveData\Api;

/**
 * Class General
 * @package TwelveData\Api
 */
class General extends TDApi {

    /**
     * @param array $params
     *
     * @return array
     */
    public function usage(
        array $params = []
    ) {

        return $this->get(
            'api_usage', 
            $params);
    }
}
?>