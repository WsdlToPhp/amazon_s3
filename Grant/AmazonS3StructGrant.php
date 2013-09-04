<?php
/**
 * File for class AmazonS3StructGrant
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructGrant originally named Grant
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructGrant extends AmazonS3WsdlClass
{
	/**
	 * The Grantee
	 * @var AmazonS3StructGrantee
	 */
	public $Grantee;
	/**
	 * The Permission
	 * @var AmazonS3EnumPermission
	 */
	public $Permission;
	/**
	 * Constructor method for Grant
	 * @see parent::__construct()
	 * @param AmazonS3StructGrantee $_grantee
	 * @param AmazonS3EnumPermission $_permission
	 * @return AmazonS3StructGrant
	 */
	public function __construct($_grantee = NULL,$_permission = NULL)
	{
		parent::__construct(array('Grantee'=>$_grantee,'Permission'=>$_permission));
	}
	/**
	 * Get Grantee value
	 * @return AmazonS3StructGrantee|null
	 */
	public function getGrantee()
	{
		return $this->Grantee;
	}
	/**
	 * Set Grantee value
	 * @param AmazonS3StructGrantee $_grantee the Grantee
	 * @return AmazonS3StructGrantee
	 */
	public function setGrantee($_grantee)
	{
		return ($this->Grantee = $_grantee);
	}
	/**
	 * Get Permission value
	 * @return AmazonS3EnumPermission|null
	 */
	public function getPermission()
	{
		return $this->Permission;
	}
	/**
	 * Set Permission value
	 * @uses AmazonS3EnumPermission::valueIsValid()
	 * @param AmazonS3EnumPermission $_permission the Permission
	 * @return AmazonS3EnumPermission
	 */
	public function setPermission($_permission)
	{
		if(!AmazonS3EnumPermission::valueIsValid($_permission))
		{
			return false;
		}
		return ($this->Permission = $_permission);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructGrant
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