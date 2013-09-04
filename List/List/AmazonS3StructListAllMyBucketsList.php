<?php
/**
 * File for class AmazonS3StructListAllMyBucketsList
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructListAllMyBucketsList originally named ListAllMyBucketsList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructListAllMyBucketsList extends AmazonS3WsdlClass
{
	/**
	 * The Bucket
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var AmazonS3StructListAllMyBucketsEntry
	 */
	public $Bucket;
	/**
	 * Constructor method for ListAllMyBucketsList
	 * @see parent::__construct()
	 * @param AmazonS3StructListAllMyBucketsEntry $_bucket
	 * @return AmazonS3StructListAllMyBucketsList
	 */
	public function __construct($_bucket = NULL)
	{
		parent::__construct(array('Bucket'=>$_bucket));
	}
	/**
	 * Get Bucket value
	 * @return AmazonS3StructListAllMyBucketsEntry|null
	 */
	public function getBucket()
	{
		return $this->Bucket;
	}
	/**
	 * Set Bucket value
	 * @param AmazonS3StructListAllMyBucketsEntry $_bucket the Bucket
	 * @return AmazonS3StructListAllMyBucketsEntry
	 */
	public function setBucket($_bucket)
	{
		return ($this->Bucket = $_bucket);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructListAllMyBucketsList
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