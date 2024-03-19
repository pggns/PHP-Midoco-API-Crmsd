<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTasksRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderTasksRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $MidocoContactHistory = null;
    /**
     * Constructor method for GetOrderTasksRequest
     * @uses GetOrderTasksRequest::setMidocoCustomerId()
     * @uses GetOrderTasksRequest::setMidocoContactHistory()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $midocoContactHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null, ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $midocoContactHistory = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoContactHistory($midocoContactHistory);
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetOrderTasksRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory|null
     */
    public function getMidocoContactHistory(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory
    {
        return $this->MidocoContactHistory;
    }
    /**
     * Set MidocoContactHistory value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $midocoContactHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetOrderTasksRequest
     */
    public function setMidocoContactHistory(?\Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $midocoContactHistory = null): self
    {
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
}
