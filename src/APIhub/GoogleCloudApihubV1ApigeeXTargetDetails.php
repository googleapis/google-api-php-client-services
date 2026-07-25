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

class GoogleCloudApihubV1ApigeeXTargetDetails extends \Google\Model
{
  /**
   * Output only. The revision number of the Apigee proxy that was deployed.
   *
   * @var string
   */
  public $deployedRevision;
  /**
   * Required. The specific Apigee environment where the server will be
   * deployed.
   *
   * @var string
   */
  public $environment;
  protected $metadataType = GoogleCloudApihubV1MetaData::class;
  protected $metadataDataType = '';
  /**
   * Required. This name identifies the proxy resource in Apigee. It typically
   * follows a standard alphanumeric format (e.g., "mcp-discovery-server").
   *
   * @var string
   */
  public $proxy;
  /**
   * Required. The runtime project that hosts the Apigee X organization. This
   * must be one of the runtime projects attached to the API Hub host project.
   *
   * @var string
   */
  public $targetProject;

  /**
   * Output only. The revision number of the Apigee proxy that was deployed.
   *
   * @param string $deployedRevision
   */
  public function setDeployedRevision($deployedRevision)
  {
    $this->deployedRevision = $deployedRevision;
  }
  /**
   * @return string
   */
  public function getDeployedRevision()
  {
    return $this->deployedRevision;
  }
  /**
   * Required. The specific Apigee environment where the server will be
   * deployed.
   *
   * @param string $environment
   */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /**
   * @return string
   */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /**
   * Optional. Metadata for the proxy configuration in Apigee X.
   *
   * @param GoogleCloudApihubV1MetaData $metadata
   */
  public function setMetadata(GoogleCloudApihubV1MetaData $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return GoogleCloudApihubV1MetaData
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Required. This name identifies the proxy resource in Apigee. It typically
   * follows a standard alphanumeric format (e.g., "mcp-discovery-server").
   *
   * @param string $proxy
   */
  public function setProxy($proxy)
  {
    $this->proxy = $proxy;
  }
  /**
   * @return string
   */
  public function getProxy()
  {
    return $this->proxy;
  }
  /**
   * Required. The runtime project that hosts the Apigee X organization. This
   * must be one of the runtime projects attached to the API Hub host project.
   *
   * @param string $targetProject
   */
  public function setTargetProject($targetProject)
  {
    $this->targetProject = $targetProject;
  }
  /**
   * @return string
   */
  public function getTargetProject()
  {
    return $this->targetProject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1ApigeeXTargetDetails::class, 'Google_Service_APIhub_GoogleCloudApihubV1ApigeeXTargetDetails');
