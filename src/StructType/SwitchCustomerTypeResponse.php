<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SwitchCustomerTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SwitchCustomerTypeResponse extends AbstractStructBase
{
    /**
     * The isSwitched
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $isSwitched;
    /**
     * Constructor method for SwitchCustomerTypeResponse
     * @uses SwitchCustomerTypeResponse::setIsSwitched()
     * @param bool $isSwitched
     */
    public function __construct(bool $isSwitched)
    {
        $this
            ->setIsSwitched($isSwitched);
    }
    /**
     * Get isSwitched value
     * @return bool
     */
    public function getIsSwitched(): bool
    {
        return $this->isSwitched;
    }
    /**
     * Set isSwitched value
     * @param bool $isSwitched
     * @return \Pggns\MidocoApi\Crmsd\StructType\SwitchCustomerTypeResponse
     */
    public function setIsSwitched(bool $isSwitched): self
    {
        // validation for constraint: boolean
        if (!is_null($isSwitched) && !is_bool($isSwitched)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSwitched, true), gettype($isSwitched)), __LINE__);
        }
        $this->isSwitched = $isSwitched;
        
        return $this;
    }
}
