<?php
/**
 * File for class AmazonS3ServiceDelete
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3ServiceDelete originally named Delete
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ServiceDelete extends AmazonS3WsdlClass
{
	/**
	 * Method to call the operation originally named DeleteBucket
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructDeleteBucket::getBucket()
	 * @uses AmazonS3StructDeleteBucket::getAWSAccessKeyId()
	 * @uses AmazonS3StructDeleteBucket::getTimestamp()
	 * @uses AmazonS3StructDeleteBucket::getSignature()
	 * @uses AmazonS3StructDeleteBucket::getCredential()
	 * @param AmazonS3StructDeleteBucket $_amazonS3StructDeleteBucket
	 * @return AmazonS3StructDeleteBucketResponse
	 */
	public function DeleteBucket(AmazonS3StructDeleteBucket $_amazonS3StructDeleteBucket)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteBucket(array('Bucket'=>$_amazonS3StructDeleteBucket->getBucket(),'AWSAccessKeyId'=>$_amazonS3StructDeleteBucket->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructDeleteBucket->getTimestamp(),'Signature'=>$_amazonS3StructDeleteBucket->getSignature(),'Credential'=>$_amazonS3StructDeleteBucket->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DeleteObject
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructDeleteObject::getBucket()
	 * @uses AmazonS3StructDeleteObject::getKey()
	 * @uses AmazonS3StructDeleteObject::getAWSAccessKeyId()
	 * @uses AmazonS3StructDeleteObject::getTimestamp()
	 * @uses AmazonS3StructDeleteObject::getSignature()
	 * @uses AmazonS3StructDeleteObject::getCredential()
	 * @param AmazonS3StructDeleteObject $_amazonS3StructDeleteObject
	 * @return AmazonS3StructDeleteObjectResponse
	 */
	public function DeleteObject(AmazonS3StructDeleteObject $_amazonS3StructDeleteObject)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteObject(array('Bucket'=>$_amazonS3StructDeleteObject->getBucket(),'Key'=>$_amazonS3StructDeleteObject->getKey(),'AWSAccessKeyId'=>$_amazonS3StructDeleteObject->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructDeleteObject->getTimestamp(),'Signature'=>$_amazonS3StructDeleteObject->getSignature(),'Credential'=>$_amazonS3StructDeleteObject->getCredential())));
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
	 * @return AmazonS3StructDeleteBucketResponse|AmazonS3StructDeleteObjectResponse
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