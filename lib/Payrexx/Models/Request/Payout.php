<?php

namespace Payrexx\Models\Request;

use Payrexx\Models\Base;

class Payout extends Base
{
    protected $currency;

    protected $amount;

    protected $pspId;

    protected $statementDescriptor;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getPspId()
    {
        return $this->pspId;
    }

    /**
     * @param int $pspId
     */
    public function setPspId($pspId)
    {
        $this->pspId = $pspId;
    }

    /**
     * @return string|null
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }

    /**
     * @param string|null $statementDescriptor
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;
    }

    /**
     * @return \Payrexx\Models\Response\Payout
     */
    public function getResponseModel()
    {
        return new \Payrexx\Models\Response\Payout();
    }
}
