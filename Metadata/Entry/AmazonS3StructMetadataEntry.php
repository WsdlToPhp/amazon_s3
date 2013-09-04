<?php
/**
 * File for class AmazonS3StructMetadataEntry
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructMetadataEntry originally named MetadataEntry
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructMetadataEntry extends AmazonS3WsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor method for MetadataEntry
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_value
	 * @return AmazonS3StructMetadataEntry
	 */
	public function __construct($_name = NULL,$_value = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Value'=>$_value));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Value value
	 * @param string $_value the Value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->Value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructMetadataEntry
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