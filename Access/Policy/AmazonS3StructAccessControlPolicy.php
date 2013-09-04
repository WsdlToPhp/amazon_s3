<?php
/**
 * File for class AmazonS3StructAccessControlPolicy
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructAccessControlPolicy originally named AccessControlPolicy
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructAccessControlPolicy extends AmazonS3WsdlClass
{
	/**
	 * The Owner
	 * @var AmazonS3StructCanonicalUser
	 */
	public $Owner;
	/**
	 * The AccessControlList
	 * @var AmazonS3StructAccessControlList
	 */
	public $AccessControlList;
	/**
	 * Constructor method for AccessControlPolicy
	 * @see parent::__construct()
	 * @param AmazonS3StructCanonicalUser $_owner
	 * @param AmazonS3StructAccessControlList $_accessControlList
	 * @return AmazonS3StructAccessControlPolicy
	 */
	public function __construct($_owner = NULL,$_accessControlList = NULL)
	{
		parent::__construct(array('Owner'=>$_owner,'AccessControlList'=>$_accessControlList));
	}
	/**
	 * Get Owner value
	 * @return AmazonS3StructCanonicalUser|null
	 */
	public function getOwner()
	{
		return $this->Owner;
	}
	/**
	 * Set Owner value
	 * @param AmazonS3StructCanonicalUser $_owner the Owner
	 * @return AmazonS3StructCanonicalUser
	 */
	public function setOwner($_owner)
	{
		return ($this->Owner = $_owner);
	}
	/**
	 * Get AccessControlList value
	 * @return AmazonS3StructAccessControlList|null
	 */
	public function getAccessControlList()
	{
		return $this->AccessControlList;
	}
	/**
	 * Set AccessControlList value
	 * @param AmazonS3StructAccessControlList $_accessControlList the AccessControlList
	 * @return AmazonS3StructAccessControlList
	 */
	public function setAccessControlList($_accessControlList)
	{
		return ($this->AccessControlList = $_accessControlList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructAccessControlPolicy
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