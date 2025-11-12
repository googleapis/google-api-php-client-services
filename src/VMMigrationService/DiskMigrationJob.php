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

namespace Google\Service\VMMigrationService;

class DiskMigrationJob extends \Google\Collection
{
  protected $collection_key = 'steps';
  protected $awsSourceDiskDetailsType = AwsSourceDiskDetails::class;
  protected $awsSourceDiskDetailsDataType = '';
  /**
   * @var string
   */
  public $createTime;
  protected $errorsType = Status::class;
  protected $errorsDataType = 'array';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $state;
  protected $stepsType = DiskMigrationStep::class;
  protected $stepsDataType = 'array';
  protected $targetDetailsType = DiskMigrationJobTargetDetails::class;
  protected $targetDetailsDataType = '';
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param AwsSourceDiskDetails
   */
  public function setAwsSourceDiskDetails(AwsSourceDiskDetails $awsSourceDiskDetails)
  {
    $this->awsSourceDiskDetails = $awsSourceDiskDetails;
  }
  /**
   * @return AwsSourceDiskDetails
   */
  public function getAwsSourceDiskDetails()
  {
    return $this->awsSourceDiskDetails;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param Status[]
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Status[]
   */
  public function getErrors()
  {
    return $this->errors;
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
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param DiskMigrationStep[]
   */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /**
   * @return DiskMigrationStep[]
   */
  public function getSteps()
  {
    return $this->steps;
  }
  /**
   * @param DiskMigrationJobTargetDetails
   */
  public function setTargetDetails(DiskMigrationJobTargetDetails $targetDetails)
  {
    $this->targetDetails = $targetDetails;
  }
  /**
   * @return DiskMigrationJobTargetDetails
   */
  public function getTargetDetails()
  {
    return $this->targetDetails;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiskMigrationJob::class, 'Google_Service_VMMigrationService_DiskMigrationJob');
