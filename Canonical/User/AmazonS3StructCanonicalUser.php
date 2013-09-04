<?php
/**
 * File for class AmazonS3StructCanonicalUser
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructCanonicalUser originally named CanonicalUser
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructCanonicalUser extends AmazonS3StructUser
{
	/**
	 * The ID
	 * @var string
	 */
	public $ID;
	/**
	 * The DisplayName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $DisplayName;
	/**
	 * Constructor method for CanonicalUser
	 * @see parent::__construct()
	 * @param string $_iD
	 * @param string $_displayName
	 * @return AmazonS3StructCanonicalUser
	 */
	public function __construct($_iD = NULL,$_displayName = NULL)
	{
		AmazonS3WsdlClass::__construct(array('ID'=>$_iD,'DisplayName'=>$_displayName));
	}
	/**
	 * Get ID value
	 * @return string|null
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set ID value
	 * @param string $_iD the ID
	 * @return string
	 */
	public function setID($_iD)
	{
		return ($this->ID = $_iD);
	}
	/**
	 * Get DisplayName value
	 * @return string|null
	 */
	public function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * Set DisplayName value
	 * @param string $_displayName the DisplayName
	 * @return string
	 */
	public function setDisplayName($_displayName)
	{
		return ($this->DisplayName = $_displayName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructCanonicalUser
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