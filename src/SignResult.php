<?php
/**
 * author: mycoool
 * datetime: 2024/1/18 14:02
 */

namespace WeBaseCDK;

class SignResult{
    public $txHash;
    public $signed;

    function __construct(string $txHash, $signed) {
        $this->txHash = $txHash;
        $this->signed = $signed;
    }
}