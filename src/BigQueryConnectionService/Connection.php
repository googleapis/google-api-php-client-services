<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\BigQueryConnectionService;

class Connection extends \Google\Model
{
  /**
   * @var AwsProperties
   */
  public $aws;
  protected $awsType = AwsProperties::class;
  protected $awsDataType = '';
  /**
   * @var AzureProperties
   */
  public $azure;
  protected $azureType = AzureProperties::class;
  protected $azureDataType = '';
  /**
   * @var CloudResourceProperties
   */
  public $cloudResource;
  protected $cloudResourceType = CloudResourceProperties::class;
  protected $cloudResourceDataType = '';
  /**
   * @var CloudSpannerProperties
   */
  public $cloudSpanner;
  protected $cloudSpannerType = CloudSpannerProperties::class;
  protected $cloudSpannerDataType = '';
  /**
   * @var CloudSqlProperties
   */
  public $cloudSql;
  protected $cloudSqlType = CloudSqlProperties::class;
  protected $cloudSqlDataType = '';
  /**
   * @var string
   */
  public $creationTime;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $friendlyName;
  /**
   * @var bool
   */
  public $hasCredential;
  /**
   * @var string
   */
  public $kmsKeyName;
  /**
   * @var string
   */
  public $lastModifiedTime;
  /**
   * @var string
   */
  public $name;
  /**
   * @var SalesforceDataCloudProperties
   */
  public $salesforceDataCloud;
  protected $salesforceDataCloudType = SalesforceDataCloudProperties::class;
  protected $salesforceDataCloudDataType = '';
  /**
   * @var SparkProperties
   */
  public $spark;
  protected $sparkType = SparkProperties::class;
  protected $sparkDataType = '';

  /**
   * @param AwsProperties
   */
  public function setAws(AwsProperties $aws)
  {
    $this->aws = $aws;
  }
  /**
   * @return AwsProperties
   */
  public function getAws()
  {
    return $this->aws;
  }
  /**
   * @param AzureProperties
   */
  public function setAzure(AzureProperties $azure)
  {
    $this->azure = $azure;
  }
  /**
   * @return AzureProperties
   */
  public function getAzure()
  {
    return $this->azure;
  }
  /**
   * @param CloudResourceProperties
   */
  public function setCloudResource(CloudResourceProperties $cloudResource)
  {
    $this->cloudResource = $cloudResource;
  }
  /**
   * @return CloudResourceProperties
   */
  public function getCloudResource()
  {
    return $this->cloudResource;
  }
  /**
   * @param CloudSpannerProperties
   */
  public function setCloudSpanner(CloudSpannerProperties $cloudSpanner)
  {
    $this->cloudSpanner = $cloudSpanner;
  }
  /**
   * @return CloudSpannerProperties
   */
  public function getCloudSpanner()
  {
    return $this->cloudSpanner;
  }
  /**
   * @param CloudSqlProperties
   */
  public function setCloudSql(CloudSqlProperties $cloudSql)
  {
    $this->cloudSql = $cloudSql;
  }
  /**
   * @return CloudSqlProperties
   */
  public function getCloudSql()
  {
    return $this->cloudSql;
  }
  /**
   * @param string
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /**
   * @return string
   */
  public function getFriendlyName()
  {
    return $this->friendlyName;
  }
  /**
   * @param bool
   */
  public function setHasCredential($hasCredential)
  {
    $this->hasCredential = $hasCredential;
  }
  /**
   * @return bool
   */
  public function getHasCredential()
  {
    return $this->hasCredential;
  }
  /**
   * @param string
   */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /**
   * @return string
   */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
  /**
   * @param string
   */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /**
   * @return string
   */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param SalesforceDataCloudProperties
   */
  public function setSalesforceDataCloud(SalesforceDataCloudProperties $salesforceDataCloud)
  {
    $this->salesforceDataCloud = $salesforceDataCloud;
  }
  /**
   * @return SalesforceDataCloudProperties
   */
  public function getSalesforceDataCloud()
  {
    return $this->salesforceDataCloud;
  }
  /**
   * @param SparkProperties
   */
  public function setSpark(SparkProperties $spark)
  {
    $this->spark = $spark;
  }
  /**
   * @return SparkProperties
   */
  public function getSpark()
  {
    return $this->spark;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Connection::class, 'Google_Service_BigQueryConnectionService_Connection');
