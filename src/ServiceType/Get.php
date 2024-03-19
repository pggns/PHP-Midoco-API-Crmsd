<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crmsd\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getExternalSystemTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemTypesRequest $paramGetExternalSystemTypesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemTypesResponse|bool
     */
    public function getExternalSystemTypes(\Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemTypesRequest $paramGetExternalSystemTypesRequest)
    {
        try {
            $this->setResult($resultGetExternalSystemTypes = $this->getSoapClient()->__soapCall('getExternalSystemTypes', [
                $paramGetExternalSystemTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalSystemTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternalSystemAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemAttributesRequest $paramGetExternalSystemAttributesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemAttributesResponse|bool
     */
    public function getExternalSystemAttributes(\Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemAttributesRequest $paramGetExternalSystemAttributesRequest)
    {
        try {
            $this->setResult($resultGetExternalSystemAttributes = $this->getSoapClient()->__soapCall('getExternalSystemAttributes', [
                $paramGetExternalSystemAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalSystemAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternalSystems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemsRequest $paramGetExternalSystemsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemsResponse|bool
     */
    public function getExternalSystems(\Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemsRequest $paramGetExternalSystemsRequest)
    {
        try {
            $this->setResult($resultGetExternalSystems = $this->getSoapClient()->__soapCall('getExternalSystems', [
                $paramGetExternalSystemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalSystems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllCrmCriteriaDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetAllCrmCriteriaDescriptionsRequest $paramGetAllCrmCriteriaDescriptionsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllCrmCriteriaDescriptionsResponse|bool
     */
    public function getAllCrmCriteriaDescriptions(\Pggns\MidocoApi\Crmsd\StructType\GetAllCrmCriteriaDescriptionsRequest $paramGetAllCrmCriteriaDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAllCrmCriteriaDescriptions = $this->getSoapClient()->__soapCall('getAllCrmCriteriaDescriptions', [
                $paramGetAllCrmCriteriaDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllCrmCriteriaDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetInvoiceFileFormatRequest $paramGetInvoiceFileFormatRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetInvoiceFileFormatResponse|bool
     */
    public function getInvoiceFileFormat(\Pggns\MidocoApi\Crmsd\StructType\GetInvoiceFileFormatRequest $paramGetInvoiceFileFormatRequest)
    {
        try {
            $this->setResult($resultGetInvoiceFileFormat = $this->getSoapClient()->__soapCall('getInvoiceFileFormat', [
                $paramGetInvoiceFileFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInvoiceFileFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitCardTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardTypesRequest $paramGetDebitCardTypesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardTypesResponse|bool
     */
    public function getDebitCardTypes(\Pggns\MidocoApi\Crmsd\StructType\GetDebitCardTypesRequest $paramGetDebitCardTypesRequest)
    {
        try {
            $this->setResult($resultGetDebitCardTypes = $this->getSoapClient()->__soapCall('getDebitCardTypes', [
                $paramGetDebitCardTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitCardTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJobFunction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionRequest $paramGetJobFunctionRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionResponse|bool
     */
    public function getJobFunction(\Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionRequest $paramGetJobFunctionRequest)
    {
        try {
            $this->setResult($resultGetJobFunction = $this->getSoapClient()->__soapCall('getJobFunction', [
                $paramGetJobFunctionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJobFunction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCommissionDefinitions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionsRequest $paramGetCommissionDefinitionsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionsResponse|bool
     */
    public function getCommissionDefinitions(\Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionsRequest $paramGetCommissionDefinitionsRequest)
    {
        try {
            $this->setResult($resultGetCommissionDefinitions = $this->getSoapClient()->__soapCall('getCommissionDefinitions', [
                $paramGetCommissionDefinitionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCommissionDefinitions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCommissionDefinitionLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionLevelsRequest $paramGetCommissionDefinitionLevelsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionLevelsResponse|bool
     */
    public function getCommissionDefinitionLevel(\Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionLevelsRequest $paramGetCommissionDefinitionLevelsRequest)
    {
        try {
            $this->setResult($resultGetCommissionDefinitionLevel = $this->getSoapClient()->__soapCall('getCommissionDefinitionLevel', [
                $paramGetCommissionDefinitionLevelsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCommissionDefinitionLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getCrmPersonTravellerTypeDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerTypeDescriptionsRequest $paramGetCrmPersonTravellerTypeDescriptionsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerTypeDescriptionsResponse|bool
     */
    public function getCrmPersonTravellerTypeDescriptions(\Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerTypeDescriptionsRequest $paramGetCrmPersonTravellerTypeDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetCrmPersonTravellerTypeDescriptions = $this->getSoapClient()->__soapCall('getCrmPersonTravellerTypeDescriptions', [
                $paramGetCrmPersonTravellerTypeDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmPersonTravellerTypeDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getCriteriaTypeCategoryDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeCategoryDescriptionsRequest $paramGetCriteriaTypeCategoryDescriptionsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeCategoryDescriptionsResponse|bool
     */
    public function getCriteriaTypeCategoryDescriptions(\Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeCategoryDescriptionsRequest $paramGetCriteriaTypeCategoryDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetCriteriaTypeCategoryDescriptions = $this->getSoapClient()->__soapCall('getCriteriaTypeCategoryDescriptions', [
                $paramGetCriteriaTypeCategoryDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCriteriaTypeCategoryDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCriteriaTypesForCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypesForCategoryRequest $paramGetCriteriaTypesForCategoryRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypesForCategoryResponse|bool
     */
    public function getCriteriaTypesForCategory(\Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypesForCategoryRequest $paramGetCriteriaTypesForCategoryRequest)
    {
        try {
            $this->setResult($resultGetCriteriaTypesForCategory = $this->getSoapClient()->__soapCall('getCriteriaTypesForCategory', [
                $paramGetCriteriaTypesForCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCriteriaTypesForCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetPaymentConditionsRequest $paramGetPaymentConditionsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetPaymentConditionsResponse|bool
     */
    public function getPaymentConditions(\Pggns\MidocoApi\Crmsd\StructType\GetPaymentConditionsRequest $paramGetPaymentConditionsRequest)
    {
        try {
            $this->setResult($resultGetPaymentConditions = $this->getSoapClient()->__soapCall('getPaymentConditions', [
                $paramGetPaymentConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getCrmPersonTravellerMaritalStatusDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsRequest $paramGetCrmPersonTravellerMaritalStatusDescriptionsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsResponse|bool
     */
    public function getCrmPersonTravellerMaritalStatusDescriptions(\Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsRequest $paramGetCrmPersonTravellerMaritalStatusDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetCrmPersonTravellerMaritalStatusDescriptions = $this->getSoapClient()->__soapCall('getCrmPersonTravellerMaritalStatusDescriptions', [
                $paramGetCrmPersonTravellerMaritalStatusDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmPersonTravellerMaritalStatusDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDictionaryName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetDictionaryNameRequest $paramGetDictionaryNameRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDictionaryNameResponse|bool
     */
    public function getDictionaryName(\Pggns\MidocoApi\Crmsd\StructType\GetDictionaryNameRequest $paramGetDictionaryNameRequest)
    {
        try {
            $this->setResult($resultGetDictionaryName = $this->getSoapClient()->__soapCall('getDictionaryName', [
                $paramGetDictionaryNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDictionaryName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLetterTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetLetterTemplatesRequest $paramGetLetterTemplatesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetLetterTemplatesResponse|bool
     */
    public function getLetterTemplates(\Pggns\MidocoApi\Crmsd\StructType\GetLetterTemplatesRequest $paramGetLetterTemplatesRequest)
    {
        try {
            $this->setResult($resultGetLetterTemplates = $this->getSoapClient()->__soapCall('getLetterTemplates', [
                $paramGetLetterTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLetterTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingSources
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetBookingSourcesRequest $paramGetBookingSourcesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetBookingSourcesResponse|bool
     */
    public function getBookingSources(\Pggns\MidocoApi\Crmsd\StructType\GetBookingSourcesRequest $paramGetBookingSourcesRequest)
    {
        try {
            $this->setResult($resultGetBookingSources = $this->getSoapClient()->__soapCall('getBookingSources', [
                $paramGetBookingSourcesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingSources;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTextTemplateType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetTextTemplateTypeRequest $paramGetTextTemplateTypeRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTextTemplateTypeResponse|bool
     */
    public function getTextTemplateType(\Pggns\MidocoApi\Crmsd\StructType\GetTextTemplateTypeRequest $paramGetTextTemplateTypeRequest)
    {
        try {
            $this->setResult($resultGetTextTemplateType = $this->getSoapClient()->__soapCall('getTextTemplateType', [
                $paramGetTextTemplateTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTextTemplateType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllTextTemplateTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetAllTextTemplateTypesRequest $paramGetAllTextTemplateTypesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetAllTextTemplateTypesResponse|bool
     */
    public function getAllTextTemplateTypes(\Pggns\MidocoApi\Crmsd\StructType\GetAllTextTemplateTypesRequest $paramGetAllTextTemplateTypesRequest)
    {
        try {
            $this->setResult($resultGetAllTextTemplateTypes = $this->getSoapClient()->__soapCall('getAllTextTemplateTypes', [
                $paramGetAllTextTemplateTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllTextTemplateTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllPersonTitles
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetTitlesRequest $paramGetTitlesRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetTitlesResponse|bool
     */
    public function getAllPersonTitles(\Pggns\MidocoApi\Crmsd\StructType\GetTitlesRequest $paramGetTitlesRequest)
    {
        try {
            $this->setResult($resultGetAllPersonTitles = $this->getSoapClient()->__soapCall('getAllPersonTitles', [
                $paramGetTitlesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllPersonTitles;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDeleteReasons4Customer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetDeleteReasons4CustomerRequest $paramGetDeleteReasons4CustomerRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDeleteReasons4CustomerResponse|bool
     */
    public function getDeleteReasons4Customer(\Pggns\MidocoApi\Crmsd\StructType\GetDeleteReasons4CustomerRequest $paramGetDeleteReasons4CustomerRequest)
    {
        try {
            $this->setResult($resultGetDeleteReasons4Customer = $this->getSoapClient()->__soapCall('getDeleteReasons4Customer', [
                $paramGetDeleteReasons4CustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDeleteReasons4Customer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetConsentRequest $paramGetConsentRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetConsentResponse|bool
     */
    public function getConsent(\Pggns\MidocoApi\Crmsd\StructType\GetConsentRequest $paramGetConsentRequest)
    {
        try {
            $this->setResult($resultGetConsent = $this->getSoapClient()->__soapCall('getConsent', [
                $paramGetConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getActualConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetActualConsentRequest $paramGetActualConsentRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetActualConsentResponse|bool
     */
    public function getActualConsent(\Pggns\MidocoApi\Crmsd\StructType\GetActualConsentRequest $paramGetActualConsentRequest)
    {
        try {
            $this->setResult($resultGetActualConsent = $this->getSoapClient()->__soapCall('getActualConsent', [
                $paramGetActualConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetActualConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConsentUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetConsentUnitsRequest $paramGetConsentUnitsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetConsentUnitsResponse|bool
     */
    public function getConsentUnits(\Pggns\MidocoApi\Crmsd\StructType\GetConsentUnitsRequest $paramGetConsentUnitsRequest)
    {
        try {
            $this->setResult($resultGetConsentUnits = $this->getSoapClient()->__soapCall('getConsentUnits', [
                $paramGetConsentUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetConsentUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSubjectElements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\GetSubjectElementsRequest $paramGetSubjectElementsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSubjectElementsResponse|bool
     */
    public function getSubjectElements(\Pggns\MidocoApi\Crmsd\StructType\GetSubjectElementsRequest $paramGetSubjectElementsRequest)
    {
        try {
            $this->setResult($resultGetSubjectElements = $this->getSoapClient()->__soapCall('getSubjectElements', [
                $paramGetSubjectElementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSubjectElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetActualConsentResponse|\Pggns\MidocoApi\Crmsd\StructType\GetAllCrmCriteriaDescriptionsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetAllTextTemplateTypesResponse|\Pggns\MidocoApi\Crmsd\StructType\GetBookingSourcesResponse|\Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionLevelsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetCommissionDefinitionsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetConsentResponse|\Pggns\MidocoApi\Crmsd\StructType\GetConsentUnitsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypeCategoryDescriptionsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetCriteriaTypesForCategoryResponse|\Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetCrmPersonTravellerTypeDescriptionsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetDebitCardTypesResponse|\Pggns\MidocoApi\Crmsd\StructType\GetDeleteReasons4CustomerResponse|\Pggns\MidocoApi\Crmsd\StructType\GetDictionaryNameResponse|\Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemAttributesResponse|\Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetExternalSystemTypesResponse|\Pggns\MidocoApi\Crmsd\StructType\GetInvoiceFileFormatResponse|\Pggns\MidocoApi\Crmsd\StructType\GetJobFunctionResponse|\Pggns\MidocoApi\Crmsd\StructType\GetLetterTemplatesResponse|\Pggns\MidocoApi\Crmsd\StructType\GetPaymentConditionsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetSubjectElementsResponse|\Pggns\MidocoApi\Crmsd\StructType\GetTextTemplateTypeResponse|\Pggns\MidocoApi\Crmsd\StructType\GetTitlesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
