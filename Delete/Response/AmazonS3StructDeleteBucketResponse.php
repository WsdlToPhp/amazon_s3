<?php
/**
 * File for class AmazonS3StructDeleteBucketResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructDeleteBucketResponse originally named DeleteBucketResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructDeleteBucketResponse extends AmazonS3WsdlClass
{
	/**
	 * The DeleteBucketResponse
	 * @var AmazonS3StructStatus
	 */
	public $DeleteBucketResponse;
	/**
	 * Constructor method for DeleteBucketResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructStatus $_deleteBucketResponse
	 * @return AmazonS3StructDeleteBucketResponse
	 */
	public function __construct($_deleteBucketResponse = NULL)
	{
		parent::__construct(array('DeleteBucketResponse'=>$_deleteBucketResponse));
	}
	/**
	 * Get DeleteBucketResponse value
	 * @return AmazonS3StructStatus|null
	 */
	public function getDeleteBucketResponse()
	{
		return $this->DeleteBucketResponse;
	}
	/**
	 * Set DeleteBucketResponse value
	 * @param AmazonS3StructStatus $_deleteBucketResponse the DeleteBucketResponse
	 * @return AmazonS3StructStatus
	 */
	public function setDeleteBucketResponse($_deleteBucketResponse)
	{
		return ($this->DeleteBucketResponse = $_deleteBucketResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructDeleteBucketResponse
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