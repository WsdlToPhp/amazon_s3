<?php
/**
 * File for class AmazonS3StructVersioningConfiguration
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for AmazonS3StructVersioningConfiguration originally named VersioningConfiguration
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.xsd}
 * @package AmazonS3
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class AmazonS3StructVersioningConfiguration extends AmazonS3WsdlClass
{
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3EnumVersioningStatus
	 */
	public $Status;
	/**
	 * The MfaDelete
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var AmazonS3EnumMfaDeleteStatus
	 */
	public $MfaDelete;
	/**
	 * Constructor method for VersioningConfiguration
	 * @see parent::__construct()
	 * @param AmazonS3EnumVersioningStatus $_status
	 * @param AmazonS3EnumMfaDeleteStatus $_mfaDelete
	 * @return AmazonS3StructVersioningConfiguration
	 */
	public function __construct($_status = NULL,$_mfaDelete = NULL)
	{
		parent::__construct(array('Status'=>$_status,'MfaDelete'=>$_mfaDelete));
	}
	/**
	 * Get Status value
	 * @return AmazonS3EnumVersioningStatus|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses AmazonS3EnumVersioningStatus::valueIsValid()
	 * @param AmazonS3EnumVersioningStatus $_status the Status
	 * @return AmazonS3EnumVersioningStatus
	 */
	public function setStatus($_status)
	{
		if(!AmazonS3EnumVersioningStatus::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Get MfaDelete value
	 * @return AmazonS3EnumMfaDeleteStatus|null
	 */
	public function getMfaDelete()
	{
		return $this->MfaDelete;
	}
	/**
	 * Set MfaDelete value
	 * @uses AmazonS3EnumMfaDeleteStatus::valueIsValid()
	 * @param AmazonS3EnumMfaDeleteStatus $_mfaDelete the MfaDelete
	 * @return AmazonS3EnumMfaDeleteStatus
	 */
	public function setMfaDelete($_mfaDelete)
	{
		if(!AmazonS3EnumMfaDeleteStatus::valueIsValid($_mfaDelete))
		{
			return false;
		}
		return ($this->MfaDelete = $_mfaDelete);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see AmazonS3WsdlClass::__set_state()
	 * @uses AmazonS3WsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return AmazonS3StructVersioningConfiguration
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