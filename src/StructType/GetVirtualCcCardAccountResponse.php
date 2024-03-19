<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualCcCardAccountResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVirtualCcCardAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCardAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVirtualCcCardAccount
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount[]
     */
    protected ?array $MidocoVirtualCcCardAccount = null;
    /**
     * Constructor method for GetVirtualCcCardAccountResponse
     * @uses GetVirtualCcCardAccountResponse::setMidocoVirtualCcCardAccount()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount[] $midocoVirtualCcCardAccount
     */
    public function __construct(?array $midocoVirtualCcCardAccount = null)
    {
        $this
            ->setMidocoVirtualCcCardAccount($midocoVirtualCcCardAccount);
    }
    /**
     * Get MidocoVirtualCcCardAccount value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount[]
     */
    public function getMidocoVirtualCcCardAccount(): ?array
    {
        return $this->MidocoVirtualCcCardAccount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVirtualCcCardAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVirtualCcCardAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVirtualCcCardAccountForArrayConstraintFromSetMidocoVirtualCcCardAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVirtualCcCardAccountResponseMidocoVirtualCcCardAccountItem) {
            // validation for constraint: itemType
            if (!$getVirtualCcCardAccountResponseMidocoVirtualCcCardAccountItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount) {
                $invalidValues[] = is_object($getVirtualCcCardAccountResponseMidocoVirtualCcCardAccountItem) ? get_class($getVirtualCcCardAccountResponseMidocoVirtualCcCardAccountItem) : sprintf('%s(%s)', gettype($getVirtualCcCardAccountResponseMidocoVirtualCcCardAccountItem), var_export($getVirtualCcCardAccountResponseMidocoVirtualCcCardAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVirtualCcCardAccount property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVirtualCcCardAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount[] $midocoVirtualCcCardAccount
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetVirtualCcCardAccountResponse
     */
    public function setMidocoVirtualCcCardAccount(?array $midocoVirtualCcCardAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVirtualCcCardAccountArrayErrorMessage = self::validateMidocoVirtualCcCardAccountForArrayConstraintFromSetMidocoVirtualCcCardAccount($midocoVirtualCcCardAccount))) {
            throw new InvalidArgumentException($midocoVirtualCcCardAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoVirtualCcCardAccount = $midocoVirtualCcCardAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoVirtualCcCardAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetVirtualCcCardAccountResponse
     */
    public function addToMidocoVirtualCcCardAccount(\Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount) {
            throw new InvalidArgumentException(sprintf('The MidocoVirtualCcCardAccount property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoVirtualCcCardAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVirtualCcCardAccount[] = $item;
        
        return $this;
    }
}
