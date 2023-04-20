<?php
/**
 * User: junade
 * Date: 01/02/2017
 * Time: 12:31
 */

namespace Taplink\Cloudflare\Endpoints;

use Taplink\Cloudflare\Adapter\Adapter;

interface API
{
    public function __construct(Adapter $adapter);
}
