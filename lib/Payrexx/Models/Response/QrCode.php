<?php

namespace Payrexx\Models\Response;

class QrCode extends \Payrexx\Models\Request\QrCode
{
    /** @var string */
    protected $qrCode;

    /** @var string */
    protected $uuid;

    /** @var string */
    protected $png;

    /** @var string */
    protected $svg;

    /**
     * @param string $png
     */
    public function setPng($png)
    {
        $this->png = $png;
    }

    /**
     * @return string
     */
    public function getPng()
    {
        return $this->png;
    }

    /**
     * @param string $svg
     */
    public function setSvg($svg)
    {
        $this->svg = $svg;
    }

    /**
     * @return string
     */
    public function getSvg()
    {
        return $this->svg;
    }

    /**
     * @return string
     */
    public function getQrCode()
    {
        return $this->qrCode;
    }

    /**
     * @param string $qrCode
     */
    public function setQrCode($qrCode)
    {
        $this->qrCode = $qrCode;
    }
}
