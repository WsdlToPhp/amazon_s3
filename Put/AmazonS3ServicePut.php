<?php
/**
 * File for class AmazonS3ServicePut
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3ServicePut originally named Put
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ServicePut extends AmazonS3WsdlClass
{
	/**
	 * Method to call the operation originally named PutObject
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructPutObject::getBucket()
	 * @uses AmazonS3StructPutObject::getKey()
	 * @uses AmazonS3StructPutObject::getMetadata()
	 * @uses AmazonS3StructPutObject::getContentLength()
	 * @uses AmazonS3StructPutObject::getAccessControlList()
	 * @uses AmazonS3StructPutObject::getStorageClass()
	 * @uses AmazonS3StructPutObject::getAWSAccessKeyId()
	 * @uses AmazonS3StructPutObject::getTimestamp()
	 * @uses AmazonS3StructPutObject::getSignature()
	 * @uses AmazonS3StructPutObject::getCredential()
	 * @param AmazonS3StructPutObject $_amazonS3StructPutObject
	 * @return AmazonS3StructPutObjectResponse
	 */
	public function PutObject(AmazonS3StructPutObject $_amazonS3StructPutObject)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PutObject(array('Bucket'=>$_amazonS3StructPutObject->getBucket(),'Key'=>$_amazonS3StructPutObject->getKey(),'Metadata'=>$_amazonS3StructPutObject->getMetadata(),'ContentLength'=>$_amazonS3StructPutObject->getContentLength(),'AccessControlList'=>$_amazonS3StructPutObject->getAccessControlList(),'StorageClass'=>$_amazonS3StructPutObject->getStorageClass(),'AWSAccessKeyId'=>$_amazonS3StructPutObject->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructPutObject->getTimestamp(),'Signature'=>$_amazonS3StructPutObject->getSignature(),'Credential'=>$_amazonS3StructPutObject->getCredential())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named PutObjectInline
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructPutObjectInline::getBucket()
	 * @uses AmazonS3StructPutObjectInline::getKey()
	 * @uses AmazonS3StructPutObjectInline::getMetadata()
	 * @uses AmazonS3StructPutObjectInline::getData()
	 * @uses AmazonS3StructPutObjectInline::getContentLength()
	 * @uses AmazonS3StructPutObjectInline::getAccessControlList()
	 * @uses AmazonS3StructPutObjectInline::getStorageClass()
	 * @uses AmazonS3StructPutObjectInline::getAWSAccessKeyId()
	 * @uses AmazonS3StructPutObjectInline::getTimestamp()
	 * @uses AmazonS3StructPutObjectInline::getSignature()
	 * @uses AmazonS3StructPutObjectInline::getCredential()
	 * @param AmazonS3StructPutObjectInline $_amazonS3StructPutObjectInline
	 * @return AmazonS3StructPutObjectInlineResponse
	 */
	public function PutObjectInline(AmazonS3StructPutObjectInline $_amazonS3StructPutObjectInline)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PutObjectInline(array('Bucket'=>$_amazonS3StructPutObjectInline->getBucket(),'Key'=>$_amazonS3StructPutObjectInline->getKey(),'Metadata'=>$_amazonS3StructPutObjectInline->getMetadata(),'Data'=>$_amazonS3StructPutObjectInline->getData(),'ContentLength'=>$_amazonS3StructPutObjectInline->getContentLength(),'AccessControlList'=>$_amazonS3StructPutObjectInline->getAccessControlList(),'StorageClass'=>$_amazonS3StructPutObjectInline->getStorageClass(),'AWSAccessKeyId'=>$_amazonS3StructPutObjectInline->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructPutObjectInline->getTimestamp(),'Signature'=>$_amazonS3StructPutObjectInline->getSignature(),'Credential'=>$_amazonS3StructPutObjectInline->getCredential())));
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
	 * @return AmazonS3StructPutObjectInlineResponse|AmazonS3StructPutObjectResponse
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