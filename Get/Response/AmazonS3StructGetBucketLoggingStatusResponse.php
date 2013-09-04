<?php
/**
 * File for class AmazonS3StructGetBucketLoggingStatusResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructGetBucketLoggingStatusResponse originally named GetBucketLoggingStatusResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructGetBucketLoggingStatusResponse extends AmazonS3WsdlClass
{
	/**
	 * The GetBucketLoggingStatusResponse
	 * @var AmazonS3StructBucketLoggingStatus
	 */
	public $GetBucketLoggingStatusResponse;
	/**
	 * Constructor method for GetBucketLoggingStatusResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructBucketLoggingStatus $_getBucketLoggingStatusResponse
	 * @return AmazonS3StructGetBucketLoggingStatusResponse
	 */
	public function __construct($_getBucketLoggingStatusResponse = NULL)
	{
		parent::__construct(array('GetBucketLoggingStatusResponse'=>$_getBucketLoggingStatusResponse));
	}
	/**
	 * Get GetBucketLoggingStatusResponse value
	 * @return AmazonS3StructBucketLoggingStatus|null
	 */
	public function getGetBucketLoggingStatusResponse()
	{
		return $this->GetBucketLoggingStatusResponse;
	}
	/**
	 * Set GetBucketLoggingStatusResponse value
	 * @param AmazonS3StructBucketLoggingStatus $_getBucketLoggingStatusResponse the GetBucketLoggingStatusResponse
	 * @return AmazonS3StructBucketLoggingStatus
	 */
	public function setGetBucketLoggingStatusResponse($_getBucketLoggingStatusResponse)
	{
		return ($this->GetBucketLoggingStatusResponse = $_getBucketLoggingStatusResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructGetBucketLoggingStatusResponse
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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