<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSettlMDocLevelRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoSettlMDocLevelRequest extends AbstractStructBase
{
    /**
     * The settlMdocLevelId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $settlMdocLevelId;
    /**
     * Constructor method for DeleteMidocoSettlMDocLevelRequest
     * @uses DeleteMidocoSettlMDocLevelRequest::setSettlMdocLevelId()
     * @param int $settlMdocLevelId
     */
    public function __construct(int $settlMdocLevelId)
    {
        $this
            ->setSettlMdocLevelId($settlMdocLevelId);
    }
    /**
     * Get settlMdocLevelId value
     * @return int
     */
    public function getSettlMdocLevelId(): int
    {
        return $this->settlMdocLevelId;
    }
    /**
     * Set settlMdocLevelId value
     * @param int $settlMdocLevelId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteMidocoSettlMDocLevelRequest
     */
    public function setSettlMdocLevelId(int $settlMdocLevelId): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocLevelId) && !(is_int($settlMdocLevelId) || ctype_digit($settlMdocLevelId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocLevelId, true), gettype($settlMdocLevelId)), __LINE__);
        }
        $this->settlMdocLevelId = $settlMdocLevelId;
        
        return $this;
    }
}
