<?php
namespace WebcrawlerVerifier\Webcrawler;

use WebcrawlerVerifier\DNS\ReverseVerifier;

class DassaultSystemesVerifier implements VerifierInterface
{
    protected $allowedHostNames = ['exabot.com'];

    /**
     * Checks whether the given IP address really belongs to a valid host or not
     *
     * @param $ip string the IP address to check
     * @return bool true if the given IP belongs to any of the valid hosts, otherwise false
     */
    public function verify($ip)
    {
        return ReverseVerifier::verify($ip, $this->allowedHostNames);
    }
}
