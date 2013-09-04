<?php
/**
 * File for class AmazonS3StructDeleteObjectResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructDeleteObjectResponse originally named DeleteObjectResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructDeleteObjectResponse extends AmazonS3WsdlClass
{
	/**
	 * The DeleteObjectResponse
	 * @var AmazonS3StructStatus
	 */
	public $DeleteObjectResponse;
	/**
	 * Constructor method for DeleteObjectResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructStatus $_deleteObjectResponse
	 * @return AmazonS3StructDeleteObjectResponse
	 */
	public function __construct($_deleteObjectResponse = NULL)
	{
		parent::__construct(array('DeleteObjectResponse'=>$_deleteObjectResponse));
	}
	/**
	 * Get DeleteObjectResponse value
	 * @return AmazonS3StructStatus|null
	 */
	public function getDeleteObjectResponse()
	{
		return $this->DeleteObjectResponse;
	}
	/**
	 * Set DeleteObjectResponse value
	 * @param AmazonS3StructStatus $_deleteObjectResponse the DeleteObjectResponse
	 * @return AmazonS3StructStatus
	 */
	public function setDeleteObjectResponse($_deleteObjectResponse)
	{
		return ($this->DeleteObjectResponse = $_deleteObjectResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructDeleteObjectResponse
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