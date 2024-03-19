<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSettlMDocRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoSettlMDocRequest extends AbstractStructBase
{
    /**
     * The settlMdocId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $settlMdocId;
    /**
     * Constructor method for DeleteMidocoSettlMDocRequest
     * @uses DeleteMidocoSettlMDocRequest::setSettlMdocId()
     * @param int $settlMdocId
     */
    public function __construct(int $settlMdocId)
    {
        $this
            ->setSettlMdocId($settlMdocId);
    }
    /**
     * Get settlMdocId value
     * @return int
     */
    public function getSettlMdocId(): int
    {
        return $this->settlMdocId;
    }
    /**
     * Set settlMdocId value
     * @param int $settlMdocId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteMidocoSettlMDocRequest
     */
    public function setSettlMdocId(int $settlMdocId): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocId) && !(is_int($settlMdocId) || ctype_digit($settlMdocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocId, true), gettype($settlMdocId)), __LINE__);
        }
        $this->settlMdocId = $settlMdocId;
        
        return $this;
    }
}
