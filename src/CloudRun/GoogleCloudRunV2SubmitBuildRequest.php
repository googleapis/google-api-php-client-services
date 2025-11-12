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

class GoogleCloudRunV2SubmitBuildRequest extends \Google\Collection
{
  protected $collection_key = 'tags';
  protected $buildpackBuildType = GoogleCloudRunV2BuildpacksBuild::class;
  protected $buildpackBuildDataType = '';
  /**
   * @var string
   */
  public $client;
  protected $dockerBuildType = GoogleCloudRunV2DockerBuild::class;
  protected $dockerBuildDataType = '';
  /**
   * @var string
   */
  public $imageUri;
  /**
   * @var string
   */
  public $machineType;
  /**
   * @var string
   */
  public $releaseTrack;
  /**
   * @var string
   */
  public $serviceAccount;
  protected $storageSourceType = GoogleCloudRunV2StorageSource::class;
  protected $storageSourceDataType = '';
  /**
   * @var string[]
   */
  public $tags;
  /**
   * @var string
   */
  public $workerPool;

  /**
   * @param GoogleCloudRunV2BuildpacksBuild
   */
  public function setBuildpackBuild(GoogleCloudRunV2BuildpacksBuild $buildpackBuild)
  {
    $this->buildpackBuild = $buildpackBuild;
  }
  /**
   * @return GoogleCloudRunV2BuildpacksBuild
   */
  public function getBuildpackBuild()
  {
    return $this->buildpackBuild;
  }
  /**
   * @param string
   */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /**
   * @return string
   */
  public function getClient()
  {
    return $this->client;
  }
  /**
   * @param GoogleCloudRunV2DockerBuild
   */
  public function setDockerBuild(GoogleCloudRunV2DockerBuild $dockerBuild)
  {
    $this->dockerBuild = $dockerBuild;
  }
  /**
   * @return GoogleCloudRunV2DockerBuild
   */
  public function getDockerBuild()
  {
    return $this->dockerBuild;
  }
  /**
   * @param string
   */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /**
   * @return string
   */
  public function getImageUri()
  {
    return $this->imageUri;
  }
  /**
   * @param string
   */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /**
   * @return string
   */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /**
   * @param string
   */
  public function setReleaseTrack($releaseTrack)
  {
    $this->releaseTrack = $releaseTrack;
  }
  /**
   * @return string
   */
  public function getReleaseTrack()
  {
    return $this->releaseTrack;
  }
  /**
   * @param string
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
   * @param GoogleCloudRunV2StorageSource
   */
  public function setStorageSource(GoogleCloudRunV2StorageSource $storageSource)
  {
    $this->storageSource = $storageSource;
  }
  /**
   * @return GoogleCloudRunV2StorageSource
   */
  public function getStorageSource()
  {
    return $this->storageSource;
  }
  /**
   * @param string[]
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
   * @param string
   */
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /**
   * @return string
   */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2SubmitBuildRequest::class, 'Google_Service_CloudRun_GoogleCloudRunV2SubmitBuildRequest');
