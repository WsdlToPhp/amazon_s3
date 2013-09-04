<?php
/**
 * File for class AmazonS3StructBucketLoggingStatus
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructBucketLoggingStatus originally named BucketLoggingStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructBucketLoggingStatus extends AmazonS3WsdlClass
{
	/**
	 * The LoggingEnabled
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3StructLoggingSettings
	 */
	public $LoggingEnabled;
	/**
	 * Constructor method for BucketLoggingStatus
	 * @see parent::__construct()
	 * @param AmazonS3StructLoggingSettings $_loggingEnabled
	 * @return AmazonS3StructBucketLoggingStatus
	 */
	public function __construct($_loggingEnabled = NULL)
	{
		parent::__construct(array('LoggingEnabled'=>$_loggingEnabled));
	}
	/**
	 * Get LoggingEnabled value
	 * @return AmazonS3StructLoggingSettings|null
	 */
	public function getLoggingEnabled()
	{
		return $this->LoggingEnabled;
	}
	/**
	 * Set LoggingEnabled value
	 * @param AmazonS3StructLoggingSettings $_loggingEnabled the LoggingEnabled
	 * @return AmazonS3StructLoggingSettings
	 */
	public function setLoggingEnabled($_loggingEnabled)
	{
		return ($this->LoggingEnabled = $_loggingEnabled);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructBucketLoggingStatus
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