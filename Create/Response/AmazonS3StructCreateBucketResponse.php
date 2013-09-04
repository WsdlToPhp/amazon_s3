<?php
/**
 * File for class AmazonS3StructCreateBucketResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructCreateBucketResponse originally named CreateBucketResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructCreateBucketResponse extends AmazonS3WsdlClass
{
	/**
	 * The CreateBucketReturn
	 * @var AmazonS3StructCreateBucketResult
	 */
	public $CreateBucketReturn;
	/**
	 * Constructor method for CreateBucketResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructCreateBucketResult $_createBucketReturn
	 * @return AmazonS3StructCreateBucketResponse
	 */
	public function __construct($_createBucketReturn = NULL)
	{
		parent::__construct(array('CreateBucketReturn'=>$_createBucketReturn));
	}
	/**
	 * Get CreateBucketReturn value
	 * @return AmazonS3StructCreateBucketResult|null
	 */
	public function getCreateBucketReturn()
	{
		return $this->CreateBucketReturn;
	}
	/**
	 * Set CreateBucketReturn value
	 * @param AmazonS3StructCreateBucketResult $_createBucketReturn the CreateBucketReturn
	 * @return AmazonS3StructCreateBucketResult
	 */
	public function setCreateBucketReturn($_createBucketReturn)
	{
		return ($this->CreateBucketReturn = $_createBucketReturn);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructCreateBucketResponse
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