<?php
/**
 * File for class AmazonS3StructCopyObjectResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructCopyObjectResponse originally named CopyObjectResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructCopyObjectResponse extends AmazonS3WsdlClass
{
	/**
	 * The CopyObjectResult
	 * @var AmazonS3StructCopyObjectResult
	 */
	public $CopyObjectResult;
	/**
	 * Constructor method for CopyObjectResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructCopyObjectResult $_copyObjectResult
	 * @return AmazonS3StructCopyObjectResponse
	 */
	public function __construct($_copyObjectResult = NULL)
	{
		parent::__construct(array('CopyObjectResult'=>$_copyObjectResult));
	}
	/**
	 * Get CopyObjectResult value
	 * @return AmazonS3StructCopyObjectResult|null
	 */
	public function getCopyObjectResult()
	{
		return $this->CopyObjectResult;
	}
	/**
	 * Set CopyObjectResult value
	 * @param AmazonS3StructCopyObjectResult $_copyObjectResult the CopyObjectResult
	 * @return AmazonS3StructCopyObjectResult
	 */
	public function setCopyObjectResult($_copyObjectResult)
	{
		return ($this->CopyObjectResult = $_copyObjectResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructCopyObjectResponse
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