<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportRawCustomerRequest StructType
 * @subpackage Structs
 */
class ImportRawCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO
     */
    protected \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $MidocoCrmCustomer;
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    protected array $MidocoCrmAddress = [];
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[]
     */
    protected array $MidocoContactEntry = [];
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard[]
     */
    protected array $MidocoCrmCcCard = [];
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[]
     */
    protected array $MidocoCrmDebitCard = [];
    /**
     * The MidocoCrmBonusCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmBonusCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard[]
     */
    protected array $MidocoCrmBonusCard = [];
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[]
     */
    protected array $MidocoCrmCriteria = [];
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[]
     */
    protected array $MidocoCrmNotice = [];
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[]
     */
    protected array $MidocoContactHistory = [];
    /**
     * The MidocoAssignCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO[]
     */
    protected array $MidocoAssignCustomer = [];
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[]
     */
    protected array $MidocoCustomerTravel = [];
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO[]
     */
    protected array $MidocoCrmPersonTraveller = [];
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * The MidocoFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFrequentFlyerNumber
     * @var \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[]
     */
    protected array $MidocoFrequentFlyerNumber = [];
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[]
     */
    protected array $MidocoMandate = [];
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[]
     */
    protected array $MidocoCustomerMf = [];
    /**
     * The AgencyProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AgencyProperties
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyProperties|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AgencyProperties $AgencyProperties = null;
    /**
     * The SaveMidocoAgencyDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: SaveMidocoAgencyDetails
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $SaveMidocoAgencyDetails = null;
    /**
     * The collectiveInvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $collectiveInvoice = null;
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO[]
     */
    protected array $MidocoAgencyCommission = [];
    /**
     * The MidocoAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCooperationHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[]
     */
    protected array $MidocoAgencyCooperationHistory = [];
    /**
     * The customerCommissionId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $customerCommissionId = [];
    /**
     * The useDebitorNoInSearch
     * @var bool|null
     */
    protected ?bool $useDebitorNoInSearch = null;
    /**
     * The useEmailInSearch
     * @var bool|null
     */
    protected ?bool $useEmailInSearch = null;
    /**
     * The setDefaultContact
     * @var bool|null
     */
    protected ?bool $setDefaultContact = null;
    /**
     * The onlyNew
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyNew = null;
    /**
     * The updateCustInfo
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $updateCustInfo = null;
    /**
     * The matchOnlyCustomerId
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $matchOnlyCustomerId = null;
    /**
     * The useExtRefIdInSearch
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useExtRefIdInSearch = null;
    /**
     * Constructor method for ImportRawCustomerRequest
     * @uses ImportRawCustomerRequest::setMidocoCrmCustomer()
     * @uses ImportRawCustomerRequest::setMidocoCrmAddress()
     * @uses ImportRawCustomerRequest::setMidocoContactEntry()
     * @uses ImportRawCustomerRequest::setMidocoCrmCcCard()
     * @uses ImportRawCustomerRequest::setMidocoCrmDebitCard()
     * @uses ImportRawCustomerRequest::setMidocoCrmBonusCard()
     * @uses ImportRawCustomerRequest::setMidocoCrmCriteria()
     * @uses ImportRawCustomerRequest::setMidocoCrmNotice()
     * @uses ImportRawCustomerRequest::setMidocoContactHistory()
     * @uses ImportRawCustomerRequest::setMidocoAssignCustomer()
     * @uses ImportRawCustomerRequest::setMidocoCrmCustomerPayment()
     * @uses ImportRawCustomerRequest::setMidocoCustomerTravel()
     * @uses ImportRawCustomerRequest::setMidocoCrmPersonTraveller()
     * @uses ImportRawCustomerRequest::setMidocoDebitor()
     * @uses ImportRawCustomerRequest::setMidocoFrequentFlyerNumber()
     * @uses ImportRawCustomerRequest::setMidocoMandate()
     * @uses ImportRawCustomerRequest::setMidocoCustomerMf()
     * @uses ImportRawCustomerRequest::setAgencyProperties()
     * @uses ImportRawCustomerRequest::setSaveMidocoAgencyDetails()
     * @uses ImportRawCustomerRequest::setCollectiveInvoice()
     * @uses ImportRawCustomerRequest::setMidocoAgencyCommission()
     * @uses ImportRawCustomerRequest::setMidocoAgencyCooperationHistory()
     * @uses ImportRawCustomerRequest::setCustomerCommissionId()
     * @uses ImportRawCustomerRequest::setUseDebitorNoInSearch()
     * @uses ImportRawCustomerRequest::setUseEmailInSearch()
     * @uses ImportRawCustomerRequest::setSetDefaultContact()
     * @uses ImportRawCustomerRequest::setOnlyNew()
     * @uses ImportRawCustomerRequest::setUpdateCustInfo()
     * @uses ImportRawCustomerRequest::setMatchOnlyCustomerId()
     * @uses ImportRawCustomerRequest::setUseExtRefIdInSearch()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[] $midocoContactHistory
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO[] $midocoAssignCustomer
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[] $midocoMandate
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[] $midocoCustomerMf
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyProperties $agencyProperties
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails
     * @param bool $collectiveInvoice
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[] $midocoAgencyCooperationHistory
     * @param int[] $customerCommissionId
     * @param bool $useDebitorNoInSearch
     * @param bool $useEmailInSearch
     * @param bool $setDefaultContact
     * @param bool $onlyNew
     * @param bool $updateCustInfo
     * @param bool $matchOnlyCustomerId
     * @param bool $useExtRefIdInSearch
     */
    public function __construct(\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer, array $midocoCrmAddress = [], array $midocoContactEntry = [], array $midocoCrmCcCard = [], array $midocoCrmDebitCard = [], array $midocoCrmBonusCard = [], array $midocoCrmCriteria = [], array $midocoCrmNotice = [], array $midocoContactHistory = [], array $midocoAssignCustomer = [], ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null, array $midocoCustomerTravel = [], array $midocoCrmPersonTraveller = [], ?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor = null, array $midocoFrequentFlyerNumber = [], array $midocoMandate = [], array $midocoCustomerMf = [], ?\Pggns\MidocoApi\Crmsd\StructType\AgencyProperties $agencyProperties = null, ?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails = null, ?bool $collectiveInvoice = null, array $midocoAgencyCommission = [], array $midocoAgencyCooperationHistory = [], array $customerCommissionId = [], ?bool $useDebitorNoInSearch = null, ?bool $useEmailInSearch = null, ?bool $setDefaultContact = null, ?bool $onlyNew = false, ?bool $updateCustInfo = false, ?bool $matchOnlyCustomerId = false, ?bool $useExtRefIdInSearch = false)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoCrmBonusCard($midocoCrmBonusCard)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoAssignCustomer($midocoAssignCustomer)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setMidocoCustomerTravel($midocoCustomerTravel)
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller)
            ->setMidocoDebitor($midocoDebitor)
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber)
            ->setMidocoMandate($midocoMandate)
            ->setMidocoCustomerMf($midocoCustomerMf)
            ->setAgencyProperties($agencyProperties)
            ->setSaveMidocoAgencyDetails($saveMidocoAgencyDetails)
            ->setCollectiveInvoice($collectiveInvoice)
            ->setMidocoAgencyCommission($midocoAgencyCommission)
            ->setMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory)
            ->setCustomerCommissionId($customerCommissionId)
            ->setUseDebitorNoInSearch($useDebitorNoInSearch)
            ->setUseEmailInSearch($useEmailInSearch)
            ->setSetDefaultContact($setDefaultContact)
            ->setOnlyNew($onlyNew)
            ->setUpdateCustInfo($updateCustInfo)
            ->setMatchOnlyCustomerId($matchOnlyCustomerId)
            ->setUseExtRefIdInSearch($useExtRefIdInSearch);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO
     */
    public function getMidocoCrmCustomer(): \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmCustomer(\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmAddressItem) ? get_class($importRawCustomerRequestMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmAddressItem), var_export($importRawCustomerRequestMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmAddress(array $midocoCrmAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoContactEntryItem) ? get_class($importRawCustomerRequestMidocoContactEntryItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoContactEntryItem), var_export($importRawCustomerRequestMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoContactEntry(array $midocoContactEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard[]
     */
    public function getMidocoCrmCcCard(): array
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCcCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmCcCardItem) ? get_class($importRawCustomerRequestMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmCcCardItem), var_export($importRawCustomerRequestMidocoCrmCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmCcCard(array $midocoCrmCcCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCcCardArrayErrorMessage = self::validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard($midocoCrmCcCard))) {
            throw new InvalidArgumentException($midocoCrmCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmCcCard(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCcCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmDebitCardItem) ? get_class($importRawCustomerRequestMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmDebitCardItem), var_export($importRawCustomerRequestMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmDebitCard(array $midocoCrmDebitCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmBonusCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard[]
     */
    public function getMidocoCrmBonusCard(): array
    {
        return $this->MidocoCrmBonusCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmBonusCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmBonusCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmBonusCardForArrayConstraintsFromSetMidocoCrmBonusCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmBonusCardItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmBonusCardItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmBonusCardItem) ? get_class($importRawCustomerRequestMidocoCrmBonusCardItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmBonusCardItem), var_export($importRawCustomerRequestMidocoCrmBonusCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmBonusCard(array $midocoCrmBonusCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmBonusCardArrayErrorMessage = self::validateMidocoCrmBonusCardForArrayConstraintsFromSetMidocoCrmBonusCard($midocoCrmBonusCard))) {
            throw new InvalidArgumentException($midocoCrmBonusCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmBonusCard = $midocoCrmBonusCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmBonusCard(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmBonusCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[]
     */
    public function getMidocoCrmCriteria(): array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmCriteriaItem) ? get_class($importRawCustomerRequestMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmCriteriaItem), var_export($importRawCustomerRequestMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmCriteria(array $midocoCrmCriteria = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[]
     */
    public function getMidocoCrmNotice(): array
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmNoticeItem) ? get_class($importRawCustomerRequestMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmNoticeItem), var_export($importRawCustomerRequestMidocoCrmNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmNotice(array $midocoCrmNotice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeArrayErrorMessage = self::validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice($midocoCrmNotice))) {
            throw new InvalidArgumentException($midocoCrmNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmNotice(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[]
     */
    public function getMidocoContactHistory(): array
    {
        return $this->MidocoContactHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactHistoryForArrayConstraintsFromSetMidocoContactHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoContactHistoryItem) ? get_class($importRawCustomerRequestMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoContactHistoryItem), var_export($importRawCustomerRequestMidocoContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory[] $midocoContactHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoContactHistory(array $midocoContactHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactHistoryArrayErrorMessage = self::validateMidocoContactHistoryForArrayConstraintsFromSetMidocoContactHistory($midocoContactHistory))) {
            throw new InvalidArgumentException($midocoContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoContactHistory(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAssignCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO[]
     */
    public function getMidocoAssignCustomer(): array
    {
        return $this->MidocoAssignCustomer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAssignCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignCustomerForArrayConstraintsFromSetMidocoAssignCustomer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoAssignCustomerItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoAssignCustomerItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoAssignCustomerItem) ? get_class($importRawCustomerRequestMidocoAssignCustomerItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoAssignCustomerItem), var_export($importRawCustomerRequestMidocoAssignCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignCustomer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO[] $midocoAssignCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoAssignCustomer(array $midocoAssignCustomer = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignCustomerArrayErrorMessage = self::validateMidocoAssignCustomerForArrayConstraintsFromSetMidocoAssignCustomer($midocoAssignCustomer))) {
            throw new InvalidArgumentException($midocoAssignCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignCustomer = $midocoAssignCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoAssignCustomer(\Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignCustomer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCustomerTravelItem) ? get_class($importRawCustomerRequestMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCustomerTravelItem), var_export($importRawCustomerRequestMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCustomerTravel(array $midocoCustomerTravel = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO[]
     */
    public function getMidocoCrmPersonTraveller(): array
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTraveller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmPersonTravellerItem) ? get_class($importRawCustomerRequestMidocoCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmPersonTravellerItem), var_export($importRawCustomerRequestMidocoCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmPersonTraveller(array $midocoCrmPersonTraveller = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerArrayErrorMessage = self::validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller($midocoCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmPersonTraveller(\Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CrmPersonTravellerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Get MidocoFrequentFlyerNumber value
     * @return \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[]
     */
    public function getMidocoFrequentFlyerNumber(): array
    {
        return $this->MidocoFrequentFlyerNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFrequentFlyerNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFrequentFlyerNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFrequentFlyerNumberForArrayConstraintsFromSetMidocoFrequentFlyerNumber(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoFrequentFlyerNumberItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoFrequentFlyerNumberItem instanceof \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoFrequentFlyerNumberItem) ? get_class($importRawCustomerRequestMidocoFrequentFlyerNumberItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoFrequentFlyerNumberItem), var_export($importRawCustomerRequestMidocoFrequentFlyerNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoFrequentFlyerNumber(array $midocoFrequentFlyerNumber = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFrequentFlyerNumberArrayErrorMessage = self::validateMidocoFrequentFlyerNumberForArrayConstraintsFromSetMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber))) {
            throw new InvalidArgumentException($midocoFrequentFlyerNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoFrequentFlyerNumber = $midocoFrequentFlyerNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoFrequentFlyerNumber(\Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\FrequentFlyerNumberDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFrequentFlyerNumber[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[]
     */
    public function getMidocoMandate(): array
    {
        return $this->MidocoMandate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMandate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMandate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMandateForArrayConstraintsFromSetMidocoMandate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoMandateItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoMandateItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoMandateItem) ? get_class($importRawCustomerRequestMidocoMandateItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoMandateItem), var_export($importRawCustomerRequestMidocoMandateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate[] $midocoMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoMandate(array $midocoMandate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMandateArrayErrorMessage = self::validateMidocoMandateForArrayConstraintsFromSetMidocoMandate($midocoMandate))) {
            throw new InvalidArgumentException($midocoMandateArrayErrorMessage, __LINE__);
        }
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Add item to MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoMandate(\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate) {
            throw new InvalidArgumentException(sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMandate[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[]
     */
    public function getMidocoCustomerMf(): array
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMf method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMfForArrayConstraintsFromSetMidocoCustomerMf(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCustomerMfItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCustomerMfItem instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCustomerMfItem) ? get_class($importRawCustomerRequestMidocoCustomerMfItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCustomerMfItem), var_export($importRawCustomerRequestMidocoCustomerMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO[] $midocoCustomerMf
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCustomerMf(array $midocoCustomerMf = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMfArrayErrorMessage = self::validateMidocoCustomerMfForArrayConstraintsFromSetMidocoCustomerMf($midocoCustomerMf))) {
            throw new InvalidArgumentException($midocoCustomerMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCustomerMf(\Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\CustomerMfDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMf[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyProperties value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyProperties|null
     */
    public function getAgencyProperties(): ?\Pggns\MidocoApi\Crmsd\StructType\AgencyProperties
    {
        return $this->AgencyProperties;
    }
    /**
     * Set AgencyProperties value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyProperties $agencyProperties
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setAgencyProperties(?\Pggns\MidocoApi\Crmsd\StructType\AgencyProperties $agencyProperties = null): self
    {
        $this->AgencyProperties = $agencyProperties;
        
        return $this;
    }
    /**
     * Get SaveMidocoAgencyDetails value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO|null
     */
    public function getSaveMidocoAgencyDetails(): ?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO
    {
        return $this->SaveMidocoAgencyDetails;
    }
    /**
     * Set SaveMidocoAgencyDetails value
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setSaveMidocoAgencyDetails(?\Pggns\MidocoApi\Crmsd\StructType\AgencyDetailDTO $saveMidocoAgencyDetails = null): self
    {
        $this->SaveMidocoAgencyDetails = $saveMidocoAgencyDetails;
        
        return $this;
    }
    /**
     * Get collectiveInvoice value
     * @return bool|null
     */
    public function getCollectiveInvoice(): ?bool
    {
        return $this->collectiveInvoice;
    }
    /**
     * Set collectiveInvoice value
     * @param bool $collectiveInvoice
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setCollectiveInvoice(?bool $collectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoice) && !is_bool($collectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoice, true), gettype($collectiveInvoice)), __LINE__);
        }
        $this->collectiveInvoice = $collectiveInvoice;
        
        return $this;
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO[]
     */
    public function getMidocoAgencyCommission(): array
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCommission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoAgencyCommissionItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoAgencyCommissionItem instanceof \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoAgencyCommissionItem) ? get_class($importRawCustomerRequestMidocoAgencyCommissionItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoAgencyCommissionItem), var_export($importRawCustomerRequestMidocoAgencyCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoAgencyCommission(array $midocoAgencyCommission = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCommissionArrayErrorMessage = self::validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission($midocoAgencyCommission))) {
            throw new InvalidArgumentException($midocoAgencyCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoAgencyCommission(\Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\AgencyCommissionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCommission[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAgencyCooperationHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[]
     */
    public function getMidocoAgencyCooperationHistory(): array
    {
        return $this->MidocoAgencyCooperationHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyCooperationHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCooperationHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCooperationHistoryForArrayConstraintsFromSetMidocoAgencyCooperationHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoAgencyCooperationHistoryItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoAgencyCooperationHistoryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoAgencyCooperationHistoryItem) ? get_class($importRawCustomerRequestMidocoAgencyCooperationHistoryItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoAgencyCooperationHistoryItem), var_export($importRawCustomerRequestMidocoAgencyCooperationHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCooperationHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCooperationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory[] $midocoAgencyCooperationHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMidocoAgencyCooperationHistory(array $midocoAgencyCooperationHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCooperationHistoryArrayErrorMessage = self::validateMidocoAgencyCooperationHistoryForArrayConstraintsFromSetMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory))) {
            throw new InvalidArgumentException($midocoAgencyCooperationHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCooperationHistory = $midocoAgencyCooperationHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCooperationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoAgencyCooperationHistory(\Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCooperationHistory property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCooperationHistory[] = $item;
        
        return $this;
    }
    /**
     * Get customerCommissionId value
     * @return int[]
     */
    public function getCustomerCommissionId(): array
    {
        return $this->customerCommissionId;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomerCommissionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerCommissionId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerCommissionIdForArrayConstraintsFromSetCustomerCommissionId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestCustomerCommissionIdItem) {
            // validation for constraint: itemType
            if (!(is_int($importRawCustomerRequestCustomerCommissionIdItem) || ctype_digit($importRawCustomerRequestCustomerCommissionIdItem))) {
                $invalidValues[] = is_object($importRawCustomerRequestCustomerCommissionIdItem) ? get_class($importRawCustomerRequestCustomerCommissionIdItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestCustomerCommissionIdItem), var_export($importRawCustomerRequestCustomerCommissionIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customerCommissionId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customerCommissionId value
     * @throws InvalidArgumentException
     * @param int[] $customerCommissionId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setCustomerCommissionId(array $customerCommissionId = []): self
    {
        // validation for constraint: array
        if ('' !== ($customerCommissionIdArrayErrorMessage = self::validateCustomerCommissionIdForArrayConstraintsFromSetCustomerCommissionId($customerCommissionId))) {
            throw new InvalidArgumentException($customerCommissionIdArrayErrorMessage, __LINE__);
        }
        $this->customerCommissionId = $customerCommissionId;
        
        return $this;
    }
    /**
     * Add item to customerCommissionId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function addToCustomerCommissionId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The customerCommissionId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customerCommissionId[] = $item;
        
        return $this;
    }
    /**
     * Get useDebitorNoInSearch value
     * @return bool|null
     */
    public function getUseDebitorNoInSearch(): ?bool
    {
        return $this->useDebitorNoInSearch;
    }
    /**
     * Set useDebitorNoInSearch value
     * @param bool $useDebitorNoInSearch
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setUseDebitorNoInSearch(?bool $useDebitorNoInSearch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useDebitorNoInSearch) && !is_bool($useDebitorNoInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useDebitorNoInSearch, true), gettype($useDebitorNoInSearch)), __LINE__);
        }
        $this->useDebitorNoInSearch = $useDebitorNoInSearch;
        
        return $this;
    }
    /**
     * Get useEmailInSearch value
     * @return bool|null
     */
    public function getUseEmailInSearch(): ?bool
    {
        return $this->useEmailInSearch;
    }
    /**
     * Set useEmailInSearch value
     * @param bool $useEmailInSearch
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setUseEmailInSearch(?bool $useEmailInSearch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useEmailInSearch) && !is_bool($useEmailInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useEmailInSearch, true), gettype($useEmailInSearch)), __LINE__);
        }
        $this->useEmailInSearch = $useEmailInSearch;
        
        return $this;
    }
    /**
     * Get setDefaultContact value
     * @return bool|null
     */
    public function getSetDefaultContact(): ?bool
    {
        return $this->setDefaultContact;
    }
    /**
     * Set setDefaultContact value
     * @param bool $setDefaultContact
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setSetDefaultContact(?bool $setDefaultContact = null): self
    {
        // validation for constraint: boolean
        if (!is_null($setDefaultContact) && !is_bool($setDefaultContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($setDefaultContact, true), gettype($setDefaultContact)), __LINE__);
        }
        $this->setDefaultContact = $setDefaultContact;
        
        return $this;
    }
    /**
     * Get onlyNew value
     * @return bool|null
     */
    public function getOnlyNew(): ?bool
    {
        return $this->onlyNew;
    }
    /**
     * Set onlyNew value
     * @param bool $onlyNew
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setOnlyNew(?bool $onlyNew = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyNew) && !is_bool($onlyNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyNew, true), gettype($onlyNew)), __LINE__);
        }
        $this->onlyNew = $onlyNew;
        
        return $this;
    }
    /**
     * Get updateCustInfo value
     * @return bool|null
     */
    public function getUpdateCustInfo(): ?bool
    {
        return $this->updateCustInfo;
    }
    /**
     * Set updateCustInfo value
     * @param bool $updateCustInfo
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setUpdateCustInfo(?bool $updateCustInfo = false): self
    {
        // validation for constraint: boolean
        if (!is_null($updateCustInfo) && !is_bool($updateCustInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateCustInfo, true), gettype($updateCustInfo)), __LINE__);
        }
        $this->updateCustInfo = $updateCustInfo;
        
        return $this;
    }
    /**
     * Get matchOnlyCustomerId value
     * @return bool|null
     */
    public function getMatchOnlyCustomerId(): ?bool
    {
        return $this->matchOnlyCustomerId;
    }
    /**
     * Set matchOnlyCustomerId value
     * @param bool $matchOnlyCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setMatchOnlyCustomerId(?bool $matchOnlyCustomerId = false): self
    {
        // validation for constraint: boolean
        if (!is_null($matchOnlyCustomerId) && !is_bool($matchOnlyCustomerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($matchOnlyCustomerId, true), gettype($matchOnlyCustomerId)), __LINE__);
        }
        $this->matchOnlyCustomerId = $matchOnlyCustomerId;
        
        return $this;
    }
    /**
     * Get useExtRefIdInSearch value
     * @return bool|null
     */
    public function getUseExtRefIdInSearch(): ?bool
    {
        return $this->useExtRefIdInSearch;
    }
    /**
     * Set useExtRefIdInSearch value
     * @param bool $useExtRefIdInSearch
     * @return \Pggns\MidocoApi\Crmsd\StructType\ImportRawCustomerRequest
     */
    public function setUseExtRefIdInSearch(?bool $useExtRefIdInSearch = false): self
    {
        // validation for constraint: boolean
        if (!is_null($useExtRefIdInSearch) && !is_bool($useExtRefIdInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useExtRefIdInSearch, true), gettype($useExtRefIdInSearch)), __LINE__);
        }
        $this->useExtRefIdInSearch = $useExtRefIdInSearch;
        
        return $this;
    }
}
