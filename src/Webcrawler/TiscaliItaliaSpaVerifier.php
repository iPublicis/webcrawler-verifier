<?php
namespace WebcrawlerVerifier\Webcrawler;

use WebcrawlerVerifier\DNS\ReverseVerifier;

class TiscaliItaliaSpaVerifier implements VerifierInterface
{
    protected $allowedHostNames = ['istella.it'];

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
