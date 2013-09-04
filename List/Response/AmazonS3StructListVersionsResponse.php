<?php
/**
 * File for class AmazonS3StructListVersionsResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListVersionsResponse originally named ListVersionsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListVersionsResponse extends AmazonS3WsdlClass
{
	/**
	 * The ListVersionsResponse
	 * @var AmazonS3StructListVersionsResult
	 */
	public $ListVersionsResponse;
	/**
	 * Constructor method for ListVersionsResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructListVersionsResult $_listVersionsResponse
	 * @return AmazonS3StructListVersionsResponse
	 */
	public function __construct($_listVersionsResponse = NULL)
	{
		parent::__construct(array('ListVersionsResponse'=>$_listVersionsResponse));
	}
	/**
	 * Get ListVersionsResponse value
	 * @return AmazonS3StructListVersionsResult|null
	 */
	public function getListVersionsResponse()
	{
		return $this->ListVersionsResponse;
	}
	/**
	 * Set ListVersionsResponse value
	 * @param AmazonS3StructListVersionsResult $_listVersionsResponse the ListVersionsResponse
	 * @return AmazonS3StructListVersionsResult
	 */
	public function setListVersionsResponse($_listVersionsResponse)
	{
		return ($this->ListVersionsResponse = $_listVersionsResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListVersionsResponse
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