<?php
/**
 * File for class AmazonS3StructListAllMyBucketsResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListAllMyBucketsResponse originally named ListAllMyBucketsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListAllMyBucketsResponse extends AmazonS3WsdlClass
{
	/**
	 * The ListAllMyBucketsResponse
	 * @var AmazonS3StructListAllMyBucketsResult
	 */
	public $ListAllMyBucketsResponse;
	/**
	 * Constructor method for ListAllMyBucketsResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructListAllMyBucketsResult $_listAllMyBucketsResponse
	 * @return AmazonS3StructListAllMyBucketsResponse
	 */
	public function __construct($_listAllMyBucketsResponse = NULL)
	{
		parent::__construct(array('ListAllMyBucketsResponse'=>$_listAllMyBucketsResponse));
	}
	/**
	 * Get ListAllMyBucketsResponse value
	 * @return AmazonS3StructListAllMyBucketsResult|null
	 */
	public function getListAllMyBucketsResponse()
	{
		return $this->ListAllMyBucketsResponse;
	}
	/**
	 * Set ListAllMyBucketsResponse value
	 * @param AmazonS3StructListAllMyBucketsResult $_listAllMyBucketsResponse the ListAllMyBucketsResponse
	 * @return AmazonS3StructListAllMyBucketsResult
	 */
	public function setListAllMyBucketsResponse($_listAllMyBucketsResponse)
	{
		return ($this->ListAllMyBucketsResponse = $_listAllMyBucketsResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListAllMyBucketsResponse
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