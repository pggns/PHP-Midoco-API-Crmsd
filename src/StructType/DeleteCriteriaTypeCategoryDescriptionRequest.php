<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCriteriaTypeCategoryDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCriteriaTypeCategoryDescriptionRequest extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $categoryId;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $cultureId;
    /**
     * Constructor method for DeleteCriteriaTypeCategoryDescriptionRequest
     * @uses DeleteCriteriaTypeCategoryDescriptionRequest::setCategoryId()
     * @uses DeleteCriteriaTypeCategoryDescriptionRequest::setCultureId()
     * @param int $categoryId
     * @param string $cultureId
     */
    public function __construct(int $categoryId, string $cultureId)
    {
        $this
            ->setCategoryId($categoryId)
            ->setCultureId($cultureId);
    }
    /**
     * Get categoryId value
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryDescriptionRequest
     */
    public function setCategoryId(int $categoryId): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string
     */
    public function getCultureId(): string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryDescriptionRequest
     */
    public function setCultureId(string $cultureId): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
}
