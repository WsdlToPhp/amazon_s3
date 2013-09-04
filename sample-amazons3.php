<?php
/**
 * Test with AmazonS3
 * @package AmazonS3
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/AmazonS3Autoload.php';
/**
 * AmazonS3 Informations
 */
define('AMAZONS3_WSDL_URL','http://doc.s3.amazonaws.com/2006-03-01/AmazonS3.wsdl');
define('AMAZONS3_USER_LOGIN','');
define('AMAZONS3_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[AmazonS3WsdlClass::WSDL_URL] = AMAZONS3_WSDL_URL;
$wsdl[AmazonS3WsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[AmazonS3WsdlClass::WSDL_TRACE] = true;
if(AMAZONS3_USER_LOGIN !== '')
	$wsdl[AmazonS3WsdlClass::WSDL_LOGIN] = AMAZONS3_USER_LOGIN;
if(AMAZONS3_USER_PASSWORD !== '')
	$wsdl[AmazonS3WsdlClass::WSDL_PASSWD] = AMAZONS3_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/***********************************
 * Example for AmazonS3ServiceCreate
 */
$amazonS3ServiceCreate = new AmazonS3ServiceCreate($wsdl);
// sample call for AmazonS3ServiceCreate::CreateBucket()
if($amazonS3ServiceCreate->CreateBucket(new AmazonS3StructCreateBucket(/*** update parameters list ***/)))
	print_r($amazonS3ServiceCreate->getResult());
else
	print_r($amazonS3ServiceCreate->getLastError());

/***********************************
 * Example for AmazonS3ServiceDelete
 */
$amazonS3ServiceDelete = new AmazonS3ServiceDelete($wsdl);
// sample call for AmazonS3ServiceDelete::DeleteBucket()
if($amazonS3ServiceDelete->DeleteBucket(new AmazonS3StructDeleteBucket(/*** update parameters list ***/)))
	print_r($amazonS3ServiceDelete->getResult());
else
	print_r($amazonS3ServiceDelete->getLastError());
// sample call for AmazonS3ServiceDelete::DeleteObject()
if($amazonS3ServiceDelete->DeleteObject(new AmazonS3StructDeleteObject(/*** update parameters list ***/)))
	print_r($amazonS3ServiceDelete->getResult());
else
	print_r($amazonS3ServiceDelete->getLastError());

/********************************
 * Example for AmazonS3ServiceGet
 */
$amazonS3ServiceGet = new AmazonS3ServiceGet($wsdl);
// sample call for AmazonS3ServiceGet::GetObjectAccessControlPolicy()
if($amazonS3ServiceGet->GetObjectAccessControlPolicy(new AmazonS3StructGetObjectAccessControlPolicy(/*** update parameters list ***/)))
	print_r($amazonS3ServiceGet->getResult());
else
	print_r($amazonS3ServiceGet->getLastError());
// sample call for AmazonS3ServiceGet::GetBucketAccessControlPolicy()
if($amazonS3ServiceGet->GetBucketAccessControlPolicy(new AmazonS3StructGetBucketAccessControlPolicy(/*** update parameters list ***/)))
	print_r($amazonS3ServiceGet->getResult());
else
	print_r($amazonS3ServiceGet->getLastError());
// sample call for AmazonS3ServiceGet::GetObject()
if($amazonS3ServiceGet->GetObject(new AmazonS3StructGetObject(/*** update parameters list ***/)))
	print_r($amazonS3ServiceGet->getResult());
else
	print_r($amazonS3ServiceGet->getLastError());
// sample call for AmazonS3ServiceGet::GetObjectExtended()
if($amazonS3ServiceGet->GetObjectExtended(new AmazonS3StructGetObjectExtended(/*** update parameters list ***/)))
	print_r($amazonS3ServiceGet->getResult());
else
	print_r($amazonS3ServiceGet->getLastError());
// sample call for AmazonS3ServiceGet::GetBucketLoggingStatus()
if($amazonS3ServiceGet->GetBucketLoggingStatus(new AmazonS3StructGetBucketLoggingStatus(/*** update parameters list ***/)))
	print_r($amazonS3ServiceGet->getResult());
else
	print_r($amazonS3ServiceGet->getLastError());

/********************************
 * Example for AmazonS3ServiceSet
 */
$amazonS3ServiceSet = new AmazonS3ServiceSet($wsdl);
// sample call for AmazonS3ServiceSet::SetObjectAccessControlPolicy()
if($amazonS3ServiceSet->SetObjectAccessControlPolicy(new AmazonS3StructSetObjectAccessControlPolicy(/*** update parameters list ***/)))
	print_r($amazonS3ServiceSet->getResult());
else
	print_r($amazonS3ServiceSet->getLastError());
// sample call for AmazonS3ServiceSet::SetBucketAccessControlPolicy()
if($amazonS3ServiceSet->SetBucketAccessControlPolicy(new AmazonS3StructSetBucketAccessControlPolicy(/*** update parameters list ***/)))
	print_r($amazonS3ServiceSet->getResult());
else
	print_r($amazonS3ServiceSet->getLastError());
// sample call for AmazonS3ServiceSet::SetBucketLoggingStatus()
if($amazonS3ServiceSet->SetBucketLoggingStatus(new AmazonS3StructSetBucketLoggingStatus(/*** update parameters list ***/)))
	print_r($amazonS3ServiceSet->getResult());
else
	print_r($amazonS3ServiceSet->getLastError());

/********************************
 * Example for AmazonS3ServicePut
 */
$amazonS3ServicePut = new AmazonS3ServicePut($wsdl);
// sample call for AmazonS3ServicePut::PutObject()
if($amazonS3ServicePut->PutObject(new AmazonS3StructPutObject(/*** update parameters list ***/)))
	print_r($amazonS3ServicePut->getResult());
else
	print_r($amazonS3ServicePut->getLastError());
// sample call for AmazonS3ServicePut::PutObjectInline()
if($amazonS3ServicePut->PutObjectInline(new AmazonS3StructPutObjectInline(/*** update parameters list ***/)))
	print_r($amazonS3ServicePut->getResult());
else
	print_r($amazonS3ServicePut->getLastError());

/*********************************
 * Example for AmazonS3ServiceList
 */
$amazonS3ServiceList = new AmazonS3ServiceList($wsdl);
// sample call for AmazonS3ServiceList::ListBucket()
if($amazonS3ServiceList->ListBucket(new AmazonS3StructListBucket(/*** update parameters list ***/)))
	print_r($amazonS3ServiceList->getResult());
else
	print_r($amazonS3ServiceList->getLastError());
// sample call for AmazonS3ServiceList::ListAllMyBuckets()
if($amazonS3ServiceList->ListAllMyBuckets(new AmazonS3StructListAllMyBuckets(/*** update parameters list ***/)))
	print_r($amazonS3ServiceList->getResult());
else
	print_r($amazonS3ServiceList->getLastError());

/*********************************
 * Example for AmazonS3ServiceCopy
 */
$amazonS3ServiceCopy = new AmazonS3ServiceCopy($wsdl);
// sample call for AmazonS3ServiceCopy::CopyObject()
if($amazonS3ServiceCopy->CopyObject(new AmazonS3StructCopyObject(/*** update parameters list ***/)))
	print_r($amazonS3ServiceCopy->getResult());
else
	print_r($amazonS3ServiceCopy->getLastError());
?>