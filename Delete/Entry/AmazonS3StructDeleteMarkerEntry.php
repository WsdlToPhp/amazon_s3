<?php
/**
 * File for class AmazonS3StructDeleteMarkerEntry
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructDeleteMarkerEntry originally named DeleteMarkerEntry
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructDeleteMarkerEntry extends AmazonS3WsdlClass
{
	/**
	 * The Key
	 * @var string
	 */
	public $Key;
	/**
	 * The VersionId
	 * @var string
	 */
	public $VersionId;
	/**
	 * The IsLatest
	 * @var boolean
	 */
	public $IsLatest;
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * The Owner
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3StructCanonicalUser
	 */
	public $Owner;
	/**
	 * Constructor method for DeleteMarkerEntry
	 * @see parent::__construct()
	 * @param string $_key
	 * @param string $_versionId
	 * @param boolean $_isLatest
	 * @param dateTime $_lastModified
	 * @param AmazonS3StructCanonicalUser $_owner
	 * @return AmazonS3StructDeleteMarkerEntry
	 */
	public function __construct($_key = NULL,$_versionId = NULL,$_isLatest = NULL,$_lastModified = NULL,$_owner = NULL)
	{
		parent::__construct(array('Key'=>$_key,'VersionId'=>$_versionId,'IsLatest'=>$_isLatest,'LastModified'=>$_lastModified,'Owner'=>$_owner));
	}
	/**
	 * Get Key value
	 * @return string|null
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set Key value
	 * @param string $_key the Key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->Key = $_key);
	}
	/**
	 * Get VersionId value
	 * @return string|null
	 */
	public function getVersionId()
	{
		return $this->VersionId;
	}
	/**
	 * Set VersionId value
	 * @param string $_versionId the VersionId
	 * @return string
	 */
	public function setVersionId($_versionId)
	{
		return ($this->VersionId = $_versionId);
	}
	/**
	 * Get IsLatest value
	 * @return boolean|null
	 */
	public function getIsLatest()
	{
		return $this->IsLatest;
	}
	/**
	 * Set IsLatest value
	 * @param boolean $_isLatest the IsLatest
	 * @return boolean
	 */
	public function setIsLatest($_isLatest)
	{
		return ($this->IsLatest = $_isLatest);
	}
	/**
	 * Get LastModified value
	 * @return dateTime|null
	 */
	public function getLastModified()
	{
		return $this->LastModified;
	}
	/**
	 * Set LastModified value
	 * @param dateTime $_lastModified the LastModified
	 * @return dateTime
	 */
	public function setLastModified($_lastModified)
	{
		return ($this->LastModified = $_lastModified);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructDeleteMarkerEntry
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