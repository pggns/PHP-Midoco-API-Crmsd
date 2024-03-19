<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyProperties StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencyProperties extends AbstractStructBase
{
    /**
     * The exportSystem
     * @var string|null
     */
    protected ?string $exportSystem = null;
    /**
     * The extAgencyNo
     * @var string|null
     */
    protected ?string $extAgencyNo = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * Constructor method for AgencyProperties
     * @uses AgencyProperties::setExportSystem()
     * @uses AgencyProperties::setExtAgencyNo()
     * @uses AgencyProperties::setCooperationId()
     * @param string $exportSystem
     * @param string $extAgencyNo
     * @param string $cooperationId
     */
    public function __construct(?string $exportSystem = null, ?string $extAgencyNo = null, ?string $cooperationId = null)
    {
        $this
            ->setExportSystem($exportSystem)
            ->setExtAgencyNo($extAgencyNo)
            ->setCooperationId($cooperationId);
    }
    /**
     * Get exportSystem value
     * @return string|null
     */
    public function getExportSystem(): ?string
    {
        return $this->exportSystem;
    }
    /**
     * Set exportSystem value
     * @param string $exportSystem
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyProperties
     */
    public function setExportSystem(?string $exportSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($exportSystem) && !is_string($exportSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportSystem, true), gettype($exportSystem)), __LINE__);
        }
        $this->exportSystem = $exportSystem;
        
        return $this;
    }
    /**
     * Get extAgencyNo value
     * @return string|null
     */
    public function getExtAgencyNo(): ?string
    {
        return $this->extAgencyNo;
    }
    /**
     * Set extAgencyNo value
     * @param string $extAgencyNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyProperties
     */
    public function setExtAgencyNo(?string $extAgencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($extAgencyNo) && !is_string($extAgencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extAgencyNo, true), gettype($extAgencyNo)), __LINE__);
        }
        $this->extAgencyNo = $extAgencyNo;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyProperties
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
}
