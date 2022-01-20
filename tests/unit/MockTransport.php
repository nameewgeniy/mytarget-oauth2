<?php
/**
 * User: Aleksandrov Artem
 * Date: 24.10.2019
 * Time: 20:59
 */

namespace nameewgeniy\myTarget\api\oauth2\tests\unit;

use GuzzleHttp\Client;
use nameewgeniy\myTarget\api\oauth2\Transport;

/**
 * Class MockTransport
 * @package nameewgeniy\myTarget\api\oauth2\tests\unit
 */
class MockTransport extends Transport
{
    public function __construct()
    {
        parent::__construct(new Client(), []);
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $options
     * @return array|object
     */
    public function request(string $method, string $path, array $options = [])
    {
        return ['method' => $method, 'path' => $path, 'options' => $options];
    }
}