<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveComplaintResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveComplaint --- saves a complaint
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveComplaintResponse extends AbstractStructBase
{
    /**
     * The complaintId
     * @var int|null
     */
    protected ?int $complaintId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveComplaintResponse
     * @uses SaveComplaintResponse::setComplaintId()
     * @uses SaveComplaintResponse::setInternalVersion()
     * @param int $complaintId
     * @param int $internalVersion
     */
    public function __construct(?int $complaintId = null, ?int $internalVersion = null)
    {
        $this
            ->setComplaintId($complaintId)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get complaintId value
     * @return int|null
     */
    public function getComplaintId(): ?int
    {
        return $this->complaintId;
    }
    /**
     * Set complaintId value
     * @param int $complaintId
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveComplaintResponse
     */
    public function setComplaintId(?int $complaintId = null): self
    {
        // validation for constraint: int
        if (!is_null($complaintId) && !(is_int($complaintId) || ctype_digit($complaintId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($complaintId, true), gettype($complaintId)), __LINE__);
        }
        $this->complaintId = $complaintId;
        
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
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveComplaintResponse
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
