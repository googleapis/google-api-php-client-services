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

namespace Google\Service\DataprocMetastore;

class Federation extends \Google\Model
{
  /**
   * The state of the metastore federation is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The metastore federation is in the process of being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The metastore federation is running and ready to serve queries.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The metastore federation is being updated. It remains usable but cannot
   * accept additional update requests or be deleted at this time.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The metastore federation is undergoing deletion. It cannot be used.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The metastore federation has encountered an error and cannot be used. The
   * metastore federation should be deleted.
   */
  public const STATE_ERROR = 'ERROR';
  protected $backendMetastoresType = BackendMetastore::class;
  protected $backendMetastoresDataType = 'map';
  /**
   * Output only. The time when the metastore federation was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The federation endpoint.
   *
   * @var string
   */
  public $endpointUri;
  /**
   * User-defined labels for the metastore federation.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Immutable. The relative resource name of the federation, of the form: proje
   * cts/{project_number}/locations/{location_id}/federations/{federation_id}`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The current state of the federation.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Additional information about the current state of the
   * metastore federation, if available.
   *
   * @var string
   */
  public $stateMessage;
  /**
   * Optional. Input only. Immutable. Tag keys/values directly bound to this
   * resource. For example: "123/environment": "production", "123/costCenter":
   * "marketing"
   *
   * @var string[]
   */
  public $tags;
  /**
   * Output only. The globally unique resource identifier of the metastore
   * federation.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. The time when the metastore federation was last updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Immutable. The Apache Hive metastore version of the federation. All backend
   * metastore versions must be compatible with the federation version.
   *
   * @var string
   */
  public $version;

  /**
   * A map from BackendMetastore rank to BackendMetastores from which the
   * federation service serves metadata at query time. The map key represents
   * the order in which BackendMetastores should be evaluated to resolve
   * database names at query time and should be greater than or equal to zero. A
   * BackendMetastore with a lower number will be evaluated before a
   * BackendMetastore with a higher number.
   *
   * @param BackendMetastore[] $backendMetastores
   */
  public function setBackendMetastores($backendMetastores)
  {
    $this->backendMetastores = $backendMetastores;
  }
  /**
   * @return BackendMetastore[]
   */
  public function getBackendMetastores()
  {
    return $this->backendMetastores;
  }
  /**
   * Output only. The time when the metastore federation was created.
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
   * Output only. The federation endpoint.
   *
   * @param string $endpointUri
   */
  public function setEndpointUri($endpointUri)
  {
    $this->endpointUri = $endpointUri;
  }
  /**
   * @return string
   */
  public function getEndpointUri()
  {
    return $this->endpointUri;
  }
  /**
   * User-defined labels for the metastore federation.
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
   * Immutable. The relative resource name of the federation, of the form: proje
   * cts/{project_number}/locations/{location_id}/federations/{federation_id}`.
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
   * Output only. The current state of the federation.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, UPDATING, DELETING,
   * ERROR
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Additional information about the current state of the
   * metastore federation, if available.
   *
   * @param string $stateMessage
   */
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /**
   * @return string
   */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
  /**
   * Optional. Input only. Immutable. Tag keys/values directly bound to this
   * resource. For example: "123/environment": "production", "123/costCenter":
   * "marketing"
   *
   * @param string[] $tags
   */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /**
   * @return string[]
   */
  public function getTags()
  {
    return $this->tags;
  }
  /**
   * Output only. The globally unique resource identifier of the metastore
   * federation.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. The time when the metastore federation was last updated.
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
  /**
   * Immutable. The Apache Hive metastore version of the federation. All backend
   * metastore versions must be compatible with the federation version.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Federation::class, 'Google_Service_DataprocMetastore_Federation');
