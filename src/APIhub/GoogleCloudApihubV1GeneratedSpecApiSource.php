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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1GeneratedSpecApiSource extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Apigee X.
   */
  public const TYPE_APIGEE_X = 'APIGEE_X';
  /**
   * Output only. Per-source instance label (e.g. "/" for Apigee X).
   *
   * @var string
   */
  public $sourceDisplayName;
  /**
   * Output only. The source type.
   *
   * @var string
   */
  public $type;
  /**
   * Output only. Server-supplied label (e.g. "Apigee X").
   *
   * @var string
   */
  public $typeDisplayName;

  /**
   * Output only. Per-source instance label (e.g. "/" for Apigee X).
   *
   * @param string $sourceDisplayName
   */
  public function setSourceDisplayName($sourceDisplayName)
  {
    $this->sourceDisplayName = $sourceDisplayName;
  }
  /**
   * @return string
   */
  public function getSourceDisplayName()
  {
    return $this->sourceDisplayName;
  }
  /**
   * Output only. The source type.
   *
   * Accepted values: TYPE_UNSPECIFIED, APIGEE_X
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. Server-supplied label (e.g. "Apigee X").
   *
   * @param string $typeDisplayName
   */
  public function setTypeDisplayName($typeDisplayName)
  {
    $this->typeDisplayName = $typeDisplayName;
  }
  /**
   * @return string
   */
  public function getTypeDisplayName()
  {
    return $this->typeDisplayName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1GeneratedSpecApiSource::class, 'Google_Service_APIhub_GoogleCloudApihubV1GeneratedSpecApiSource');
