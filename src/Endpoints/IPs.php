<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 04/09/2017
 * Time: 19:56
 */

namespace Taplink\Cloudflare\Endpoints;

use Taplink\Cloudflare\Adapter\Adapter;
use Taplink\Cloudflare\Traits\BodyAccessorTrait;

class IPs implements API
{
    use BodyAccessorTrait;

    private $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function listIPs(): \stdClass
    {
        $ips = $this->adapter->get('ips');
        $this->body = json_decode($ips->getBody());

        return $this->body->result;
    }
}
