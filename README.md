# Cloudflare SDK (v4 API Binding for PHP 7) forked and modified by Tap.link team.

## Cloudflare API version 4

The Cloudflare API can be found [here](https://api.cloudflare.com/).
Each API call is provided via a similarly named function within various classes in the **Taplink\Cloudflare\Endpoints** namespace:

- [x] [DNS Records](https://www.cloudflare.com/dns/)
- [x] [DNS Analytics](https://api.cloudflare.com/#dns-analytics-table)
- [x] Zones
- [x] User Administration (partial)
- [x] [Cloudflare IPs](https://www.cloudflare.com/ips/)
- [x] [Page Rules](https://support.cloudflare.com/hc/en-us/articles/200168306-Is-there-a-tutorial-for-Page-Rules-)
- [x] [Web Application Firewall (WAF)](https://www.cloudflare.com/waf/)
- [ ] Virtual DNS Management
- [x] Custom hostnames
- [x] Manage TLS settings
- [x] Zone Lockdown and User-Agent Block rules
- [ ] Organization Administration
- [x] [Railgun](https://www.cloudflare.com/railgun/) administration
- [ ] [Keyless SSL](https://blog.cloudflare.com/keyless-ssl-the-nitty-gritty-technical-details/)
- [x] [Origin CA](https://blog.cloudflare.com/universal-ssl-encryption-all-the-way-to-the-origin-for-free/)
- [x] Crypto
- [x] Load Balancers
- [x] Firewall Settings

Note that this repository is currently under development, additional classes and endpoints being actively added.

## Getting Started

```php
$key     = new Taplink\Cloudflare\Auth\APIKey('user@example.com', 'apiKey');
$adapter = new Taplink\Cloudflare\Adapter\Guzzle($key);
$user    = new Taplink\Cloudflare\Endpoints\User($adapter);

echo $user->getUserID();
```

## Contributions

We welcome community contribution to this repository. [CONTRIBUTING.md](CONTRIBUTING.md) will help you start contributing.

## Licensing

Licensed under the 3-clause BSD license. See the [LICENSE](LICENSE) file for details.
