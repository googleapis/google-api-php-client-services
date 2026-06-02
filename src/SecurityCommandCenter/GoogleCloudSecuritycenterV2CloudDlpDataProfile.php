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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2CloudDlpDataProfile extends \Google\Collection
{
  public const PARENT_TYPE_PARENT_TYPE_UNSPECIFIED = 'PARENT_TYPE_UNSPECIFIED';
  public const PARENT_TYPE_ORGANIZATION = 'ORGANIZATION';
  public const PARENT_TYPE_PROJECT = 'PROJECT';
  protected $collection_key = 'infoTypes';
  /**
   * @var string
   */
  public $dataProfile;
  protected $infoTypesType = GoogleCloudSecuritycenterV2InfoType::class;
  protected $infoTypesDataType = 'array';
  /**
   * @var string
   */
  public $parentType;

  /**
   * @param string $dataProfile
   */
  public function setDataProfile($dataProfile)
  {
    $this->dataProfile = $dataProfile;
  }
  /**
   * @return string
   */
  public function getDataProfile()
  {
    return $this->dataProfile;
  }
  /**
   * @param GoogleCloudSecuritycenterV2InfoType[] $infoTypes
   */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /**
   * @return GoogleCloudSecuritycenterV2InfoType[]
   */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
  /**
   * @param self::PARENT_TYPE_* $parentType
   */
  public function setParentType($parentType)
  {
    $this->parentType = $parentType;
  }
  /**
   * @return self::PARENT_TYPE_*
   */
  public function getParentType()
  {
    return $this->parentType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2CloudDlpDataProfile::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2CloudDlpDataProfile');
