<?php
/**
 * File for class AmazonS3StructPutObjectInlineResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructPutObjectInlineResponse originally named PutObjectInlineResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructPutObjectInlineResponse extends AmazonS3WsdlClass
{
	/**
	 * The PutObjectInlineResponse
	 * @var AmazonS3StructPutObjectResult
	 */
	public $PutObjectInlineResponse;
	/**
	 * Constructor method for PutObjectInlineResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructPutObjectResult $_putObjectInlineResponse
	 * @return AmazonS3StructPutObjectInlineResponse
	 */
	public function __construct($_putObjectInlineResponse = NULL)
	{
		parent::__construct(array('PutObjectInlineResponse'=>$_putObjectInlineResponse));
	}
	/**
	 * Get PutObjectInlineResponse value
	 * @return AmazonS3StructPutObjectResult|null
	 */
	public function getPutObjectInlineResponse()
	{
		return $this->PutObjectInlineResponse;
	}
	/**
	 * Set PutObjectInlineResponse value
	 * @param AmazonS3StructPutObjectResult $_putObjectInlineResponse the PutObjectInlineResponse
	 * @return AmazonS3StructPutObjectResult
	 */
	public function setPutObjectInlineResponse($_putObjectInlineResponse)
	{
		return ($this->PutObjectInlineResponse = $_putObjectInlineResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructPutObjectInlineResponse
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