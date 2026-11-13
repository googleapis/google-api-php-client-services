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

class ExtensionBinding extends \Google\Collection
{
  protected $collection_key = 'matchConditions';
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
   * Optional. Etag of the resource. If provided, it must match the server's
   * etag. If the provided etag does not match the server's etag, the request
   * will fail with a 409 ABORTED error.
   *
   * @var string
   */
  public $etag;
  /**
   * Optional. Determines the behavior of the extension binding when the call to
   * the extension fails or times out. Default value is `false`. When set to
   * `true`, failures of the extension are silently ignored.
   *
   * @var bool
   */
  public $failOpen;
  /**
   * Optional. Set of labels associated with the `ExtensionBinding` resource.
   * The format must comply with [the following
   * requirements](https://cloud.google.com/compute/docs/labeling-
   * resources#requirements).
   *
   * @var string[]
   */
  public $labels;
  protected $matchConditionsType = ExtensionBindingMatchCondition::class;
  protected $matchConditionsDataType = 'array';
  /**
   * Identifier. Name of the `ExtensionBinding` resource in the following
   * format: `projects/{project}/locations/{location}/extensionBindings/{extensi
   * on_binding}`.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. This field is not supported.
   *
   * @var int
   */
  public $priority;
  /**
   * Required. The name of the extension that this binding should attach to
   * target resources. Format: * For Google-provided extensions, specify the
   * service endpoint, for example `modelarmor.us-central1.rep.googleapis.com`.
   *
   * @var string
   */
  public $producerExtension;
  /**
   * Optional. Additional metadata that should be passed to the attached
   * extension with each request. This field is subject to the following
   * limitations: * The total size of the metadata must be less than 1 KiB. *
   * The total number of keys must be less than 16. * The length of each key
   * must be less than 64 characters. * The length of each value must be less
   * than 1024 characters.
   *
   * @var string[]
   */
  public $producerMetadata;
  protected $targetType = ExtensionBindingTarget::class;
  protected $targetDataType = '';
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
   * Optional. Etag of the resource. If provided, it must match the server's
   * etag. If the provided etag does not match the server's etag, the request
   * will fail with a 409 ABORTED error.
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
   * Optional. Determines the behavior of the extension binding when the call to
   * the extension fails or times out. Default value is `false`. When set to
   * `true`, failures of the extension are silently ignored.
   *
   * @param bool $failOpen
   */
  public function setFailOpen($failOpen)
  {
    $this->failOpen = $failOpen;
  }
  /**
   * @return bool
   */
  public function getFailOpen()
  {
    return $this->failOpen;
  }
  /**
   * Optional. Set of labels associated with the `ExtensionBinding` resource.
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
   * Optional. A list of match conditions to evaluate against the incoming
   * request. The extension is invoked if the request matches at least one
   * condition, or if no match conditions are specified. A request matches a
   * condition only if it matches every field that is set in that condition.
   * Limited to 5 conditions.
   *
   * @param ExtensionBindingMatchCondition[] $matchConditions
   */
  public function setMatchConditions($matchConditions)
  {
    $this->matchConditions = $matchConditions;
  }
  /**
   * @return ExtensionBindingMatchCondition[]
   */
  public function getMatchConditions()
  {
    return $this->matchConditions;
  }
  /**
   * Identifier. Name of the `ExtensionBinding` resource in the following
   * format: `projects/{project}/locations/{location}/extensionBindings/{extensi
   * on_binding}`.
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
   * Optional. This field is not supported.
   *
   * @param int $priority
   */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /**
   * @return int
   */
  public function getPriority()
  {
    return $this->priority;
  }
  /**
   * Required. The name of the extension that this binding should attach to
   * target resources. Format: * For Google-provided extensions, specify the
   * service endpoint, for example `modelarmor.us-central1.rep.googleapis.com`.
   *
   * @param string $producerExtension
   */
  public function setProducerExtension($producerExtension)
  {
    $this->producerExtension = $producerExtension;
  }
  /**
   * @return string
   */
  public function getProducerExtension()
  {
    return $this->producerExtension;
  }
  /**
   * Optional. Additional metadata that should be passed to the attached
   * extension with each request. This field is subject to the following
   * limitations: * The total size of the metadata must be less than 1 KiB. *
   * The total number of keys must be less than 16. * The length of each key
   * must be less than 64 characters. * The length of each value must be less
   * than 1024 characters.
   *
   * @param string[] $producerMetadata
   */
  public function setProducerMetadata($producerMetadata)
  {
    $this->producerMetadata = $producerMetadata;
  }
  /**
   * @return string[]
   */
  public function getProducerMetadata()
  {
    return $this->producerMetadata;
  }
  /**
   * Required. Specifies a target to which this `ExtensionBinding` should be
   * attached.
   *
   * @param ExtensionBindingTarget $target
   */
  public function setTarget(ExtensionBindingTarget $target)
  {
    $this->target = $target;
  }
  /**
   * @return ExtensionBindingTarget
   */
  public function getTarget()
  {
    return $this->target;
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
class_alias(ExtensionBinding::class, 'Google_Service_NetworkServices_ExtensionBinding');
