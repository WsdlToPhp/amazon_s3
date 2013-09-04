<?php
/**
 * File for class AmazonS3ServiceGet
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3ServiceGet originally named Get
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ServiceGet extends AmazonS3WsdlClass
{
	/**
	 * Method to call the operation originally named GetObjectAccessControlPolicy
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructGetObjectAccessControlPolicy::getBucket()
	 * @uses AmazonS3StructGetObjectAccessControlPolicy::getKey()
	 * @uses AmazonS3StructGetObjectAccessControlPolicy::getAWSAccessKeyId()
	 * @uses AmazonS3StructGetObjectAccessControlPolicy::getTimestamp()
	 * @uses AmazonS3StructGetObjectAccessControlPolicy::getSignature()
	 * @uses AmazonS3StructGetObjectAccessControlPolicy::getCredential()
	 * @param AmazonS3StructGetObjectAccessControlPolicy $_amazonS3StructGetObjectAccessControlPolicy
	 * @return AmazonS3StructGetObjectAccessControlPolicyResponse
	 */
	public function GetObjectAccessControlPolicy(AmazonS3StructGetObjectAccessControlPolicy $_amazonS3StructGetObjectAccessControlPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetObjectAccessControlPolicy(array('Bucket'=>$_amazonS3StructGetObjectAccessControlPolicy->getBucket(),'Key'=>$_amazonS3StructGetObjectAccessControlPolicy->getKey(),'AWSAccessKeyId'=>$_amazonS3StructGetObjectAccessControlPolicy->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructGetObjectAccessControlPolicy->getTimestamp(),'Signature'=>$_amazonS3StructGetObjectAccessControlPolicy->getSignature(),'Credential'=>$_amazonS3StructGetObjectAccessControlPolicy->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBucketAccessControlPolicy
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructGetBucketAccessControlPolicy::getBucket()
	 * @uses AmazonS3StructGetBucketAccessControlPolicy::getAWSAccessKeyId()
	 * @uses AmazonS3StructGetBucketAccessControlPolicy::getTimestamp()
	 * @uses AmazonS3StructGetBucketAccessControlPolicy::getSignature()
	 * @uses AmazonS3StructGetBucketAccessControlPolicy::getCredential()
	 * @param AmazonS3StructGetBucketAccessControlPolicy $_amazonS3StructGetBucketAccessControlPolicy
	 * @return AmazonS3StructGetBucketAccessControlPolicyResponse
	 */
	public function GetBucketAccessControlPolicy(AmazonS3StructGetBucketAccessControlPolicy $_amazonS3StructGetBucketAccessControlPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBucketAccessControlPolicy(array('Bucket'=>$_amazonS3StructGetBucketAccessControlPolicy->getBucket(),'AWSAccessKeyId'=>$_amazonS3StructGetBucketAccessControlPolicy->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructGetBucketAccessControlPolicy->getTimestamp(),'Signature'=>$_amazonS3StructGetBucketAccessControlPolicy->getSignature(),'Credential'=>$_amazonS3StructGetBucketAccessControlPolicy->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetObject
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructGetObject::getBucket()
	 * @uses AmazonS3StructGetObject::getKey()
	 * @uses AmazonS3StructGetObject::getGetMetadata()
	 * @uses AmazonS3StructGetObject::getGetData()
	 * @uses AmazonS3StructGetObject::getInlineData()
	 * @uses AmazonS3StructGetObject::getAWSAccessKeyId()
	 * @uses AmazonS3StructGetObject::getTimestamp()
	 * @uses AmazonS3StructGetObject::getSignature()
	 * @uses AmazonS3StructGetObject::getCredential()
	 * @param AmazonS3StructGetObject $_amazonS3StructGetObject
	 * @return AmazonS3StructGetObjectResponse
	 */
	public function GetObject(AmazonS3StructGetObject $_amazonS3StructGetObject)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetObject(array('Bucket'=>$_amazonS3StructGetObject->getBucket(),'Key'=>$_amazonS3StructGetObject->getKey(),'GetMetadata'=>$_amazonS3StructGetObject->getGetMetadata(),'GetData'=>$_amazonS3StructGetObject->getGetData(),'InlineData'=>$_amazonS3StructGetObject->getInlineData(),'AWSAccessKeyId'=>$_amazonS3StructGetObject->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructGetObject->getTimestamp(),'Signature'=>$_amazonS3StructGetObject->getSignature(),'Credential'=>$_amazonS3StructGetObject->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetObjectExtended
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructGetObjectExtended::getBucket()
	 * @uses AmazonS3StructGetObjectExtended::getKey()
	 * @uses AmazonS3StructGetObjectExtended::getGetMetadata()
	 * @uses AmazonS3StructGetObjectExtended::getGetData()
	 * @uses AmazonS3StructGetObjectExtended::getInlineData()
	 * @uses AmazonS3StructGetObjectExtended::getByteRangeStart()
	 * @uses AmazonS3StructGetObjectExtended::getByteRangeEnd()
	 * @uses AmazonS3StructGetObjectExtended::getIfModifiedSince()
	 * @uses AmazonS3StructGetObjectExtended::getIfUnmodifiedSince()
	 * @uses AmazonS3StructGetObjectExtended::getIfMatch()
	 * @uses AmazonS3StructGetObjectExtended::getIfNoneMatch()
	 * @uses AmazonS3StructGetObjectExtended::getReturnCompleteObjectOnConditionFailure()
	 * @uses AmazonS3StructGetObjectExtended::getAWSAccessKeyId()
	 * @uses AmazonS3StructGetObjectExtended::getTimestamp()
	 * @uses AmazonS3StructGetObjectExtended::getSignature()
	 * @uses AmazonS3StructGetObjectExtended::getCredential()
	 * @param AmazonS3StructGetObjectExtended $_amazonS3StructGetObjectExtended
	 * @return AmazonS3StructGetObjectExtendedResponse
	 */
	public function GetObjectExtended(AmazonS3StructGetObjectExtended $_amazonS3StructGetObjectExtended)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetObjectExtended(array('Bucket'=>$_amazonS3StructGetObjectExtended->getBucket(),'Key'=>$_amazonS3StructGetObjectExtended->getKey(),'GetMetadata'=>$_amazonS3StructGetObjectExtended->getGetMetadata(),'GetData'=>$_amazonS3StructGetObjectExtended->getGetData(),'InlineData'=>$_amazonS3StructGetObjectExtended->getInlineData(),'ByteRangeStart'=>$_amazonS3StructGetObjectExtended->getByteRangeStart(),'ByteRangeEnd'=>$_amazonS3StructGetObjectExtended->getByteRangeEnd(),'IfModifiedSince'=>$_amazonS3StructGetObjectExtended->getIfModifiedSince(),'IfUnmodifiedSince'=>$_amazonS3StructGetObjectExtended->getIfUnmodifiedSince(),'IfMatch'=>$_amazonS3StructGetObjectExtended->getIfMatch(),'IfNoneMatch'=>$_amazonS3StructGetObjectExtended->getIfNoneMatch(),'ReturnCompleteObjectOnConditionFailure'=>$_amazonS3StructGetObjectExtended->getReturnCompleteObjectOnConditionFailure(),'AWSAccessKeyId'=>$_amazonS3StructGetObjectExtended->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructGetObjectExtended->getTimestamp(),'Signature'=>$_amazonS3StructGetObjectExtended->getSignature(),'Credential'=>$_amazonS3StructGetObjectExtended->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBucketLoggingStatus
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructGetBucketLoggingStatus::getBucket()
	 * @uses AmazonS3StructGetBucketLoggingStatus::getAWSAccessKeyId()
	 * @uses AmazonS3StructGetBucketLoggingStatus::getTimestamp()
	 * @uses AmazonS3StructGetBucketLoggingStatus::getSignature()
	 * @uses AmazonS3StructGetBucketLoggingStatus::getCredential()
	 * @param AmazonS3StructGetBucketLoggingStatus $_amazonS3StructGetBucketLoggingStatus
	 * @return AmazonS3StructGetBucketLoggingStatusResponse
	 */
	public function GetBucketLoggingStatus(AmazonS3StructGetBucketLoggingStatus $_amazonS3StructGetBucketLoggingStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBucketLoggingStatus(array('Bucket'=>$_amazonS3StructGetBucketLoggingStatus->getBucket(),'AWSAccessKeyId'=>$_amazonS3StructGetBucketLoggingStatus->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructGetBucketLoggingStatus->getTimestamp(),'Signature'=>$_amazonS3StructGetBucketLoggingStatus->getSignature(),'Credential'=>$_amazonS3StructGetBucketLoggingStatus->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see AmazonS3WsdlClass::getResult()
	 * @return AmazonS3StructGetBucketAccessControlPolicyResponse|AmazonS3StructGetBucketLoggingStatusResponse|AmazonS3StructGetObjectAccessControlPolicyResponse|AmazonS3StructGetObjectExtendedResponse|AmazonS3StructGetObjectResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>