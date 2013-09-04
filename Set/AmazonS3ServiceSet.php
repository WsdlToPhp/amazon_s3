<?php
/**
 * File for class AmazonS3ServiceSet
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3ServiceSet originally named Set
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ServiceSet extends AmazonS3WsdlClass
{
	/**
	 * Method to call the operation originally named SetObjectAccessControlPolicy
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructSetObjectAccessControlPolicy::getBucket()
	 * @uses AmazonS3StructSetObjectAccessControlPolicy::getKey()
	 * @uses AmazonS3StructSetObjectAccessControlPolicy::getAccessControlList()
	 * @uses AmazonS3StructSetObjectAccessControlPolicy::getAWSAccessKeyId()
	 * @uses AmazonS3StructSetObjectAccessControlPolicy::getTimestamp()
	 * @uses AmazonS3StructSetObjectAccessControlPolicy::getSignature()
	 * @uses AmazonS3StructSetObjectAccessControlPolicy::getCredential()
	 * @param AmazonS3StructSetObjectAccessControlPolicy $_amazonS3StructSetObjectAccessControlPolicy
	 * @return AmazonS3StructSetObjectAccessControlPolicyResponse
	 */
	public function SetObjectAccessControlPolicy(AmazonS3StructSetObjectAccessControlPolicy $_amazonS3StructSetObjectAccessControlPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetObjectAccessControlPolicy(array('Bucket'=>$_amazonS3StructSetObjectAccessControlPolicy->getBucket(),'Key'=>$_amazonS3StructSetObjectAccessControlPolicy->getKey(),'AccessControlList'=>$_amazonS3StructSetObjectAccessControlPolicy->getAccessControlList(),'AWSAccessKeyId'=>$_amazonS3StructSetObjectAccessControlPolicy->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructSetObjectAccessControlPolicy->getTimestamp(),'Signature'=>$_amazonS3StructSetObjectAccessControlPolicy->getSignature(),'Credential'=>$_amazonS3StructSetObjectAccessControlPolicy->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named SetBucketAccessControlPolicy
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructSetBucketAccessControlPolicy::getBucket()
	 * @uses AmazonS3StructSetBucketAccessControlPolicy::getAccessControlList()
	 * @uses AmazonS3StructSetBucketAccessControlPolicy::getAWSAccessKeyId()
	 * @uses AmazonS3StructSetBucketAccessControlPolicy::getTimestamp()
	 * @uses AmazonS3StructSetBucketAccessControlPolicy::getSignature()
	 * @uses AmazonS3StructSetBucketAccessControlPolicy::getCredential()
	 * @param AmazonS3StructSetBucketAccessControlPolicy $_amazonS3StructSetBucketAccessControlPolicy
	 * @return AmazonS3StructSetBucketAccessControlPolicyResponse
	 */
	public function SetBucketAccessControlPolicy(AmazonS3StructSetBucketAccessControlPolicy $_amazonS3StructSetBucketAccessControlPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetBucketAccessControlPolicy(array('Bucket'=>$_amazonS3StructSetBucketAccessControlPolicy->getBucket(),'AccessControlList'=>$_amazonS3StructSetBucketAccessControlPolicy->getAccessControlList(),'AWSAccessKeyId'=>$_amazonS3StructSetBucketAccessControlPolicy->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructSetBucketAccessControlPolicy->getTimestamp(),'Signature'=>$_amazonS3StructSetBucketAccessControlPolicy->getSignature(),'Credential'=>$_amazonS3StructSetBucketAccessControlPolicy->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named SetBucketLoggingStatus
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructSetBucketLoggingStatus::getBucket()
	 * @uses AmazonS3StructSetBucketLoggingStatus::getAWSAccessKeyId()
	 * @uses AmazonS3StructSetBucketLoggingStatus::getTimestamp()
	 * @uses AmazonS3StructSetBucketLoggingStatus::getSignature()
	 * @uses AmazonS3StructSetBucketLoggingStatus::getCredential()
	 * @uses AmazonS3StructSetBucketLoggingStatus::getBucketLoggingStatus()
	 * @param AmazonS3StructSetBucketLoggingStatus $_amazonS3StructSetBucketLoggingStatus
	 * @return AmazonS3StructSetBucketLoggingStatusResponse
	 */
	public function SetBucketLoggingStatus(AmazonS3StructSetBucketLoggingStatus $_amazonS3StructSetBucketLoggingStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetBucketLoggingStatus(array('Bucket'=>$_amazonS3StructSetBucketLoggingStatus->getBucket(),'AWSAccessKeyId'=>$_amazonS3StructSetBucketLoggingStatus->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructSetBucketLoggingStatus->getTimestamp(),'Signature'=>$_amazonS3StructSetBucketLoggingStatus->getSignature(),'Credential'=>$_amazonS3StructSetBucketLoggingStatus->getCredential(),'BucketLoggingStatus'=>$_amazonS3StructSetBucketLoggingStatus->getBucketLoggingStatus())));
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
	 * @return AmazonS3StructSetBucketAccessControlPolicyResponse|AmazonS3StructSetBucketLoggingStatusResponse|AmazonS3StructSetObjectAccessControlPolicyResponse
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