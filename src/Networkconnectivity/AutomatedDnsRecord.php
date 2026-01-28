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

namespace Google\Service\Networkconnectivity;

class AutomatedDnsRecord extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const CREATION_MODE_CREATION_MODE_UNSPECIFIED = 'CREATION_MODE_UNSPECIFIED';
  /**
   * The record was created through the AutomatedDnsRecord CCFE consumer API.
   */
  public const CREATION_MODE_CONSUMER_API = 'CONSUMER_API';
  /**
   * The record was created by a ServiceConnectionMap. Its lifecycle is managed
   * by that ServiceConnectionMap.
   */
  public const CREATION_MODE_SERVICE_CONNECTION_MAP = 'SERVICE_CONNECTION_MAP';
  /**
   * Default value. This value is unused.
   */
  public const RECORD_TYPE_RECORD_TYPE_UNSPECIFIED = 'RECORD_TYPE_UNSPECIFIED';
  /**
   * Represents an A record.
   */
  public const RECORD_TYPE_A = 'A';
  /**
   * Represents an AAAA record.
   */
  public const RECORD_TYPE_AAAA = 'AAAA';
  /**
   * Represents a TXT record.
   */
  public const RECORD_TYPE_TXT = 'TXT';
  /**
   * Represents a CNAME record.
   */
  public const RECORD_TYPE_CNAME = 'CNAME';
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The AutomatedDnsRecord has been successfully programmed.
   */
  public const STATE_PROGRAMMED = 'PROGRAMMED';
  /**
   * A non-recoverable error occurred while attempting to deprogram the DNS
   * record from Cloud DNS during deletion.
   */
  public const STATE_FAILED_DEPROGRAMMING = 'FAILED_DEPROGRAMMING';
  /**
   * The AutomatedDnsRecord is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The AutomatedDnsRecord is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Required. Immutable. The full resource path of the consumer network this
   * AutomatedDnsRecord is visible to. Example:
   * "projects/{projectNumOrId}/global/networks/{networkName}".
   *
   * @var string
   */
  public $consumerNetwork;
  /**
   * Output only. The timestamp of when the record was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Immutable. The creation mode of the AutomatedDnsRecord. This
   * field is immutable.
   *
   * @var string
   */
  public $creationMode;
  protected $currentConfigType = Config::class;
  protected $currentConfigDataType = '';
  /**
   * A human-readable description of the record.
   *
   * @var string
   */
  public $description;
  /**
   * Required. Immutable. The dns suffix for this record to use in longest-
   * suffix matching. Requires a trailing dot. Example: "example.com."
   *
   * @var string
   */
  public $dnsSuffix;
  /**
   * Output only. DnsZone is the DNS zone managed by automation. Format:
   * projects/{project}/managedZones/{managedZone}
   *
   * @var string
   */
  public $dnsZone;
  /**
   * Optional. The etag is computed by the server, and may be sent on update and
   * delete requests to ensure the client has an up-to-date value before
   * proceeding.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. The FQDN created by combining the hostname and dns suffix.
   * Should include a trailing dot.
   *
   * @var string
   */
  public $fqdn;
  /**
   * Required. Immutable. The hostname for the DNS record. This value will be
   * prepended to the `dns_suffix` to create the full domain name (FQDN) for the
   * record. For example, if `hostname` is "corp.db" and `dns_suffix` is
   * "example.com.", the resulting record will be "corp.db.example.com.". Should
   * not include a trailing dot.
   *
   * @var string
   */
  public $hostname;
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Immutable. Identifier. The name of an AutomatedDnsRecord. Format: projects/
   * {project}/locations/{location}/automatedDnsRecords/{automated_dns_record}
   * See: https://google.aip.dev/122#fields-representing-resource-names
   *
   * @var string
   */
  public $name;
  protected $originalConfigType = Config::class;
  protected $originalConfigDataType = '';
  /**
   * Required. Immutable. The identifier of a supported record type.
   *
   * @var string
   */
  public $recordType;
  /**
   * Required. Immutable. The service class identifier which authorizes this
   * AutomatedDnsRecord. Any API calls targeting this AutomatedDnsRecord must
   * have `networkconnectivity.serviceclasses.use` IAM permission for the
   * provided service class.
   *
   * @var string
   */
  public $serviceClass;
  /**
   * Output only. The current operational state of this AutomatedDnsRecord as
   * managed by Service Connectivity Automation.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. A human-readable message providing more context about the
   * current state, such as an error description if the state is
   * `FAILED_DEPROGRAMMING`.
   *
   * @var string
   */
  public $stateDetails;
  /**
   * Output only. The timestamp of when the record was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. Immutable. The full resource path of the consumer network this
   * AutomatedDnsRecord is visible to. Example:
   * "projects/{projectNumOrId}/global/networks/{networkName}".
   *
   * @param string $consumerNetwork
   */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /**
   * @return string
   */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /**
   * Output only. The timestamp of when the record was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Required. Immutable. The creation mode of the AutomatedDnsRecord. This
   * field is immutable.
   *
   * Accepted values: CREATION_MODE_UNSPECIFIED, CONSUMER_API,
   * SERVICE_CONNECTION_MAP
   *
   * @param self::CREATION_MODE_* $creationMode
   */
  public function setCreationMode($creationMode)
  {
    $this->creationMode = $creationMode;
  }
  /**
   * @return self::CREATION_MODE_*
   */
  public function getCreationMode()
  {
    return $this->creationMode;
  }
  /**
   * Output only. The current settings for this record as identified by
   * (`hostname`, `dns_suffix`, `type`) in Cloud DNS. The `current_config` field
   * reflects the actual settings of the DNS record in Cloud DNS based on the
   * `hostname`, `dns_suffix`, and `type`. * **Absence:** If `current_config` is
   * unset, it means a DNS record with the specified `hostname`, `dns_suffix`,
   * and `type` does not currently exist in Cloud DNS. This could be because the
   * `AutomatedDnsRecord` has never been successfully programmed, has been
   * deleted, or there was an error during provisioning. * **Presence:** If
   * `current_config` is present: * It can be different from the
   * `original_config`. This can happen due to several reasons: * Out-of-band
   * changes: A consumer might have directly modified the DNS record in Cloud
   * DNS. * `OVERWRITE` operations from other `AutomatedDnsRecord` resources:
   * Another `AutomatedDnsRecord` with the same identifying attributes
   * (`hostname`, `dns_suffix`, `type`) but a different configuration might have
   * overwritten the record using `insert_mode: OVERWRITE`. Therefore, the
   * presence of `current_config` indicates that a corresponding DNS record
   * exists, but its values (TTL and RRData) might not always align with the
   * `original_config` of the AutomatedDnsRecord.
   *
   * @param Config $currentConfig
   */
  public function setCurrentConfig(Config $currentConfig)
  {
    $this->currentConfig = $currentConfig;
  }
  /**
   * @return Config
   */
  public function getCurrentConfig()
  {
    return $this->currentConfig;
  }
  /**
   * A human-readable description of the record.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Immutable. The dns suffix for this record to use in longest-
   * suffix matching. Requires a trailing dot. Example: "example.com."
   *
   * @param string $dnsSuffix
   */
  public function setDnsSuffix($dnsSuffix)
  {
    $this->dnsSuffix = $dnsSuffix;
  }
  /**
   * @return string
   */
  public function getDnsSuffix()
  {
    return $this->dnsSuffix;
  }
  /**
   * Output only. DnsZone is the DNS zone managed by automation. Format:
   * projects/{project}/managedZones/{managedZone}
   *
   * @param string $dnsZone
   */
  public function setDnsZone($dnsZone)
  {
    $this->dnsZone = $dnsZone;
  }
  /**
   * @return string
   */
  public function getDnsZone()
  {
    return $this->dnsZone;
  }
  /**
   * Optional. The etag is computed by the server, and may be sent on update and
   * delete requests to ensure the client has an up-to-date value before
   * proceeding.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. The FQDN created by combining the hostname and dns suffix.
   * Should include a trailing dot.
   *
   * @param string $fqdn
   */
  public function setFqdn($fqdn)
  {
    $this->fqdn = $fqdn;
  }
  /**
   * @return string
   */
  public function getFqdn()
  {
    return $this->fqdn;
  }
  /**
   * Required. Immutable. The hostname for the DNS record. This value will be
   * prepended to the `dns_suffix` to create the full domain name (FQDN) for the
   * record. For example, if `hostname` is "corp.db" and `dns_suffix` is
   * "example.com.", the resulting record will be "corp.db.example.com.". Should
   * not include a trailing dot.
   *
   * @param string $hostname
   */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /**
   * @return string
   */
  public function getHostname()
  {
    return $this->hostname;
  }
  /**
   * Optional. User-defined labels.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Immutable. Identifier. The name of an AutomatedDnsRecord. Format: projects/
   * {project}/locations/{location}/automatedDnsRecords/{automated_dns_record}
   * See: https://google.aip.dev/122#fields-representing-resource-names
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
   * Required. Immutable. The configuration settings used to create this DNS
   * record. These settings define the desired state of the record as specified
   * by the producer.
   *
   * @param Config $originalConfig
   */
  public function setOriginalConfig(Config $originalConfig)
  {
    $this->originalConfig = $originalConfig;
  }
  /**
   * @return Config
   */
  public function getOriginalConfig()
  {
    return $this->originalConfig;
  }
  /**
   * Required. Immutable. The identifier of a supported record type.
   *
   * Accepted values: RECORD_TYPE_UNSPECIFIED, A, AAAA, TXT, CNAME
   *
   * @param self::RECORD_TYPE_* $recordType
   */
  public function setRecordType($recordType)
  {
    $this->recordType = $recordType;
  }
  /**
   * @return self::RECORD_TYPE_*
   */
  public function getRecordType()
  {
    return $this->recordType;
  }
  /**
   * Required. Immutable. The service class identifier which authorizes this
   * AutomatedDnsRecord. Any API calls targeting this AutomatedDnsRecord must
   * have `networkconnectivity.serviceclasses.use` IAM permission for the
   * provided service class.
   *
   * @param string $serviceClass
   */
  public function setServiceClass($serviceClass)
  {
    $this->serviceClass = $serviceClass;
  }
  /**
   * @return string
   */
  public function getServiceClass()
  {
    return $this->serviceClass;
  }
  /**
   * Output only. The current operational state of this AutomatedDnsRecord as
   * managed by Service Connectivity Automation.
   *
   * Accepted values: STATE_UNSPECIFIED, PROGRAMMED, FAILED_DEPROGRAMMING,
   * CREATING, DELETING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. A human-readable message providing more context about the
   * current state, such as an error description if the state is
   * `FAILED_DEPROGRAMMING`.
   *
   * @param string $stateDetails
   */
  public function setStateDetails($stateDetails)
  {
    $this->stateDetails = $stateDetails;
  }
  /**
   * @return string
   */
  public function getStateDetails()
  {
    return $this->stateDetails;
  }
  /**
   * Output only. The timestamp of when the record was updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutomatedDnsRecord::class, 'Google_Service_Networkconnectivity_AutomatedDnsRecord');
