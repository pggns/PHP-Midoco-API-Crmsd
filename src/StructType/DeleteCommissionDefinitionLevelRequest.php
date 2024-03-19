<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCommissionDefinitionLevelRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCommissionDefinitionLevelRequest extends AbstractStructBase
{
    /**
     * The commissionId
     * @var int|null
     */
    protected ?int $commissionId = null;
    /**
     * The leftMargin
     * @var float|null
     */
    protected ?float $leftMargin = null;
    /**
     * Constructor method for DeleteCommissionDefinitionLevelRequest
     * @uses DeleteCommissionDefinitionLevelRequest::setCommissionId()
     * @uses DeleteCommissionDefinitionLevelRequest::setLeftMargin()
     * @param int $commissionId
     * @param float $leftMargin
     */
    public function __construct(?int $commissionId = null, ?float $leftMargin = null)
    {
        $this
            ->setCommissionId($commissionId)
            ->setLeftMargin($leftMargin);
    }
    /**
     * Get commissionId value
     * @return int|null
     */
    public function getCommissionId(): ?int
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param int $commissionId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionLevelRequest
     */
    public function setCommissionId(?int $commissionId = null): self
    {
        // validation for constraint: int
        if (!is_null($commissionId) && !(is_int($commissionId) || ctype_digit($commissionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
        return $this;
    }
    /**
     * Get leftMargin value
     * @return float|null
     */
    public function getLeftMargin(): ?float
    {
        return $this->leftMargin;
    }
    /**
     * Set leftMargin value
     * @param float $leftMargin
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionLevelRequest
     */
    public function setLeftMargin(?float $leftMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($leftMargin) && !(is_float($leftMargin) || is_numeric($leftMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($leftMargin, true), gettype($leftMargin)), __LINE__);
        }
        $this->leftMargin = $leftMargin;
        
        return $this;
    }
}
