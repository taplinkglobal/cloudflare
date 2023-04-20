<?php

namespace Taplink\Cloudflare\Endpoints;

use stdClass;
use Taplink\Cloudflare\Adapter\Adapter;
use Taplink\Cloudflare\Traits\BodyAccessorTrait;

class AccountRoles implements API
{
    use BodyAccessorTrait;

    /**
     * @var Adapter
     */
    private $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function listAccountRoles(string $accountId): stdClass
    {
        $roles = $this->adapter->get('accounts/'.$accountId.'/roles');
        $this->body = json_decode($roles->getBody());

        return (object) [
            'result'      => $this->body->result,
            'result_info' => $this->body->result_info,
        ];
    }
}
