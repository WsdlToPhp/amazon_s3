<?php
/**
 * File for class AmazonS3StructCreateBucketResult
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructCreateBucketResult originally named CreateBucketResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructCreateBucketResult extends AmazonS3WsdlClass
{
	/**
	 * The BucketName
	 * @var string
	 */
	public $BucketName;
	/**
	 * Constructor method for CreateBucketResult
	 * @see parent::__construct()
	 * @param string $_bucketName
	 * @return AmazonS3StructCreateBucketResult
	 */
	public function __construct($_bucketName = NULL)
	{
		parent::__construct(array('BucketName'=>$_bucketName));
	}
	/**
	 * Get BucketName value
	 * @return string|null
	 */
	public function getBucketName()
	{
		return $this->BucketName;
	}
	/**
	 * Set BucketName value
	 * @param string $_bucketName the BucketName
	 * @return string
	 */
	public function setBucketName($_bucketName)
	{
		return ($this->BucketName = $_bucketName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructCreateBucketResult
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