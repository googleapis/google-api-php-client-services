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

namespace Google\Service\CloudDeploy;

class KubernetesRenderMetadata extends \Google\Model
{
  /**
   * Output only. Name of the canary version of the Kubernetes Deployment that
   * will be applied to the GKE cluster. Only set if a canary deployment
   * strategy was configured.
   *
   * @var string
   */
  public $canaryDeployment;
  /**
   * Output only. Name of the Kubernetes Deployment that will be applied to the
   * GKE cluster. Only set if a single Deployment was provided in the rendered
   * manifest.
   *
   * @var string
   */
  public $deployment;
  /**
   * Output only. Namespace the Kubernetes resources will be applied to in the
   * GKE cluster. Only set if applying resources to a single namespace.
   *
   * @var string
   */
  public $kubernetesNamespace;

  /**
   * Output only. Name of the canary version of the Kubernetes Deployment that
   * will be applied to the GKE cluster. Only set if a canary deployment
   * strategy was configured.
   *
   * @param string $canaryDeployment
   */
  public function setCanaryDeployment($canaryDeployment)
  {
    $this->canaryDeployment = $canaryDeployment;
  }
  /**
   * @return string
   */
  public function getCanaryDeployment()
  {
    return $this->canaryDeployment;
  }
  /**
   * Output only. Name of the Kubernetes Deployment that will be applied to the
   * GKE cluster. Only set if a single Deployment was provided in the rendered
   * manifest.
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
   * Output only. Namespace the Kubernetes resources will be applied to in the
   * GKE cluster. Only set if applying resources to a single namespace.
   *
   * @param string $kubernetesNamespace
   */
  public function setKubernetesNamespace($kubernetesNamespace)
  {
    $this->kubernetesNamespace = $kubernetesNamespace;
  }
  /**
   * @return string
   */
  public function getKubernetesNamespace()
  {
    return $this->kubernetesNamespace;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KubernetesRenderMetadata::class, 'Google_Service_CloudDeploy_KubernetesRenderMetadata');
