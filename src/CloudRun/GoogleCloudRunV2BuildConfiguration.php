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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2BuildConfiguration extends \Google\Collection
{
  protected $collection_key = 'tags';
  protected $buildpacksBuildType = GoogleCloudRunV2BuildConfigurationBuildpacksBuild::class;
  protected $buildpacksBuildDataType = '';
  protected $dockerBuildType = GoogleCloudRunV2BuildConfigurationDockerBuild::class;
  protected $dockerBuildDataType = '';
  protected $environmentVariablesType = GoogleCloudRunV2EnvVar::class;
  protected $environmentVariablesDataType = 'array';
  /**
   * Required. Artifact Registry URI to store the built image.
   *
   * @var string
   */
  public $imageRepositoryUri;
  /**
   * Optional. The service account to use for the build. Its resource name in
   * the format `projects/{project}/serviceAccounts/{email}`.
   *
   * @var string
   */
  public $serviceAccount;
  /**
   * Optional. Tags to add to the build.
   *
   * @var string[]
   */
  public $tags;
  protected $workerConfigurationType = GoogleCloudRunV2WorkerConfiguration::class;
  protected $workerConfigurationDataType = '';

  /**
   * Optional. Builds the source using Buildpacks.
   *
   * @param GoogleCloudRunV2BuildConfigurationBuildpacksBuild $buildpacksBuild
   */
  public function setBuildpacksBuild(GoogleCloudRunV2BuildConfigurationBuildpacksBuild $buildpacksBuild)
  {
    $this->buildpacksBuild = $buildpacksBuild;
  }
  /**
   * @return GoogleCloudRunV2BuildConfigurationBuildpacksBuild
   */
  public function getBuildpacksBuild()
  {
    return $this->buildpacksBuild;
  }
  /**
   * Optional. Builds the source using Docker.
   *
   * @param GoogleCloudRunV2BuildConfigurationDockerBuild $dockerBuild
   */
  public function setDockerBuild(GoogleCloudRunV2BuildConfigurationDockerBuild $dockerBuild)
  {
    $this->dockerBuild = $dockerBuild;
  }
  /**
   * @return GoogleCloudRunV2BuildConfigurationDockerBuild
   */
  public function getDockerBuild()
  {
    return $this->dockerBuild;
  }
  /**
   * Optional. Environment variables for the build.
   *
   * @param GoogleCloudRunV2EnvVar[] $environmentVariables
   */
  public function setEnvironmentVariables($environmentVariables)
  {
    $this->environmentVariables = $environmentVariables;
  }
  /**
   * @return GoogleCloudRunV2EnvVar[]
   */
  public function getEnvironmentVariables()
  {
    return $this->environmentVariables;
  }
  /**
   * Required. Artifact Registry URI to store the built image.
   *
   * @param string $imageRepositoryUri
   */
  public function setImageRepositoryUri($imageRepositoryUri)
  {
    $this->imageRepositoryUri = $imageRepositoryUri;
  }
  /**
   * @return string
   */
  public function getImageRepositoryUri()
  {
    return $this->imageRepositoryUri;
  }
  /**
   * Optional. The service account to use for the build. Its resource name in
   * the format `projects/{project}/serviceAccounts/{email}`.
   *
   * @param string $serviceAccount
   */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return string
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /**
   * Optional. Tags to add to the build.
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
   * Optional. Configuration for the worker.
   *
   * @param GoogleCloudRunV2WorkerConfiguration $workerConfiguration
   */
  public function setWorkerConfiguration(GoogleCloudRunV2WorkerConfiguration $workerConfiguration)
  {
    $this->workerConfiguration = $workerConfiguration;
  }
  /**
   * @return GoogleCloudRunV2WorkerConfiguration
   */
  public function getWorkerConfiguration()
  {
    return $this->workerConfiguration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2BuildConfiguration::class, 'Google_Service_CloudRun_GoogleCloudRunV2BuildConfiguration');
