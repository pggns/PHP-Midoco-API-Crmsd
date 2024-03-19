<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFrequentFlyerNumberRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveFrequentFlyerNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoFrequentFlyerNumber
     * @var \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $MidocoFrequentFlyerNumber = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveFrequentFlyerNumberRequest
     * @uses SaveFrequentFlyerNumberRequest::setMidocoFrequentFlyerNumber()
     * @uses SaveFrequentFlyerNumberRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoFrequentFlyerNumber value
     * @return \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO|null
     */
    public function getMidocoFrequentFlyerNumber(): ?\Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO
    {
        return $this->MidocoFrequentFlyerNumber;
    }
    /**
     * Set MidocoFrequentFlyerNumber value
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveFrequentFlyerNumberRequest
     */
    public function setMidocoFrequentFlyerNumber(?\Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber = null): self
    {
        $this->MidocoFrequentFlyerNumber = $midocoFrequentFlyerNumber;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveFrequentFlyerNumberRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
