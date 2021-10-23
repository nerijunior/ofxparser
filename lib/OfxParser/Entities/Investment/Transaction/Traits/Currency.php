<?php

namespace OfxParser\Entities\Investment\Transaction\Traits;

use SimpleXMLElement;

/**
 * Parses currency properties
 */
trait Currency
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $currencyRate;

    /**
     * @param SimpleXMLElement $node
     * @return $this for chaining
     */
    protected function loadCurrency(SimpleXMLElement $node)
    {
        $this->currency = (string) $node->CURSYM;
        $this->currencyRate = (float) (string) $node->CURRATE;

        return $this;
    }
}
