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

class GoogleCloudApihubV1GeneratedSpecApi extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Observed; no spec written yet.
   */
  public const STATE_SPEC_API_REGISTERED = 'SPEC_API_REGISTERED';
  /**
   * At least one generated spec exists.
   */
  public const STATE_SPEC_GENERATED = 'SPEC_GENERATED';
  /**
   * User-linked to a catalog Spec; spec set.
   */
  public const STATE_SPEC_ASSOCIATED = 'SPEC_ASSOCIATED';
  /**
   * Output only. The full resource name of the associated catalog API. Format:
   * `projects/{project}/locations/{location}/apis/{api}`
   *
   * @var string
   */
  public $api;
  /**
   * Output only. The time at which the resource was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The full resource name of the associated catalog Deployment.
   * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
   *
   * @var string
   */
  public $deployment;
  /**
   * Output only. Human-readable display name; server-derived.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The time at which the most recent spec was generated. Unset
   * while `state == SPEC_API_REGISTERED`.
   *
   * @var string
   */
  public $lastSpecGeneratedTime;
  /**
   * Identifier. The full resource name. The trailing segment is the pipeline-
   * generated identifier. Format: `projects/{project}/locations/{location}/gene
   * ratedSpecApis/{generated_spec_api}`
   *
   * @var string
   */
  public $name;
  protected $sourceType = GoogleCloudApihubV1GeneratedSpecApiSource::class;
  protected $sourceDataType = '';
  /**
   * Output only. The full resource name of the associated catalog Spec;
   * populated only when `state == SPEC_ASSOCIATED`. Format: `projects/{project}
   * /locations/{location}/apis/{api}/versions/{version}/specs/{spec}`
   *
   * @var string
   */
  public $spec;
  /**
   * Output only. The current lifecycle state.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time at which the resource was last updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. The full resource name of the associated catalog Version.
   * Format:
   * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
   *
   * @var string
   */
  public $version;

  /**
   * Output only. The full resource name of the associated catalog API. Format:
   * `projects/{project}/locations/{location}/apis/{api}`
   *
   * @param string $api
   */
  public function setApi($api)
  {
    $this->api = $api;
  }
  /**
   * @return string
   */
  public function getApi()
  {
    return $this->api;
  }
  /**
   * Output only. The time at which the resource was created.
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
   * Output only. The full resource name of the associated catalog Deployment.
   * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
   *
   * @param string $deployment
   */
  public function setDeployment($deployment)
  {
    $this->deployment = $deployment;
  }
  /**
   * @return string
   */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /**
   * Output only. Human-readable display name; server-derived.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. The time at which the most recent spec was generated. Unset
   * while `state == SPEC_API_REGISTERED`.
   *
   * @param string $lastSpecGeneratedTime
   */
  public function setLastSpecGeneratedTime($lastSpecGeneratedTime)
  {
    $this->lastSpecGeneratedTime = $lastSpecGeneratedTime;
  }
  /**
   * @return string
   */
  public function getLastSpecGeneratedTime()
  {
    return $this->lastSpecGeneratedTime;
  }
  /**
   * Identifier. The full resource name. The trailing segment is the pipeline-
   * generated identifier. Format: `projects/{project}/locations/{location}/gene
   * ratedSpecApis/{generated_spec_api}`
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
   * Output only. Where the pipeline observed this API.
   *
   * @param GoogleCloudApihubV1GeneratedSpecApiSource $source
   */
  public function setSource(GoogleCloudApihubV1GeneratedSpecApiSource $source)
  {
    $this->source = $source;
  }
  /**
   * @return GoogleCloudApihubV1GeneratedSpecApiSource
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Output only. The full resource name of the associated catalog Spec;
   * populated only when `state == SPEC_ASSOCIATED`. Format: `projects/{project}
   * /locations/{location}/apis/{api}/versions/{version}/specs/{spec}`
   *
   * @param string $spec
   */
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  /**
   * @return string
   */
  public function getSpec()
  {
    return $this->spec;
  }
  /**
   * Output only. The current lifecycle state.
   *
   * Accepted values: STATE_UNSPECIFIED, SPEC_API_REGISTERED, SPEC_GENERATED,
   * SPEC_ASSOCIATED
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
   * Output only. The time at which the resource was last updated.
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
   * Output only. The full resource name of the associated catalog Version.
   * Format:
   * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
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
class_alias(GoogleCloudApihubV1GeneratedSpecApi::class, 'Google_Service_APIhub_GoogleCloudApihubV1GeneratedSpecApi');
