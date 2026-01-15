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

namespace Google\Service\SQLAdmin;

class DnsNameMapping extends \Google\Model
{
  /**
   * Unknown connection type.
   */
  public const CONNECTION_TYPE_CONNECTION_TYPE_UNSPECIFIED = 'CONNECTION_TYPE_UNSPECIFIED';
  /**
   * Public IP.
   */
  public const CONNECTION_TYPE_PUBLIC = 'PUBLIC';
  /**
   * Private services access (private IP).
   */
  public const CONNECTION_TYPE_PRIVATE_SERVICES_ACCESS = 'PRIVATE_SERVICES_ACCESS';
  /**
   * Private Service Connect.
   */
  public const CONNECTION_TYPE_PRIVATE_SERVICE_CONNECT = 'PRIVATE_SERVICE_CONNECT';
  /**
   * DNS scope not set. This value should not be used.
   */
  public const DNS_SCOPE_DNS_SCOPE_UNSPECIFIED = 'DNS_SCOPE_UNSPECIFIED';
  /**
   * Indicates an instance-level DNS name.
   */
  public const DNS_SCOPE_INSTANCE = 'INSTANCE';
  /**
   * Indicates a cluster-level DNS name.
   */
  public const DNS_SCOPE_CLUSTER = 'CLUSTER';
  /**
   * Record manager not set. This value should not be used.
   */
  public const RECORD_MANAGER_RECORD_MANAGER_UNSPECIFIED = 'RECORD_MANAGER_UNSPECIFIED';
  /**
   * The record may be managed by the customer. It is not automatically managed
   * by Cloud SQL automation.
   */
  public const RECORD_MANAGER_CUSTOMER = 'CUSTOMER';
  /**
   * The record is managed by Cloud SQL, which will create, update, and delete
   * the DNS records for the zone automatically when the Cloud SQL database
   * instance is created or updated.
   */
  public const RECORD_MANAGER_CLOUD_SQL_AUTOMATION = 'CLOUD_SQL_AUTOMATION';
  /**
   * Output only. The connection type of the DNS name.
   *
   * @var string
   */
  public $connectionType;
  /**
   * Output only. The scope that the DNS name applies to.
   *
   * @var string
   */
  public $dnsScope;
  /**
   * Output only. The DNS name.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The manager for this DNS record.
   *
   * @var string
   */
  public $recordManager;

  /**
   * Output only. The connection type of the DNS name.
   *
   * Accepted values: CONNECTION_TYPE_UNSPECIFIED, PUBLIC,
   * PRIVATE_SERVICES_ACCESS, PRIVATE_SERVICE_CONNECT
   *
   * @param self::CONNECTION_TYPE_* $connectionType
   */
  public function setConnectionType($connectionType)
  {
    $this->connectionType = $connectionType;
  }
  /**
   * @return self::CONNECTION_TYPE_*
   */
  public function getConnectionType()
  {
    return $this->connectionType;
  }
  /**
   * Output only. The scope that the DNS name applies to.
   *
   * Accepted values: DNS_SCOPE_UNSPECIFIED, INSTANCE, CLUSTER
   *
   * @param self::DNS_SCOPE_* $dnsScope
   */
  public function setDnsScope($dnsScope)
  {
    $this->dnsScope = $dnsScope;
  }
  /**
   * @return self::DNS_SCOPE_*
   */
  public function getDnsScope()
  {
    return $this->dnsScope;
  }
  /**
   * Output only. The DNS name.
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
   * Output only. The manager for this DNS record.
   *
   * Accepted values: RECORD_MANAGER_UNSPECIFIED, CUSTOMER, CLOUD_SQL_AUTOMATION
   *
   * @param self::RECORD_MANAGER_* $recordManager
   */
  public function setRecordManager($recordManager)
  {
    $this->recordManager = $recordManager;
  }
  /**
   * @return self::RECORD_MANAGER_*
   */
  public function getRecordManager()
  {
    return $this->recordManager;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DnsNameMapping::class, 'Google_Service_SQLAdmin_DnsNameMapping');
