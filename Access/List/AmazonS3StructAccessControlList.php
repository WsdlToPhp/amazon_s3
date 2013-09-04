<?php
/**
 * File for class AmazonS3StructAccessControlList
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructAccessControlList originally named AccessControlList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructAccessControlList extends AmazonS3WsdlClass
{
	/**
	 * The Grant
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var AmazonS3StructGrant
	 */
	public $Grant;
	/**
	 * Constructor method for AccessControlList
	 * @see parent::__construct()
	 * @param AmazonS3StructGrant $_grant
	 * @return AmazonS3StructAccessControlList
	 */
	public function __construct($_grant = NULL)
	{
		parent::__construct(array('Grant'=>$_grant));
	}
	/**
	 * Get Grant value
	 * @return AmazonS3StructGrant|null
	 */
	public function getGrant()
	{
		return $this->Grant;
	}
	/**
	 * Set Grant value
	 * @param AmazonS3StructGrant $_grant the Grant
	 * @return AmazonS3StructGrant
	 */
	public function setGrant($_grant)
	{
		return ($this->Grant = $_grant);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructAccessControlList
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