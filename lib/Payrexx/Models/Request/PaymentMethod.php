<?php

/**
 * PaymentMethod request model
 *
 * @copyright   Payrexx AG
 * @author      Payrexx Development Team <info@payrexx.com>
 */
namespace Payrexx\Models\Request;

/**
 * PaymentMethod class
 *
 * @package Payrexx\Models\Request
 */
class PaymentMethod extends \Payrexx\Models\Base
{
    /** @var string */
    protected $filterCurrency;

    /** @var string */
    protected $filterPaymentType;

    /** @var int */
    protected $filterPsp;

    /**
     * @return string
     */
    public function getFilterCurrency()
    {
        return $this->filterCurrency;
    }

    /**
     * @param string $filterCurrency
     */
    public function setFilterCurrency($filterCurrency)
    {
        $this->filterCurrency = $filterCurrency;
    }

    /**
     * @return string
     */
    public function getFilterPaymentType()
    {
        return $this->filterPaymentType;
    }

    /**
     * @param string $filterPaymentType
     */
    public function setFilterPaymentType($filterPaymentType)
    {
        $this->filterPaymentType = $filterPaymentType;
    }

    /**
     * @return int
     */
    public function getFilterPsp()
    {
        return $this->filterPsp;
    }

    /**
     * @param int $filterPsp
     */
    public function setFilterPsp($filterPsp)
    {
        $this->filterPsp = $filterPsp;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Payrexx\Models\Response\PaymentMethod();
    }
}
