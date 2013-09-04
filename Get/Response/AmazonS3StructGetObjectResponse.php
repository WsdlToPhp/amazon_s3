<?php
/**
 * File for class AmazonS3StructGetObjectResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructGetObjectResponse originally named GetObjectResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructGetObjectResponse extends AmazonS3WsdlClass
{
	/**
	 * The GetObjectResponse
	 * @var AmazonS3StructGetObjectResult
	 */
	public $GetObjectResponse;
	/**
	 * Constructor method for GetObjectResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructGetObjectResult $_getObjectResponse
	 * @return AmazonS3StructGetObjectResponse
	 */
	public function __construct($_getObjectResponse = NULL)
	{
		parent::__construct(array('GetObjectResponse'=>$_getObjectResponse));
	}
	/**
	 * Get GetObjectResponse value
	 * @return AmazonS3StructGetObjectResult|null
	 */
	public function getGetObjectResponse()
	{
		return $this->GetObjectResponse;
	}
	/**
	 * Set GetObjectResponse value
	 * @param AmazonS3StructGetObjectResult $_getObjectResponse the GetObjectResponse
	 * @return AmazonS3StructGetObjectResult
	 */
	public function setGetObjectResponse($_getObjectResponse)
	{
		return ($this->GetObjectResponse = $_getObjectResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructGetObjectResponse
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