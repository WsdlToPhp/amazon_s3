<?php
/**
 * File for class AmazonS3ServiceCreate
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3ServiceCreate originally named Create
 * @package AmazonS3
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3ServiceCreate extends AmazonS3WsdlClass
{
	/**
	 * Method to call the operation originally named CreateBucket
	 * @uses AmazonS3WsdlClass::getSoapClient()
	 * @uses AmazonS3WsdlClass::setResult()
	 * @uses AmazonS3WsdlClass::getResult()
	 * @uses AmazonS3WsdlClass::saveLastError()
	 * @uses AmazonS3StructCreateBucket::getBucket()
	 * @uses AmazonS3StructCreateBucket::getAccessControlList()
	 * @uses AmazonS3StructCreateBucket::getAWSAccessKeyId()
	 * @uses AmazonS3StructCreateBucket::getTimestamp()
	 * @uses AmazonS3StructCreateBucket::getSignature()
	 * @param AmazonS3StructCreateBucket $_amazonS3StructCreateBucket
	 * @return AmazonS3StructCreateBucketResponse
	 */
	public function CreateBucket(AmazonS3StructCreateBucket $_amazonS3StructCreateBucket)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateBucket(array('Bucket'=>$_amazonS3StructCreateBucket->getBucket(),'AccessControlList'=>$_amazonS3StructCreateBucket->getAccessControlList(),'AWSAccessKeyId'=>$_amazonS3StructCreateBucket->getAWSAccessKeyId(),'Timestamp'=>$_amazonS3StructCreateBucket->getTimestamp(),'Signature'=>$_amazonS3StructCreateBucket->getSignature())));
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
	 * @return AmazonS3StructCreateBucketResponse
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