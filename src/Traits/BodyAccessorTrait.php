<?php

namespace Taplink\Cloudflare\Traits;

trait BodyAccessorTrait
{
    private $body;

    public function getBody()
    {
        return $this->body;
    }
}
