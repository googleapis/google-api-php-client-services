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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1SecurityAssessmentResultResourceApiHubDeploymentDetails extends \Google\Model
{
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $gateway;
  /**
   * @var string
   */
  public $gatewayType;
  /**
   * @var string
   */
  public $resourceUri;
  /**
   * @var string
   */
  public $sourceProject;

  /**
   * @param string
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
   * @param string
   */
  public function setGateway($gateway)
  {
    $this->gateway = $gateway;
  }
  /**
   * @return string
   */
  public function getGateway()
  {
    return $this->gateway;
  }
  /**
   * @param string
   */
  public function setGatewayType($gatewayType)
  {
    $this->gatewayType = $gatewayType;
  }
  /**
   * @return string
   */
  public function getGatewayType()
  {
    return $this->gatewayType;
  }
  /**
   * @param string
   */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /**
   * @return string
   */
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
  /**
   * @param string
   */
  public function setSourceProject($sourceProject)
  {
    $this->sourceProject = $sourceProject;
  }
  /**
   * @return string
   */
  public function getSourceProject()
  {
    return $this->sourceProject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1SecurityAssessmentResultResourceApiHubDeploymentDetails::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityAssessmentResultResourceApiHubDeploymentDetails');
