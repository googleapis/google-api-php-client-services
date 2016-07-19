<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_SQLAdmin_DatabaseInstance extends Google_Collection
{
  protected $collection_key = 'suspensionReason';
  public $backendType;
  public $currentDiskSize;
  public $databaseVersion;
  public $etag;
  public $failoverReplica;
  public $instanceType;
  public $ipAddresses;
  public $ipv6Address;
  public $kind;
  public $masterInstanceName;
  public $maxDiskSize;
  public $name;
  public $onPremisesConfiguration;
  public $project;
  public $region;
  public $replicaConfiguration;
  public $replicaNames;
  public $selfLink;
  public $serverCaCert;
  public $serviceAccountEmailAddress;
  public $settings;
  public $state;
  public $suspensionReason;

  public function setBackendType($backendType)
  {
    $this->backendType = $backendType;
  }
  public function getBackendType()
  {
    return $this->backendType;
  }
  public function setCurrentDiskSize($currentDiskSize)
  {
    $this->currentDiskSize = $currentDiskSize;
  }
  public function getCurrentDiskSize()
  {
    return $this->currentDiskSize;
  }
  public function setDatabaseVersion($databaseVersion)
  {
    $this->databaseVersion = $databaseVersion;
  }
  public function getDatabaseVersion()
  {
    return $this->databaseVersion;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setFailoverReplica(Google_Service_SQLAdmin_DatabaseInstanceFailoverReplica $failoverReplica)
  {
    $this->failoverReplica = $failoverReplica;
  }
  public function getFailoverReplica()
  {
    return $this->failoverReplica;
  }
  public function setInstanceType($instanceType)
  {
    $this->instanceType = $instanceType;
  }
  public function getInstanceType()
  {
    return $this->instanceType;
  }
  public function setIpAddresses(array $ipAddresses)
  {
    foreach ($ipAddresses as $i) {
      if (!$i instanceof Google_Service_SQLAdmin_IpMapping) {
        throw new InvalidArgumentException('First argument to setIpAddresses must be an array of Google_Service_SQLAdmin_IpMapping');
      }
    }
    $this->ipAddresses = $ipAddresses;
  }
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  public function setIpv6Address($ipv6Address)
  {
    $this->ipv6Address = $ipv6Address;
  }
  public function getIpv6Address()
  {
    return $this->ipv6Address;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMasterInstanceName($masterInstanceName)
  {
    $this->masterInstanceName = $masterInstanceName;
  }
  public function getMasterInstanceName()
  {
    return $this->masterInstanceName;
  }
  public function setMaxDiskSize($maxDiskSize)
  {
    $this->maxDiskSize = $maxDiskSize;
  }
  public function getMaxDiskSize()
  {
    return $this->maxDiskSize;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOnPremisesConfiguration(Google_Service_SQLAdmin_OnPremisesConfiguration $onPremisesConfiguration)
  {
    $this->onPremisesConfiguration = $onPremisesConfiguration;
  }
  public function getOnPremisesConfiguration()
  {
    return $this->onPremisesConfiguration;
  }
  public function setProject($project)
  {
    $this->project = $project;
  }
  public function getProject()
  {
    return $this->project;
  }
  public function setRegion($region)
  {
    $this->region = $region;
  }
  public function getRegion()
  {
    return $this->region;
  }
  public function setReplicaConfiguration(Google_Service_SQLAdmin_ReplicaConfiguration $replicaConfiguration)
  {
    $this->replicaConfiguration = $replicaConfiguration;
  }
  public function getReplicaConfiguration()
  {
    return $this->replicaConfiguration;
  }
  public function setReplicaNames(array $replicaNames)
  {
    $this->replicaNames = $replicaNames;
  }
  public function getReplicaNames()
  {
    return $this->replicaNames;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setServerCaCert(Google_Service_SQLAdmin_SslCert $serverCaCert)
  {
    $this->serverCaCert = $serverCaCert;
  }
  public function getServerCaCert()
  {
    return $this->serverCaCert;
  }
  public function setServiceAccountEmailAddress($serviceAccountEmailAddress)
  {
    $this->serviceAccountEmailAddress = $serviceAccountEmailAddress;
  }
  public function getServiceAccountEmailAddress()
  {
    return $this->serviceAccountEmailAddress;
  }
  public function setSettings(Google_Service_SQLAdmin_Settings $settings)
  {
    $this->settings = $settings;
  }
  public function getSettings()
  {
    return $this->settings;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setSuspensionReason(array $suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }
}
