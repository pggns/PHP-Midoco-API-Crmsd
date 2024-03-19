<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactMediaListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetContactMediaListResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMedia
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactMedia
     * @var \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO[]
     */
    protected ?array $MidocoContactMedia = null;
    /**
     * Constructor method for GetContactMediaListResponse
     * @uses GetContactMediaListResponse::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO[] $midocoContactMedia
     */
    public function __construct(?array $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO[]
     */
    public function getMidocoContactMedia(): ?array
    {
        return $this->MidocoContactMedia;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactMedia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactMedia method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactMediaForArrayConstraintFromSetMidocoContactMedia(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getContactMediaListResponseMidocoContactMediaItem) {
            // validation for constraint: itemType
            if (!$getContactMediaListResponseMidocoContactMediaItem instanceof \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO) {
                $invalidValues[] = is_object($getContactMediaListResponseMidocoContactMediaItem) ? get_class($getContactMediaListResponseMidocoContactMediaItem) : sprintf('%s(%s)', gettype($getContactMediaListResponseMidocoContactMediaItem), var_export($getContactMediaListResponseMidocoContactMediaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactMedia property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactMedia value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO[] $midocoContactMedia
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactMediaListResponse
     */
    public function setMidocoContactMedia(?array $midocoContactMedia = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactMediaArrayErrorMessage = self::validateMidocoContactMediaForArrayConstraintFromSetMidocoContactMedia($midocoContactMedia))) {
            throw new InvalidArgumentException($midocoContactMediaArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
    /**
     * Add item to MidocoContactMedia value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetContactMediaListResponse
     */
    public function addToMidocoContactMedia(\Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoContactMedia property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\ContactMediaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactMedia[] = $item;
        
        return $this;
    }
}
