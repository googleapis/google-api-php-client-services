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

class CloudSQLConnectionConfig extends \Google\Model
{
  /**
   * Required. The hive database name.
   *
   * @var string
   */
  public $hiveDatabaseName;
  /**
   * Required. Cloud SQL database connection name
   * (project_id:region:instance_name)
   *
   * @var string
   */
  public $instanceConnectionName;
  /**
   * Required. The private IP address of the Cloud SQL instance.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * Required. The relative resource name of the subnetwork to be used for
   * Private Service Connect. Note that this cannot be a regular subnet and is
   * used only for NAT. (https://cloud.google.com/vpc/docs/about-vpc-hosted-
   * services#psc-subnets) This subnet is used to publish the SOCKS5 proxy
   * service. The subnet size must be at least /29 and it should reside in a
   * network through which the Cloud SQL instance is accessible. The resource
   * name should be in the format,
   * projects/{project_id}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @var string
   */
  public $natSubnet;
  /**
   * Required. Input only. The password for the user that Dataproc Metastore
   * service will be using to connect to the database. This field is not
   * returned on request.
   *
   * @var string
   */
  public $password;
  /**
   * Required. The network port of the database.
   *
   * @var int
   */
  public $port;
  /**
   * Required. The relative resource name of the subnetwork to deploy the SOCKS5
   * proxy service in. The subnetwork should reside in a network through which
   * the Cloud SQL instance is accessible. The resource name should be in the
   * format,
   * projects/{project_id}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @var string
   */
  public $proxySubnet;
  /**
   * Required. The username that Dataproc Metastore service will use to connect
   * to the database.
   *
   * @var string
   */
  public $username;

  /**
   * Required. The hive database name.
   *
   * @param string $hiveDatabaseName
   */
  public function setHiveDatabaseName($hiveDatabaseName)
  {
    $this->hiveDatabaseName = $hiveDatabaseName;
  }
  /**
   * @return string
   */
  public function getHiveDatabaseName()
  {
    return $this->hiveDatabaseName;
  }
  /**
   * Required. Cloud SQL database connection name
   * (project_id:region:instance_name)
   *
   * @param string $instanceConnectionName
   */
  public function setInstanceConnectionName($instanceConnectionName)
  {
    $this->instanceConnectionName = $instanceConnectionName;
  }
  /**
   * @return string
   */
  public function getInstanceConnectionName()
  {
    return $this->instanceConnectionName;
  }
  /**
   * Required. The private IP address of the Cloud SQL instance.
   *
   * @param string $ipAddress
   */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return string
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * Required. The relative resource name of the subnetwork to be used for
   * Private Service Connect. Note that this cannot be a regular subnet and is
   * used only for NAT. (https://cloud.google.com/vpc/docs/about-vpc-hosted-
   * services#psc-subnets) This subnet is used to publish the SOCKS5 proxy
   * service. The subnet size must be at least /29 and it should reside in a
   * network through which the Cloud SQL instance is accessible. The resource
   * name should be in the format,
   * projects/{project_id}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @param string $natSubnet
   */
  public function setNatSubnet($natSubnet)
  {
    $this->natSubnet = $natSubnet;
  }
  /**
   * @return string
   */
  public function getNatSubnet()
  {
    return $this->natSubnet;
  }
  /**
   * Required. Input only. The password for the user that Dataproc Metastore
   * service will be using to connect to the database. This field is not
   * returned on request.
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
   * Required. The network port of the database.
   *
   * @param int $port
   */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /**
   * @return int
   */
  public function getPort()
  {
    return $this->port;
  }
  /**
   * Required. The relative resource name of the subnetwork to deploy the SOCKS5
   * proxy service in. The subnetwork should reside in a network through which
   * the Cloud SQL instance is accessible. The resource name should be in the
   * format,
   * projects/{project_id}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @param string $proxySubnet
   */
  public function setProxySubnet($proxySubnet)
  {
    $this->proxySubnet = $proxySubnet;
  }
  /**
   * @return string
   */
  public function getProxySubnet()
  {
    return $this->proxySubnet;
  }
  /**
   * Required. The username that Dataproc Metastore service will use to connect
   * to the database.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudSQLConnectionConfig::class, 'Google_Service_DataprocMetastore_CloudSQLConnectionConfig');
