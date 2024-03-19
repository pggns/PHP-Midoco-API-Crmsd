<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentConditionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentConditionsRequest extends AbstractStructBase
{
    /**
     * The conditionId
     * @var string|null
     */
    protected ?string $conditionId = null;
    /**
     * Constructor method for GetPaymentConditionsRequest
     * @uses GetPaymentConditionsRequest::setConditionId()
     * @param string $conditionId
     */
    public function __construct(?string $conditionId = null)
    {
        $this
            ->setConditionId($conditionId);
    }
    /**
     * Get conditionId value
     * @return string|null
     */
    public function getConditionId(): ?string
    {
        return $this->conditionId;
    }
    /**
     * Set conditionId value
     * @param string $conditionId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPaymentConditionsRequest
     */
    public function setConditionId(?string $conditionId = null): self
    {
        // validation for constraint: string
        if (!is_null($conditionId) && !is_string($conditionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionId, true), gettype($conditionId)), __LINE__);
        }
        $this->conditionId = $conditionId;
        
        return $this;
    }
}
