<?php

/**
 * Transaction request model
 *
 * @copyright   Payrexx AG
 * @author      Payrexx Development Team <info@payrexx.com>
 */
namespace Payrexx\Models\Request;

/**
 * Transaction class
 *
 * @package Payrexx\Models\Request
 */
class Transaction extends \Payrexx\Models\Base
{
    /** @var int $amount */
    protected $amount;
    /** @var string $currency */
    protected $currency;
    /** @var string $purpose */
    protected $purpose;
    /** @var float $vatRate */
    protected $vatRate;
    /** @var array $fields */
    protected $fields;
    /** @var string $referenceId */
    protected $referenceId;
    /** @var string $recipient */
    protected $recipient;
    protected $filterDatetimeUtcGreaterThan;
    protected $filterDatetimeUtcLessThan;
    protected $filterMyTransactionsOnly = false;
    protected $offset;
    protected $limit;

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
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param string $purpose
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
    }

    /**
     * @return float|null
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * @param float $vatRate
     */
    public function setVatRate($vatRate)
    {
        $this->vatRate = $vatRate;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return isset($this->fields) ? $this->fields : [];
    }

    /**
     * @param string $type
     * @param string $value
     * @param array $name
     * @return void
     */
    public function addField($type, $value, array $name = [])
    {
        $this->fields[$type] = [
            'value' => $value,
            'name' => $name,
        ];
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    /**
     * @return \DateTime
     */
    public function getFilterDatetimeUtcGreaterThan()
    {
        return $this->filterDatetimeUtcGreaterThan;
    }

    /**
     * @param \DateTime $filterDatetimeUtcGreaterThan
     */
    public function setFilterDatetimeUtcGreaterThan(\DateTime $filterDatetimeUtcGreaterThan)
    {
        $this->filterDatetimeUtcGreaterThan = $filterDatetimeUtcGreaterThan->setTimezone(new \DateTimeZone('UTC'))->format('Y-m-d H:i:s');
    }

    /**
     * @return \DateTime
     */
    public function getFilterDatetimeUtcLessThan()
    {
        return $this->filterDatetimeUtcLessThan;
    }

    /**
     * @param \DateTime $filterDatetimeUtcLessThan
     */
    public function setFilterDatetimeUtcLessThan(\DateTime $filterDatetimeUtcLessThan)
    {
        $this->filterDatetimeUtcLessThan = $filterDatetimeUtcLessThan->setTimezone(new \DateTimeZone('UTC'))->format('Y-m-d H:i:s');
    }

    /**
     * @return bool
     */
    public function getFilterMyTransactionsOnly()
    {
        return $this->filterMyTransactionsOnly;
    }

    /**
     * @param bool $filterMyTransactionsOnly
     */
    public function setFilterMyTransactionsOnly($filterMyTransactionsOnly)
    {
        $this->filterMyTransactionsOnly = $filterMyTransactionsOnly;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Payrexx\Models\Response\Transaction();
    }
}
