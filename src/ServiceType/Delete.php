<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crmsd\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteExternalSystem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemRequest $paramDeleteExternalSystemRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemResponse|bool
     */
    public function deleteExternalSystem(\Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemRequest $paramDeleteExternalSystemRequest)
    {
        try {
            $this->setResult($resultDeleteExternalSystem = $this->getSoapClient()->__soapCall('deleteExternalSystem', [
                $paramDeleteExternalSystemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteExternalSystem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteExternalSystemAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeRequest $paramDeleteExternalSystemAttributeRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeResponse|bool
     */
    public function deleteExternalSystemAttribute(\Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeRequest $paramDeleteExternalSystemAttributeRequest)
    {
        try {
            $this->setResult($resultDeleteExternalSystemAttribute = $this->getSoapClient()->__soapCall('deleteExternalSystemAttribute', [
                $paramDeleteExternalSystemAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteExternalSystemAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteInvoiceFileFormatRequest $paramDeleteInvoiceFileFormatRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteInvoiceFileFormatResponse|bool
     */
    public function deleteInvoiceFileFormat(\Pggns\MidocoApi\Crmsd\StructType\DeleteInvoiceFileFormatRequest $paramDeleteInvoiceFileFormatRequest)
    {
        try {
            $this->setResult($resultDeleteInvoiceFileFormat = $this->getSoapClient()->__soapCall('deleteInvoiceFileFormat', [
                $paramDeleteInvoiceFileFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteInvoiceFileFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDebitCardType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardTypeRequest $paramDeleteDebitCardTypeRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardTypeResponse|bool
     */
    public function deleteDebitCardType(\Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardTypeRequest $paramDeleteDebitCardTypeRequest)
    {
        try {
            $this->setResult($resultDeleteDebitCardType = $this->getSoapClient()->__soapCall('deleteDebitCardType', [
                $paramDeleteDebitCardTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDebitCardType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteJobFunction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteJobFunctionRequest $paramDeleteJobFunctionRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteJobFunctionResponse|bool
     */
    public function deleteJobFunction(\Pggns\MidocoApi\Crmsd\StructType\DeleteJobFunctionRequest $paramDeleteJobFunctionRequest)
    {
        try {
            $this->setResult($resultDeleteJobFunction = $this->getSoapClient()->__soapCall('deleteJobFunction', [
                $paramDeleteJobFunctionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteJobFunction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCommissionDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionRequest $paramDeleteCommissionDefinitionRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionResponse|bool
     */
    public function deleteCommissionDefinition(\Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionRequest $paramDeleteCommissionDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteCommissionDefinition = $this->getSoapClient()->__soapCall('deleteCommissionDefinition', [
                $paramDeleteCommissionDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCommissionDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCommissionDefinitionLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionLevelRequest $paramDeleteCommissionDefinitionLevelRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionLevelResponse|bool
     */
    public function deleteCommissionDefinitionLevel(\Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionLevelRequest $paramDeleteCommissionDefinitionLevelRequest)
    {
        try {
            $this->setResult($resultDeleteCommissionDefinitionLevel = $this->getSoapClient()->__soapCall('deleteCommissionDefinitionLevel', [
                $paramDeleteCommissionDefinitionLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCommissionDefinitionLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryDescriptionRequest $paramDeleteCriteriaTypeCategoryDescriptionRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryDescriptionResponse|bool
     */
    public function deleteCriteriaTypeCategoryDescription(\Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryDescriptionRequest $paramDeleteCriteriaTypeCategoryDescriptionRequest)
    {
        try {
            $this->setResult($resultDeleteCriteriaTypeCategoryDescription = $this->getSoapClient()->__soapCall('deleteCriteriaTypeCategoryDescription', [
                $paramDeleteCriteriaTypeCategoryDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCriteriaTypeCategoryDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryRequest $paramDeleteCriteriaTypeCategoryRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryResponse|bool
     */
    public function deleteCriteriaTypeCategory(\Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryRequest $paramDeleteCriteriaTypeCategoryRequest)
    {
        try {
            $this->setResult($resultDeleteCriteriaTypeCategory = $this->getSoapClient()->__soapCall('deleteCriteriaTypeCategory', [
                $paramDeleteCriteriaTypeCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCriteriaTypeCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeletePaymentConditionRequest $paramDeletePaymentConditionRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeletePaymentConditionResponse|bool
     */
    public function deletePaymentCondition(\Pggns\MidocoApi\Crmsd\StructType\DeletePaymentConditionRequest $paramDeletePaymentConditionRequest)
    {
        try {
            $this->setResult($resultDeletePaymentCondition = $this->getSoapClient()->__soapCall('deletePaymentCondition', [
                $paramDeletePaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDictionaryName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteDictionaryNameRequest $paramDeleteDictionaryNameRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteDictionaryNameResponse|bool
     */
    public function deleteDictionaryName(\Pggns\MidocoApi\Crmsd\StructType\DeleteDictionaryNameRequest $paramDeleteDictionaryNameRequest)
    {
        try {
            $this->setResult($resultDeleteDictionaryName = $this->getSoapClient()->__soapCall('deleteDictionaryName', [
                $paramDeleteDictionaryNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDictionaryName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteLetterTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteLetterTemplateRequest $paramDeleteLetterTemplateRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteLetterTemplateResponse|bool
     */
    public function deleteLetterTemplate(\Pggns\MidocoApi\Crmsd\StructType\DeleteLetterTemplateRequest $paramDeleteLetterTemplateRequest)
    {
        try {
            $this->setResult($resultDeleteLetterTemplate = $this->getSoapClient()->__soapCall('deleteLetterTemplate', [
                $paramDeleteLetterTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteLetterTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBookingSource
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteBookingSourceRequest $paramDeleteBookingSourceRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteBookingSourceResponse|bool
     */
    public function deleteBookingSource(\Pggns\MidocoApi\Crmsd\StructType\DeleteBookingSourceRequest $paramDeleteBookingSourceRequest)
    {
        try {
            $this->setResult($resultDeleteBookingSource = $this->getSoapClient()->__soapCall('deleteBookingSource', [
                $paramDeleteBookingSourceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBookingSource;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTextTemplateType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteTextTemplateTypeRequest $paramDeleteTextTemplateTypeRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteTextTemplateTypeResponse|bool
     */
    public function deleteTextTemplateType(\Pggns\MidocoApi\Crmsd\StructType\DeleteTextTemplateTypeRequest $paramDeleteTextTemplateTypeRequest)
    {
        try {
            $this->setResult($resultDeleteTextTemplateType = $this->getSoapClient()->__soapCall('deleteTextTemplateType', [
                $paramDeleteTextTemplateTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTextTemplateType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePersonTitle
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeletePersonTitleRequest $paramDeletePersonTitleRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeletePersonTitleResponse|bool
     */
    public function deletePersonTitle(\Pggns\MidocoApi\Crmsd\StructType\DeletePersonTitleRequest $paramDeletePersonTitleRequest)
    {
        try {
            $this->setResult($resultDeletePersonTitle = $this->getSoapClient()->__soapCall('deletePersonTitle', [
                $paramDeletePersonTitleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePersonTitle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteConsentRequest $paramDeleteConsentRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteConsentResponse|bool
     */
    public function deleteConsent(\Pggns\MidocoApi\Crmsd\StructType\DeleteConsentRequest $paramDeleteConsentRequest)
    {
        try {
            $this->setResult($resultDeleteConsent = $this->getSoapClient()->__soapCall('deleteConsent', [
                $paramDeleteConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteConsentUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crmsd\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DeleteConsentUnitsRequest $paramDeleteConsentUnitsRequest
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteConsentUnitsResponse|bool
     */
    public function deleteConsentUnits(\Pggns\MidocoApi\Crmsd\StructType\DeleteConsentUnitsRequest $paramDeleteConsentUnitsRequest)
    {
        try {
            $this->setResult($resultDeleteConsentUnits = $this->getSoapClient()->__soapCall('deleteConsentUnits', [
                $paramDeleteConsentUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteConsentUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteBookingSourceResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionLevelResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteCommissionDefinitionResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteConsentResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteConsentUnitsResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryDescriptionResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteCriteriaTypeCategoryResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteDebitCardTypeResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteDictionaryNameResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemAttributeResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteExternalSystemResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteInvoiceFileFormatResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteJobFunctionResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteLetterTemplateResponse|\Pggns\MidocoApi\Crmsd\StructType\DeletePaymentConditionResponse|\Pggns\MidocoApi\Crmsd\StructType\DeletePersonTitleResponse|\Pggns\MidocoApi\Crmsd\StructType\DeleteTextTemplateTypeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
