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

namespace Google\Service\WorkloadManager;

class Pacemaker extends \Google\Model
{
  /**
   * Required. bucket location for node certificates
   *
   * @var string
   */
  public $bucketNameNodeCertificates;
  /**
   * Required. pacemaker cluster name
   *
   * @var string
   */
  public $pacemakerCluster;
  /**
   * Required. pacemaker cluster secret name
   *
   * @var string
   */
  public $pacemakerClusterSecret;
  /**
   * Required. pacemaker cluster username
   *
   * @var string
   */
  public $pacemakerClusterUsername;
  /**
   * Required. sql pacemaker secret name
   *
   * @var string
   */
  public $sqlPacemakerSecret;
  /**
   * Required. sql pacemaker username
   *
   * @var string
   */
  public $sqlPacemakerUsername;

  /**
   * Required. bucket location for node certificates
   *
   * @param string $bucketNameNodeCertificates
   */
  public function setBucketNameNodeCertificates($bucketNameNodeCertificates)
  {
    $this->bucketNameNodeCertificates = $bucketNameNodeCertificates;
  }
  /**
   * @return string
   */
  public function getBucketNameNodeCertificates()
  {
    return $this->bucketNameNodeCertificates;
  }
  /**
   * Required. pacemaker cluster name
   *
   * @param string $pacemakerCluster
   */
  public function setPacemakerCluster($pacemakerCluster)
  {
    $this->pacemakerCluster = $pacemakerCluster;
  }
  /**
   * @return string
   */
  public function getPacemakerCluster()
  {
    return $this->pacemakerCluster;
  }
  /**
   * Required. pacemaker cluster secret name
   *
   * @param string $pacemakerClusterSecret
   */
  public function setPacemakerClusterSecret($pacemakerClusterSecret)
  {
    $this->pacemakerClusterSecret = $pacemakerClusterSecret;
  }
  /**
   * @return string
   */
  public function getPacemakerClusterSecret()
  {
    return $this->pacemakerClusterSecret;
  }
  /**
   * Required. pacemaker cluster username
   *
   * @param string $pacemakerClusterUsername
   */
  public function setPacemakerClusterUsername($pacemakerClusterUsername)
  {
    $this->pacemakerClusterUsername = $pacemakerClusterUsername;
  }
  /**
   * @return string
   */
  public function getPacemakerClusterUsername()
  {
    return $this->pacemakerClusterUsername;
  }
  /**
   * Required. sql pacemaker secret name
   *
   * @param string $sqlPacemakerSecret
   */
  public function setSqlPacemakerSecret($sqlPacemakerSecret)
  {
    $this->sqlPacemakerSecret = $sqlPacemakerSecret;
  }
  /**
   * @return string
   */
  public function getSqlPacemakerSecret()
  {
    return $this->sqlPacemakerSecret;
  }
  /**
   * Required. sql pacemaker username
   *
   * @param string $sqlPacemakerUsername
   */
  public function setSqlPacemakerUsername($sqlPacemakerUsername)
  {
    $this->sqlPacemakerUsername = $sqlPacemakerUsername;
  }
  /**
   * @return string
   */
  public function getSqlPacemakerUsername()
  {
    return $this->sqlPacemakerUsername;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Pacemaker::class, 'Google_Service_WorkloadManager_Pacemaker');
