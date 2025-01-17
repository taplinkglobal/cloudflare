<?php

namespace Taplink\Cloudflare\Configurations;

class AccessRules implements Configurations
{
    private $config;

    public function setIP(string $value)
    {
        $this->config = ['target' => 'ip', 'value' => $value];
    }

    public function setIPRange(string $value)
    {
        $this->config = ['target' => 'ip_range', 'value' => $value];
    }

    public function setCountry(string $value)
    {
        $this->config = ['target' => 'country', 'value' => $value];
    }

    public function setASN(string $value)
    {
        $this->config = ['target' => 'asn', 'value' => $value];
    }

    public function getArray(): array
    {
        return $this->config;
    }
}
