<?php

/**
 * PaymentMethod response model
 *
 * @copyright   Payrexx AG
 * @author      Payrexx Development Team <info@payrexx.com>
 */
namespace Payrexx\Models\Response;

/**
 * PaymentMethod class
 *
 * @package Payrexx\Models\Response
 */
class PaymentMethod extends \Payrexx\Models\Request\PaymentMethod
{
    /** @var string */
    protected $name;

    /** @var array */
    protected $label;

    /** @var array */
    protected $logo;

    /** @var array */
    protected $options_by_psp;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param array $label
     */
    public function setLabel(array $label)
    {
        $this->label = $label;
    }

    /**
     * @return array
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param array $logo
     */
    public function setLogo(array $logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return array
     */
    public function getoptions_by_psp()
    {
        return $this->options_by_psp;
    }

    /**
     * @param array $options_by_psp
     */
    public function setoptions_by_psp(array $options_by_psp)
    {
        $this->options_by_psp = $options_by_psp;
    }
}
