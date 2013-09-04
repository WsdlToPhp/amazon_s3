<?php
/**
 * File for class AmazonS3StructListBucketResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListBucketResponse originally named ListBucketResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListBucketResponse extends AmazonS3WsdlClass
{
	/**
	 * The ListBucketResponse
	 * @var AmazonS3StructListBucketResult
	 */
	public $ListBucketResponse;
	/**
	 * Constructor method for ListBucketResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructListBucketResult $_listBucketResponse
	 * @return AmazonS3StructListBucketResponse
	 */
	public function __construct($_listBucketResponse = NULL)
	{
		parent::__construct(array('ListBucketResponse'=>$_listBucketResponse));
	}
	/**
	 * Get ListBucketResponse value
	 * @return AmazonS3StructListBucketResult|null
	 */
	public function getListBucketResponse()
	{
		return $this->ListBucketResponse;
	}
	/**
	 * Set ListBucketResponse value
	 * @param AmazonS3StructListBucketResult $_listBucketResponse the ListBucketResponse
	 * @return AmazonS3StructListBucketResult
	 */
	public function setListBucketResponse($_listBucketResponse)
	{
		return ($this->ListBucketResponse = $_listBucketResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListBucketResponse
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