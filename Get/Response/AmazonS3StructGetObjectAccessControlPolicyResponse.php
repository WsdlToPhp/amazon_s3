<?php
/**
 * File for class AmazonS3StructGetObjectAccessControlPolicyResponse
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructGetObjectAccessControlPolicyResponse originally named GetObjectAccessControlPolicyResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructGetObjectAccessControlPolicyResponse extends AmazonS3WsdlClass
{
	/**
	 * The GetObjectAccessControlPolicyResponse
	 * @var AmazonS3StructAccessControlPolicy
	 */
	public $GetObjectAccessControlPolicyResponse;
	/**
	 * Constructor method for GetObjectAccessControlPolicyResponse
	 * @see parent::__construct()
	 * @param AmazonS3StructAccessControlPolicy $_getObjectAccessControlPolicyResponse
	 * @return AmazonS3StructGetObjectAccessControlPolicyResponse
	 */
	public function __construct($_getObjectAccessControlPolicyResponse = NULL)
	{
		parent::__construct(array('GetObjectAccessControlPolicyResponse'=>$_getObjectAccessControlPolicyResponse));
	}
	/**
	 * Get GetObjectAccessControlPolicyResponse value
	 * @return AmazonS3StructAccessControlPolicy|null
	 */
	public function getGetObjectAccessControlPolicyResponse()
	{
		return $this->GetObjectAccessControlPolicyResponse;
	}
	/**
	 * Set GetObjectAccessControlPolicyResponse value
	 * @param AmazonS3StructAccessControlPolicy $_getObjectAccessControlPolicyResponse the GetObjectAccessControlPolicyResponse
	 * @return AmazonS3StructAccessControlPolicy
	 */
	public function setGetObjectAccessControlPolicyResponse($_getObjectAccessControlPolicyResponse)
	{
		return ($this->GetObjectAccessControlPolicyResponse = $_getObjectAccessControlPolicyResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructGetObjectAccessControlPolicyResponse
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