<?php
/**
 * File for class AmazonS3StructPutObjectResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructPutObjectResponse originally named PutObjectResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructPutObjectResponse extends AmazonS3WsdlClass
{
	/**
	 * The PutObjectResponse
	 * @var AmazonS3StructPutObjectResult
	 */
	public $PutObjectResponse;
	/**
	 * Constructor method for PutObjectResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructPutObjectResult $_putObjectResponse
	 * @return AmazonS3StructPutObjectResponse
	 */
	public function __construct($_putObjectResponse = NULL)
	{
		parent::__construct(array('PutObjectResponse'=>$_putObjectResponse));
	}
	/**
	 * Get PutObjectResponse value
	 * @return AmazonS3StructPutObjectResult|null
	 */
	public function getPutObjectResponse()
	{
		return $this->PutObjectResponse;
	}
	/**
	 * Set PutObjectResponse value
	 * @param AmazonS3StructPutObjectResult $_putObjectResponse the PutObjectResponse
	 * @return AmazonS3StructPutObjectResult
	 */
	public function setPutObjectResponse($_putObjectResponse)
	{
		return ($this->PutObjectResponse = $_putObjectResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructPutObjectResponse
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