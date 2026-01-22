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

class CdcConfig extends \Google\Model
{
  /**
   * Optional. The bucket to write the intermediate stream event data in. The
   * bucket name must be without any prefix like "gs://". See the bucket naming
   * requirements (https://cloud.google.com/storage/docs/buckets#naming). This
   * field is optional. If not set, the Artifacts Cloud Storage bucket will be
   * used.
   *
   * @var string
   */
  public $bucket;
  /**
   * Required. Input only. The password for the user that Datastream service
   * should use for the MySQL connection. This field is not returned on request.
   *
   * @var string
   */
  public $password;
  /**
   * Required. The URL of the subnetwork resource to create the VM instance
   * hosting the reverse proxy in. More context in
   * https://cloud.google.com/datastream/docs/private-connectivity#reverse-csql-
   * proxy The subnetwork should reside in the network provided in the request
   * that Datastream will peer to and should be in the same region as
   * Datastream, in the following format.
   * projects/{project_id}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @var string
   */
  public $reverseProxySubnet;
  /**
   * Optional. The root path inside the Cloud Storage bucket. The stream event
   * data will be written to this path. The default value is /migration.
   *
   * @var string
   */
  public $rootPath;
  /**
   * Required. A /29 CIDR IP range for peering with datastream.
   *
   * @var string
   */
  public $subnetIpRange;
  /**
   * Required. The username that the Datastream service should use for the MySQL
   * connection.
   *
   * @var string
   */
  public $username;
  /**
   * Required. Fully qualified name of the Cloud SQL instance's VPC network or
   * the shared VPC network that Datastream will peer to, in the following
   * format: projects/{project_id}/locations/global/networks/{network_id}. More
   * context in https://cloud.google.com/datastream/docs/network-connectivity-
   * options#privateconnectivity
   *
   * @var string
   */
  public $vpcNetwork;

  /**
   * Optional. The bucket to write the intermediate stream event data in. The
   * bucket name must be without any prefix like "gs://". See the bucket naming
   * requirements (https://cloud.google.com/storage/docs/buckets#naming). This
   * field is optional. If not set, the Artifacts Cloud Storage bucket will be
   * used.
   *
   * @param string $bucket
   */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /**
   * @return string
   */
  public function getBucket()
  {
    return $this->bucket;
  }
  /**
   * Required. Input only. The password for the user that Datastream service
   * should use for the MySQL connection. This field is not returned on request.
   *
   * @param string $password
   */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /**
   * @return string
   */
  public function getPassword()
  {
    return $this->password;
  }
  /**
   * Required. The URL of the subnetwork resource to create the VM instance
   * hosting the reverse proxy in. More context in
   * https://cloud.google.com/datastream/docs/private-connectivity#reverse-csql-
   * proxy The subnetwork should reside in the network provided in the request
   * that Datastream will peer to and should be in the same region as
   * Datastream, in the following format.
   * projects/{project_id}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @param string $reverseProxySubnet
   */
  public function setReverseProxySubnet($reverseProxySubnet)
  {
    $this->reverseProxySubnet = $reverseProxySubnet;
  }
  /**
   * @return string
   */
  public function getReverseProxySubnet()
  {
    return $this->reverseProxySubnet;
  }
  /**
   * Optional. The root path inside the Cloud Storage bucket. The stream event
   * data will be written to this path. The default value is /migration.
   *
   * @param string $rootPath
   */
  public function setRootPath($rootPath)
  {
    $this->rootPath = $rootPath;
  }
  /**
   * @return string
   */
  public function getRootPath()
  {
    return $this->rootPath;
  }
  /**
   * Required. A /29 CIDR IP range for peering with datastream.
   *
   * @param string $subnetIpRange
   */
  public function setSubnetIpRange($subnetIpRange)
  {
    $this->subnetIpRange = $subnetIpRange;
  }
  /**
   * @return string
   */
  public function getSubnetIpRange()
  {
    return $this->subnetIpRange;
  }
  /**
   * Required. The username that the Datastream service should use for the MySQL
   * connection.
   *
   * @param string $username
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /**
   * @return string
   */
  public function getUsername()
  {
    return $this->username;
  }
  /**
   * Required. Fully qualified name of the Cloud SQL instance's VPC network or
   * the shared VPC network that Datastream will peer to, in the following
   * format: projects/{project_id}/locations/global/networks/{network_id}. More
   * context in https://cloud.google.com/datastream/docs/network-connectivity-
   * options#privateconnectivity
   *
   * @param string $vpcNetwork
   */
  public function setVpcNetwork($vpcNetwork)
  {
    $this->vpcNetwork = $vpcNetwork;
  }
  /**
   * @return string
   */
  public function getVpcNetwork()
  {
    return $this->vpcNetwork;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CdcConfig::class, 'Google_Service_DataprocMetastore_CdcConfig');
