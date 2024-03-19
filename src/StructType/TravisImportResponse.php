<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravisImportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravisImportResponse extends AbstractStructBase
{
    /**
     * The ImportCustomersStatus
     * @var \Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus $ImportCustomersStatus = null;
    /**
     * The ImportContactsStatus
     * @var \Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus $ImportContactsStatus = null;
    /**
     * The ImportAttributesStatus
     * @var \Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus $ImportAttributesStatus = null;
    /**
     * The ImportBookingsStatus
     * @var \Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus $ImportBookingsStatus = null;
    /**
     * The ImportTravellersStatus
     * @var \Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus $ImportTravellersStatus = null;
    /**
     * Constructor method for TravisImportResponse
     * @uses TravisImportResponse::setImportCustomersStatus()
     * @uses TravisImportResponse::setImportContactsStatus()
     * @uses TravisImportResponse::setImportAttributesStatus()
     * @uses TravisImportResponse::setImportBookingsStatus()
     * @uses TravisImportResponse::setImportTravellersStatus()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus $importCustomersStatus
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus $importContactsStatus
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus $importAttributesStatus
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus $importBookingsStatus
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus $importTravellersStatus
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus $importCustomersStatus = null, ?\Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus $importContactsStatus = null, ?\Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus $importAttributesStatus = null, ?\Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus $importBookingsStatus = null, ?\Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus $importTravellersStatus = null)
    {
        $this
            ->setImportCustomersStatus($importCustomersStatus)
            ->setImportContactsStatus($importContactsStatus)
            ->setImportAttributesStatus($importAttributesStatus)
            ->setImportBookingsStatus($importBookingsStatus)
            ->setImportTravellersStatus($importTravellersStatus);
    }
    /**
     * Get ImportCustomersStatus value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus|null
     */
    public function getImportCustomersStatus(): ?\Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus
    {
        return $this->ImportCustomersStatus;
    }
    /**
     * Set ImportCustomersStatus value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus $importCustomersStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportResponse
     */
    public function setImportCustomersStatus(?\Pggns\MidocoApi\Crmsd\StructType\ImportCustomersStatus $importCustomersStatus = null): self
    {
        $this->ImportCustomersStatus = $importCustomersStatus;
        
        return $this;
    }
    /**
     * Get ImportContactsStatus value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus|null
     */
    public function getImportContactsStatus(): ?\Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus
    {
        return $this->ImportContactsStatus;
    }
    /**
     * Set ImportContactsStatus value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus $importContactsStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportResponse
     */
    public function setImportContactsStatus(?\Pggns\MidocoApi\Crmsd\StructType\ImportContactsStatus $importContactsStatus = null): self
    {
        $this->ImportContactsStatus = $importContactsStatus;
        
        return $this;
    }
    /**
     * Get ImportAttributesStatus value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus|null
     */
    public function getImportAttributesStatus(): ?\Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus
    {
        return $this->ImportAttributesStatus;
    }
    /**
     * Set ImportAttributesStatus value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus $importAttributesStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportResponse
     */
    public function setImportAttributesStatus(?\Pggns\MidocoApi\Crmsd\StructType\ImportAttributesStatus $importAttributesStatus = null): self
    {
        $this->ImportAttributesStatus = $importAttributesStatus;
        
        return $this;
    }
    /**
     * Get ImportBookingsStatus value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus|null
     */
    public function getImportBookingsStatus(): ?\Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus
    {
        return $this->ImportBookingsStatus;
    }
    /**
     * Set ImportBookingsStatus value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus $importBookingsStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportResponse
     */
    public function setImportBookingsStatus(?\Pggns\MidocoApi\Crmsd\StructType\ImportBookingsStatus $importBookingsStatus = null): self
    {
        $this->ImportBookingsStatus = $importBookingsStatus;
        
        return $this;
    }
    /**
     * Get ImportTravellersStatus value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus|null
     */
    public function getImportTravellersStatus(): ?\Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus
    {
        return $this->ImportTravellersStatus;
    }
    /**
     * Set ImportTravellersStatus value
     * @param \Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus $importTravellersStatus
     * @return \Pggns\MidocoApi\Crmsd\StructType\TravisImportResponse
     */
    public function setImportTravellersStatus(?\Pggns\MidocoApi\Crmsd\StructType\ImportTravellersStatus $importTravellersStatus = null): self
    {
        $this->ImportTravellersStatus = $importTravellersStatus;
        
        return $this;
    }
}
