<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The visibleAlsoForOrder
     * @var bool|null
     */
    protected ?bool $visibleAlsoForOrder = null;
    /**
     * Constructor method for GetHistoryRequest
     * @uses GetHistoryRequest::setMidocoCustomerId()
     * @uses GetHistoryRequest::setVisibleAlsoForOrder()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param bool $visibleAlsoForOrder
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?bool $visibleAlsoForOrder = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setVisibleAlsoForOrder($visibleAlsoForOrder);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetHistoryRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get visibleAlsoForOrder value
     * @return bool|null
     */
    public function getVisibleAlsoForOrder(): ?bool
    {
        return $this->visibleAlsoForOrder;
    }
    /**
     * Set visibleAlsoForOrder value
     * @param bool $visibleAlsoForOrder
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetHistoryRequest
     */
    public function setVisibleAlsoForOrder(?bool $visibleAlsoForOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visibleAlsoForOrder) && !is_bool($visibleAlsoForOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visibleAlsoForOrder, true), gettype($visibleAlsoForOrder)), __LINE__);
        }
        $this->visibleAlsoForOrder = $visibleAlsoForOrder;
        
        return $this;
    }
}
