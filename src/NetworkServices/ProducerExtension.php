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

namespace Google\Service\NetworkServices;

class ProducerExtension extends \Google\Model
{
  /**
   * Unspecified phase.
   */
  public const PHASE_PHASE_UNSPECIFIED = 'PHASE_UNSPECIFIED';
  /**
   * Not supported.
   */
  public const PHASE_TRAFFIC = 'TRAFFIC';
  /**
   * The `ProducerExtension` will be executed during the authorization phase.
   */
  public const PHASE_AUTHZ = 'AUTHZ';
  /**
   * Output only. The timestamp when the resource was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. A human-readable description of the resource.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. ETag of the resource. If this is provided, it must match the
   * server's ETag. If the provided ETag doesn't match the server's ETag, then
   * the request fails with a `409 ABORTED` error.
   *
   * @var string
   */
  public $etag;
  protected $extensionSettingsType = ProducerExtensionExtensionSettings::class;
  protected $extensionSettingsDataType = '';
  /**
   * Optional. Set of labels associated with the `ProducerExtension` resource.
   * The format must comply with [the following
   * requirements](https://cloud.google.com/compute/docs/labeling-
   * resources#requirements).
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. Name of the `ProducerExtension` resource in the following
   * format: `projects/{project}/locations/{location}/producerExtensions/{produc
   * er_extension}`.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The phase in which this `ProducerExtension` runs.
   *
   * @var string
   */
  public $phase;
  /**
   * Output only. The timestamp when the resource was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The timestamp when the resource was created.
   *
   * @param string $createTime
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
   * Optional. A human-readable description of the resource.
   *
   * @param string $description
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
   * Optional. ETag of the resource. If this is provided, it must match the
   * server's ETag. If the provided ETag doesn't match the server's ETag, then
   * the request fails with a `409 ABORTED` error.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Required. The configuration for the service that this `ProducerExtension`
   * offers.
   *
   * @param ProducerExtensionExtensionSettings $extensionSettings
   */
  public function setExtensionSettings(ProducerExtensionExtensionSettings $extensionSettings)
  {
    $this->extensionSettings = $extensionSettings;
  }
  /**
   * @return ProducerExtensionExtensionSettings
   */
  public function getExtensionSettings()
  {
    return $this->extensionSettings;
  }
  /**
   * Optional. Set of labels associated with the `ProducerExtension` resource.
   * The format must comply with [the following
   * requirements](https://cloud.google.com/compute/docs/labeling-
   * resources#requirements).
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. Name of the `ProducerExtension` resource in the following
   * format: `projects/{project}/locations/{location}/producerExtensions/{produc
   * er_extension}`.
   *
   * @param string $name
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
   * Required. The phase in which this `ProducerExtension` runs.
   *
   * Accepted values: PHASE_UNSPECIFIED, TRAFFIC, AUTHZ
   *
   * @param self::PHASE_* $phase
   */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /**
   * @return self::PHASE_*
   */
  public function getPhase()
  {
    return $this->phase;
  }
  /**
   * Output only. The timestamp when the resource was updated.
   *
   * @param string $updateTime
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
class_alias(ProducerExtension::class, 'Google_Service_NetworkServices_ProducerExtension');
