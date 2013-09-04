<?php
/**
 * File for class AmazonS3StructListAllMyBucketsEntry
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListAllMyBucketsEntry originally named ListAllMyBucketsEntry
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListAllMyBucketsEntry extends AmazonS3WsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The CreationDate
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * Constructor method for ListAllMyBucketsEntry
	 * @see parent::__construct()
	 * @param string $_name
	 * @param dateTime $_creationDate
	 * @return AmazonS3StructListAllMyBucketsEntry
	 */
	public function __construct($_name = NULL,$_creationDate = NULL)
	{
		parent::__construct(array('Name'=>$_name,'CreationDate'=>$_creationDate));
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
	 * Get CreationDate value
	 * @return dateTime|null
	 */
	public function getCreationDate()
	{
		return $this->CreationDate;
	}
	/**
	 * Set CreationDate value
	 * @param dateTime $_creationDate the CreationDate
	 * @return dateTime
	 */
	public function setCreationDate($_creationDate)
	{
		return ($this->CreationDate = $_creationDate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListAllMyBucketsEntry
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