<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParseAmadeusImportStringRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ParseAmadeusImportStringRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The xml
     * @var string|null
     */
    protected ?string $xml = null;
    /**
     * Constructor method for ParseAmadeusImportStringRequest
     * @uses ParseAmadeusImportStringRequest::setCustomerId()
     * @uses ParseAmadeusImportStringRequest::setXml()
     * @param int $customerId
     * @param string $xml
     */
    public function __construct(?int $customerId = null, ?string $xml = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setXml($xml);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ParseAmadeusImportStringRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get xml value
     * @return string|null
     */
    public function getXml(): ?string
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param string $xml
     * @return \Pggns\MidocoApi\Crmsd\StructType\ParseAmadeusImportStringRequest
     */
    public function setXml(?string $xml = null): self
    {
        // validation for constraint: string
        if (!is_null($xml) && !is_string($xml)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xml, true), gettype($xml)), __LINE__);
        }
        $this->xml = $xml;
        
        return $this;
    }
}
