<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoMandateResponse extends AbstractStructBase
{
    /**
     * The mandateId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The mandateReference
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * Constructor method for SaveMidocoMandateResponse
     * @uses SaveMidocoMandateResponse::setMandateId()
     * @uses SaveMidocoMandateResponse::setMandateReference()
     * @param int $mandateId
     * @param string $mandateReference
     */
    public function __construct(?int $mandateId = null, ?string $mandateReference = null)
    {
        $this
            ->setMandateId($mandateId)
            ->setMandateReference($mandateReference);
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoMandateResponse
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveMidocoMandateResponse
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
}
