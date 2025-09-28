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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1alpha1DimensionAgentDimensionMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $agentDeploymentDisplayName;
  /**
   * @var string
   */
  public $agentDeploymentId;
  /**
   * @var string
   */
  public $agentDisplayName;
  /**
   * @var string
   */
  public $agentId;
  /**
   * @var string
   */
  public $agentTeam;
  /**
   * @var string
   */
  public $agentVersionDisplayName;
  /**
   * @var string
   */
  public $agentVersionId;

  /**
   * @param string
   */
  public function setAgentDeploymentDisplayName($agentDeploymentDisplayName)
  {
    $this->agentDeploymentDisplayName = $agentDeploymentDisplayName;
  }
  /**
   * @return string
   */
  public function getAgentDeploymentDisplayName()
  {
    return $this->agentDeploymentDisplayName;
  }
  /**
   * @param string
   */
  public function setAgentDeploymentId($agentDeploymentId)
  {
    $this->agentDeploymentId = $agentDeploymentId;
  }
  /**
   * @return string
   */
  public function getAgentDeploymentId()
  {
    return $this->agentDeploymentId;
  }
  /**
   * @param string
   */
  public function setAgentDisplayName($agentDisplayName)
  {
    $this->agentDisplayName = $agentDisplayName;
  }
  /**
   * @return string
   */
  public function getAgentDisplayName()
  {
    return $this->agentDisplayName;
  }
  /**
   * @param string
   */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /**
   * @return string
   */
  public function getAgentId()
  {
    return $this->agentId;
  }
  /**
   * @param string
   */
  public function setAgentTeam($agentTeam)
  {
    $this->agentTeam = $agentTeam;
  }
  /**
   * @return string
   */
  public function getAgentTeam()
  {
    return $this->agentTeam;
  }
  /**
   * @param string
   */
  public function setAgentVersionDisplayName($agentVersionDisplayName)
  {
    $this->agentVersionDisplayName = $agentVersionDisplayName;
  }
  /**
   * @return string
   */
  public function getAgentVersionDisplayName()
  {
    return $this->agentVersionDisplayName;
  }
  /**
   * @param string
   */
  public function setAgentVersionId($agentVersionId)
  {
    $this->agentVersionId = $agentVersionId;
  }
  /**
   * @return string
   */
  public function getAgentVersionId()
  {
    return $this->agentVersionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1DimensionAgentDimensionMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1DimensionAgentDimensionMetadata');
