<?php
/**
 * File for class AmazonS3StructLoggingSettings
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructLoggingSettings originally named LoggingSettings
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructLoggingSettings extends AmazonS3WsdlClass
{
	/**
	 * The TargetBucket
	 * @var string
	 */
	public $TargetBucket;
	/**
	 * The TargetPrefix
	 * @var string
	 */
	public $TargetPrefix;
	/**
	 * The TargetGrants
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3StructAccessControlList
	 */
	public $TargetGrants;
	/**
	 * Constructor method for LoggingSettings
	 * @see parent::__construct()
	 * @param string $_targetBucket
	 * @param string $_targetPrefix
	 * @param AmazonS3StructAccessControlList $_targetGrants
	 * @return AmazonS3StructLoggingSettings
	 */
	public function __construct($_targetBucket = NULL,$_targetPrefix = NULL,$_targetGrants = NULL)
	{
		parent::__construct(array('TargetBucket'=>$_targetBucket,'TargetPrefix'=>$_targetPrefix,'TargetGrants'=>$_targetGrants));
	}
	/**
	 * Get TargetBucket value
	 * @return string|null
	 */
	public function getTargetBucket()
	{
		return $this->TargetBucket;
	}
	/**
	 * Set TargetBucket value
	 * @param string $_targetBucket the TargetBucket
	 * @return string
	 */
	public function setTargetBucket($_targetBucket)
	{
		return ($this->TargetBucket = $_targetBucket);
	}
	/**
	 * Get TargetPrefix value
	 * @return string|null
	 */
	public function getTargetPrefix()
	{
		return $this->TargetPrefix;
	}
	/**
	 * Set TargetPrefix value
	 * @param string $_targetPrefix the TargetPrefix
	 * @return string
	 */
	public function setTargetPrefix($_targetPrefix)
	{
		return ($this->TargetPrefix = $_targetPrefix);
	}
	/**
	 * Get TargetGrants value
	 * @return AmazonS3StructAccessControlList|null
	 */
	public function getTargetGrants()
	{
		return $this->TargetGrants;
	}
	/**
	 * Set TargetGrants value
	 * @param AmazonS3StructAccessControlList $_targetGrants the TargetGrants
	 * @return AmazonS3StructAccessControlList
	 */
	public function setTargetGrants($_targetGrants)
	{
		return ($this->TargetGrants = $_targetGrants);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructLoggingSettings
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