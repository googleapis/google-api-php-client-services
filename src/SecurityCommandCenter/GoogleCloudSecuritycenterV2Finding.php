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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2Finding extends \Google\Collection
{
  public const FINDING_CLASS_FINDING_CLASS_UNSPECIFIED = 'FINDING_CLASS_UNSPECIFIED';
  public const FINDING_CLASS_THREAT = 'THREAT';
  public const FINDING_CLASS_VULNERABILITY = 'VULNERABILITY';
  public const FINDING_CLASS_MISCONFIGURATION = 'MISCONFIGURATION';
  public const FINDING_CLASS_OBSERVATION = 'OBSERVATION';
  public const FINDING_CLASS_SCC_ERROR = 'SCC_ERROR';
  public const FINDING_CLASS_POSTURE_VIOLATION = 'POSTURE_VIOLATION';
  public const FINDING_CLASS_TOXIC_COMBINATION = 'TOXIC_COMBINATION';
  public const FINDING_CLASS_SENSITIVE_DATA_RISK = 'SENSITIVE_DATA_RISK';
  public const FINDING_CLASS_CHOKEPOINT = 'CHOKEPOINT';
  public const FINDING_CLASS_EXTERNAL_EXPOSURE = 'EXTERNAL_EXPOSURE';
  public const FINDING_CLASS_SECRET = 'SECRET';
  public const MUTE_MUTE_UNSPECIFIED = 'MUTE_UNSPECIFIED';
  public const MUTE_MUTED = 'MUTED';
  public const MUTE_UNMUTED = 'UNMUTED';
  public const MUTE_UNDEFINED = 'UNDEFINED';
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  public const SEVERITY_CRITICAL = 'CRITICAL';
  public const SEVERITY_HIGH = 'HIGH';
  public const SEVERITY_MEDIUM = 'MEDIUM';
  public const SEVERITY_LOW = 'LOW';
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  public const STATE_ACTIVE = 'ACTIVE';
  public const STATE_INACTIVE = 'INACTIVE';
  protected $collection_key = 'processes';
  protected $accessType = GoogleCloudSecuritycenterV2Access::class;
  protected $accessDataType = '';
  protected $affectedResourcesType = GoogleCloudSecuritycenterV2AffectedResources::class;
  protected $affectedResourcesDataType = '';
  protected $agentDataAccessEventsType = GoogleCloudSecuritycenterV2AgentDataAccessEvent::class;
  protected $agentDataAccessEventsDataType = 'array';
  protected $aiModelType = GoogleCloudSecuritycenterV2AiModel::class;
  protected $aiModelDataType = '';
  protected $applicationType = GoogleCloudSecuritycenterV2Application::class;
  protected $applicationDataType = '';
  protected $artifactGuardPoliciesType = GoogleCloudSecuritycenterV2ArtifactGuardPolicies::class;
  protected $artifactGuardPoliciesDataType = '';
  protected $attackExposureType = GoogleCloudSecuritycenterV2AttackExposure::class;
  protected $attackExposureDataType = '';
  protected $backupDisasterRecoveryType = GoogleCloudSecuritycenterV2BackupDisasterRecovery::class;
  protected $backupDisasterRecoveryDataType = '';
  /**
   * @var string
   */
  public $canonicalName;
  /**
   * @var string
   */
  public $category;
  protected $chokepointType = GoogleCloudSecuritycenterV2Chokepoint::class;
  protected $chokepointDataType = '';
  protected $cloudArmorType = GoogleCloudSecuritycenterV2CloudArmor::class;
  protected $cloudArmorDataType = '';
  protected $cloudDlpDataProfileType = GoogleCloudSecuritycenterV2CloudDlpDataProfile::class;
  protected $cloudDlpDataProfileDataType = '';
  protected $cloudDlpInspectionType = GoogleCloudSecuritycenterV2CloudDlpInspection::class;
  protected $cloudDlpInspectionDataType = '';
  protected $complianceDetailsType = GoogleCloudSecuritycenterV2ComplianceDetails::class;
  protected $complianceDetailsDataType = '';
  protected $compliancesType = GoogleCloudSecuritycenterV2Compliance::class;
  protected $compliancesDataType = 'array';
  protected $connectionsType = GoogleCloudSecuritycenterV2Connection::class;
  protected $connectionsDataType = 'array';
  protected $contactsType = GoogleCloudSecuritycenterV2ContactDetails::class;
  protected $contactsDataType = 'map';
  protected $containersType = GoogleCloudSecuritycenterV2Container::class;
  protected $containersDataType = 'array';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $cryptoKeyName;
  protected $dataAccessEventsType = GoogleCloudSecuritycenterV2DataAccessEvent::class;
  protected $dataAccessEventsDataType = 'array';
  protected $dataFlowEventsType = GoogleCloudSecuritycenterV2DataFlowEvent::class;
  protected $dataFlowEventsDataType = 'array';
  protected $dataRetentionDeletionEventsType = GoogleCloudSecuritycenterV2DataRetentionDeletionEvent::class;
  protected $dataRetentionDeletionEventsDataType = 'array';
  protected $databaseType = GoogleCloudSecuritycenterV2Database::class;
  protected $databaseDataType = '';
  /**
   * @var string
   */
  public $description;
  protected $discoveredWorkloadType = GoogleCloudSecuritycenterV2DiscoveredWorkload::class;
  protected $discoveredWorkloadDataType = '';
  protected $diskType = GoogleCloudSecuritycenterV2Disk::class;
  protected $diskDataType = '';
  /**
   * @var string
   */
  public $eventTime;
  protected $exfiltrationType = GoogleCloudSecuritycenterV2Exfiltration::class;
  protected $exfiltrationDataType = '';
  protected $externalExposureType = GoogleCloudSecuritycenterV2ExternalExposure::class;
  protected $externalExposureDataType = '';
  protected $externalSystemsType = GoogleCloudSecuritycenterV2ExternalSystem::class;
  protected $externalSystemsDataType = 'map';
  /**
   * @var string
   */
  public $externalUri;
  protected $filesType = GoogleCloudSecuritycenterV2File::class;
  protected $filesDataType = 'array';
  /**
   * @var string
   */
  public $findingClass;
  protected $groupMembershipsType = GoogleCloudSecuritycenterV2GroupMembership::class;
  protected $groupMembershipsDataType = 'array';
  protected $iamBindingsType = GoogleCloudSecuritycenterV2IamBinding::class;
  protected $iamBindingsDataType = 'array';
  protected $indicatorType = GoogleCloudSecuritycenterV2Indicator::class;
  protected $indicatorDataType = '';
  protected $ipRulesType = GoogleCloudSecuritycenterV2IpRules::class;
  protected $ipRulesDataType = '';
  protected $jobType = GoogleCloudSecuritycenterV2Job::class;
  protected $jobDataType = '';
  protected $kernelRootkitType = GoogleCloudSecuritycenterV2KernelRootkit::class;
  protected $kernelRootkitDataType = '';
  protected $kubernetesType = GoogleCloudSecuritycenterV2Kubernetes::class;
  protected $kubernetesDataType = '';
  protected $loadBalancersType = GoogleCloudSecuritycenterV2LoadBalancer::class;
  protected $loadBalancersDataType = 'array';
  protected $logEntriesType = GoogleCloudSecuritycenterV2LogEntry::class;
  protected $logEntriesDataType = 'array';
  protected $mitreAttackType = GoogleCloudSecuritycenterV2MitreAttack::class;
  protected $mitreAttackDataType = '';
  /**
   * @var string
   */
  public $moduleName;
  /**
   * @var string
   */
  public $mute;
  protected $muteInfoType = GoogleCloudSecuritycenterV2MuteInfo::class;
  protected $muteInfoDataType = '';
  /**
   * @var string
   */
  public $muteInitiator;
  /**
   * @var string
   */
  public $muteUpdateTime;
  /**
   * @var string
   */
  public $name;
  protected $networksType = GoogleCloudSecuritycenterV2Network::class;
  protected $networksDataType = 'array';
  /**
   * @var string
   */
  public $nextSteps;
  protected $notebookType = GoogleCloudSecuritycenterV2Notebook::class;
  protected $notebookDataType = '';
  protected $orgPoliciesType = GoogleCloudSecuritycenterV2OrgPolicy::class;
  protected $orgPoliciesDataType = 'array';
  /**
   * @var string
   */
  public $parent;
  /**
   * @var string
   */
  public $parentDisplayName;
  protected $policyViolationSummaryType = GoogleCloudSecuritycenterV2PolicyViolationSummary::class;
  protected $policyViolationSummaryDataType = '';
  protected $processesType = GoogleCloudSecuritycenterV2Process::class;
  protected $processesDataType = 'array';
  /**
   * @var string
   */
  public $resourceName;
  protected $secretType = GoogleCloudSecuritycenterV2Secret::class;
  protected $secretDataType = '';
  protected $securityMarksType = GoogleCloudSecuritycenterV2SecurityMarks::class;
  protected $securityMarksDataType = '';
  protected $securityPostureType = GoogleCloudSecuritycenterV2SecurityPosture::class;
  protected $securityPostureDataType = '';
  /**
   * @var string
   */
  public $severity;
  /**
   * @var array[]
   */
  public $sourceProperties;
  /**
   * @var string
   */
  public $state;
  protected $toxicCombinationType = GoogleCloudSecuritycenterV2ToxicCombination::class;
  protected $toxicCombinationDataType = '';
  protected $vertexAiType = GoogleCloudSecuritycenterV2VertexAi::class;
  protected $vertexAiDataType = '';
  protected $vulnerabilityType = GoogleCloudSecuritycenterV2Vulnerability::class;
  protected $vulnerabilityDataType = '';

  /**
   * @param GoogleCloudSecuritycenterV2Access $access
   */
  public function setAccess(GoogleCloudSecuritycenterV2Access $access)
  {
    $this->access = $access;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Access
   */
  public function getAccess()
  {
    return $this->access;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AffectedResources $affectedResources
   */
  public function setAffectedResources(GoogleCloudSecuritycenterV2AffectedResources $affectedResources)
  {
    $this->affectedResources = $affectedResources;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AffectedResources
   */
  public function getAffectedResources()
  {
    return $this->affectedResources;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AgentDataAccessEvent[] $agentDataAccessEvents
   */
  public function setAgentDataAccessEvents($agentDataAccessEvents)
  {
    $this->agentDataAccessEvents = $agentDataAccessEvents;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AgentDataAccessEvent[]
   */
  public function getAgentDataAccessEvents()
  {
    return $this->agentDataAccessEvents;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AiModel $aiModel
   */
  public function setAiModel(GoogleCloudSecuritycenterV2AiModel $aiModel)
  {
    $this->aiModel = $aiModel;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AiModel
   */
  public function getAiModel()
  {
    return $this->aiModel;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Application $application
   */
  public function setApplication(GoogleCloudSecuritycenterV2Application $application)
  {
    $this->application = $application;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Application
   */
  public function getApplication()
  {
    return $this->application;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ArtifactGuardPolicies $artifactGuardPolicies
   */
  public function setArtifactGuardPolicies(GoogleCloudSecuritycenterV2ArtifactGuardPolicies $artifactGuardPolicies)
  {
    $this->artifactGuardPolicies = $artifactGuardPolicies;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ArtifactGuardPolicies
   */
  public function getArtifactGuardPolicies()
  {
    return $this->artifactGuardPolicies;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AttackExposure $attackExposure
   */
  public function setAttackExposure(GoogleCloudSecuritycenterV2AttackExposure $attackExposure)
  {
    $this->attackExposure = $attackExposure;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AttackExposure
   */
  public function getAttackExposure()
  {
    return $this->attackExposure;
  }
  /**
   * @param GoogleCloudSecuritycenterV2BackupDisasterRecovery $backupDisasterRecovery
   */
  public function setBackupDisasterRecovery(GoogleCloudSecuritycenterV2BackupDisasterRecovery $backupDisasterRecovery)
  {
    $this->backupDisasterRecovery = $backupDisasterRecovery;
  }
  /**
   * @return GoogleCloudSecuritycenterV2BackupDisasterRecovery
   */
  public function getBackupDisasterRecovery()
  {
    return $this->backupDisasterRecovery;
  }
  /**
   * @param string $canonicalName
   */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /**
   * @return string
   */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /**
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Chokepoint $chokepoint
   */
  public function setChokepoint(GoogleCloudSecuritycenterV2Chokepoint $chokepoint)
  {
    $this->chokepoint = $chokepoint;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Chokepoint
   */
  public function getChokepoint()
  {
    return $this->chokepoint;
  }
  /**
   * @param GoogleCloudSecuritycenterV2CloudArmor $cloudArmor
   */
  public function setCloudArmor(GoogleCloudSecuritycenterV2CloudArmor $cloudArmor)
  {
    $this->cloudArmor = $cloudArmor;
  }
  /**
   * @return GoogleCloudSecuritycenterV2CloudArmor
   */
  public function getCloudArmor()
  {
    return $this->cloudArmor;
  }
  /**
   * @param GoogleCloudSecuritycenterV2CloudDlpDataProfile $cloudDlpDataProfile
   */
  public function setCloudDlpDataProfile(GoogleCloudSecuritycenterV2CloudDlpDataProfile $cloudDlpDataProfile)
  {
    $this->cloudDlpDataProfile = $cloudDlpDataProfile;
  }
  /**
   * @return GoogleCloudSecuritycenterV2CloudDlpDataProfile
   */
  public function getCloudDlpDataProfile()
  {
    return $this->cloudDlpDataProfile;
  }
  /**
   * @param GoogleCloudSecuritycenterV2CloudDlpInspection $cloudDlpInspection
   */
  public function setCloudDlpInspection(GoogleCloudSecuritycenterV2CloudDlpInspection $cloudDlpInspection)
  {
    $this->cloudDlpInspection = $cloudDlpInspection;
  }
  /**
   * @return GoogleCloudSecuritycenterV2CloudDlpInspection
   */
  public function getCloudDlpInspection()
  {
    return $this->cloudDlpInspection;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ComplianceDetails $complianceDetails
   */
  public function setComplianceDetails(GoogleCloudSecuritycenterV2ComplianceDetails $complianceDetails)
  {
    $this->complianceDetails = $complianceDetails;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ComplianceDetails
   */
  public function getComplianceDetails()
  {
    return $this->complianceDetails;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Compliance[] $compliances
   */
  public function setCompliances($compliances)
  {
    $this->compliances = $compliances;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Compliance[]
   */
  public function getCompliances()
  {
    return $this->compliances;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Connection[] $connections
   */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Connection[]
   */
  public function getConnections()
  {
    return $this->connections;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ContactDetails[] $contacts
   */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ContactDetails[]
   */
  public function getContacts()
  {
    return $this->contacts;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Container[] $containers
   */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Container[]
   */
  public function getContainers()
  {
    return $this->containers;
  }
  /**
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
   * @param string $cryptoKeyName
   */
  public function setCryptoKeyName($cryptoKeyName)
  {
    $this->cryptoKeyName = $cryptoKeyName;
  }
  /**
   * @return string
   */
  public function getCryptoKeyName()
  {
    return $this->cryptoKeyName;
  }
  /**
   * @param GoogleCloudSecuritycenterV2DataAccessEvent[] $dataAccessEvents
   */
  public function setDataAccessEvents($dataAccessEvents)
  {
    $this->dataAccessEvents = $dataAccessEvents;
  }
  /**
   * @return GoogleCloudSecuritycenterV2DataAccessEvent[]
   */
  public function getDataAccessEvents()
  {
    return $this->dataAccessEvents;
  }
  /**
   * @param GoogleCloudSecuritycenterV2DataFlowEvent[] $dataFlowEvents
   */
  public function setDataFlowEvents($dataFlowEvents)
  {
    $this->dataFlowEvents = $dataFlowEvents;
  }
  /**
   * @return GoogleCloudSecuritycenterV2DataFlowEvent[]
   */
  public function getDataFlowEvents()
  {
    return $this->dataFlowEvents;
  }
  /**
   * @param GoogleCloudSecuritycenterV2DataRetentionDeletionEvent[] $dataRetentionDeletionEvents
   */
  public function setDataRetentionDeletionEvents($dataRetentionDeletionEvents)
  {
    $this->dataRetentionDeletionEvents = $dataRetentionDeletionEvents;
  }
  /**
   * @return GoogleCloudSecuritycenterV2DataRetentionDeletionEvent[]
   */
  public function getDataRetentionDeletionEvents()
  {
    return $this->dataRetentionDeletionEvents;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Database $database
   */
  public function setDatabase(GoogleCloudSecuritycenterV2Database $database)
  {
    $this->database = $database;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Database
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
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
   * @param GoogleCloudSecuritycenterV2DiscoveredWorkload $discoveredWorkload
   */
  public function setDiscoveredWorkload(GoogleCloudSecuritycenterV2DiscoveredWorkload $discoveredWorkload)
  {
    $this->discoveredWorkload = $discoveredWorkload;
  }
  /**
   * @return GoogleCloudSecuritycenterV2DiscoveredWorkload
   */
  public function getDiscoveredWorkload()
  {
    return $this->discoveredWorkload;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Disk $disk
   */
  public function setDisk(GoogleCloudSecuritycenterV2Disk $disk)
  {
    $this->disk = $disk;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Disk
   */
  public function getDisk()
  {
    return $this->disk;
  }
  /**
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Exfiltration $exfiltration
   */
  public function setExfiltration(GoogleCloudSecuritycenterV2Exfiltration $exfiltration)
  {
    $this->exfiltration = $exfiltration;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Exfiltration
   */
  public function getExfiltration()
  {
    return $this->exfiltration;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ExternalExposure $externalExposure
   */
  public function setExternalExposure(GoogleCloudSecuritycenterV2ExternalExposure $externalExposure)
  {
    $this->externalExposure = $externalExposure;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ExternalExposure
   */
  public function getExternalExposure()
  {
    return $this->externalExposure;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ExternalSystem[] $externalSystems
   */
  public function setExternalSystems($externalSystems)
  {
    $this->externalSystems = $externalSystems;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ExternalSystem[]
   */
  public function getExternalSystems()
  {
    return $this->externalSystems;
  }
  /**
   * @param string $externalUri
   */
  public function setExternalUri($externalUri)
  {
    $this->externalUri = $externalUri;
  }
  /**
   * @return string
   */
  public function getExternalUri()
  {
    return $this->externalUri;
  }
  /**
   * @param GoogleCloudSecuritycenterV2File[] $files
   */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /**
   * @return GoogleCloudSecuritycenterV2File[]
   */
  public function getFiles()
  {
    return $this->files;
  }
  /**
   * @param self::FINDING_CLASS_* $findingClass
   */
  public function setFindingClass($findingClass)
  {
    $this->findingClass = $findingClass;
  }
  /**
   * @return self::FINDING_CLASS_*
   */
  public function getFindingClass()
  {
    return $this->findingClass;
  }
  /**
   * @param GoogleCloudSecuritycenterV2GroupMembership[] $groupMemberships
   */
  public function setGroupMemberships($groupMemberships)
  {
    $this->groupMemberships = $groupMemberships;
  }
  /**
   * @return GoogleCloudSecuritycenterV2GroupMembership[]
   */
  public function getGroupMemberships()
  {
    return $this->groupMemberships;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IamBinding[] $iamBindings
   */
  public function setIamBindings($iamBindings)
  {
    $this->iamBindings = $iamBindings;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IamBinding[]
   */
  public function getIamBindings()
  {
    return $this->iamBindings;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Indicator $indicator
   */
  public function setIndicator(GoogleCloudSecuritycenterV2Indicator $indicator)
  {
    $this->indicator = $indicator;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Indicator
   */
  public function getIndicator()
  {
    return $this->indicator;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IpRules $ipRules
   */
  public function setIpRules(GoogleCloudSecuritycenterV2IpRules $ipRules)
  {
    $this->ipRules = $ipRules;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IpRules
   */
  public function getIpRules()
  {
    return $this->ipRules;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Job $job
   */
  public function setJob(GoogleCloudSecuritycenterV2Job $job)
  {
    $this->job = $job;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Job
   */
  public function getJob()
  {
    return $this->job;
  }
  /**
   * @param GoogleCloudSecuritycenterV2KernelRootkit $kernelRootkit
   */
  public function setKernelRootkit(GoogleCloudSecuritycenterV2KernelRootkit $kernelRootkit)
  {
    $this->kernelRootkit = $kernelRootkit;
  }
  /**
   * @return GoogleCloudSecuritycenterV2KernelRootkit
   */
  public function getKernelRootkit()
  {
    return $this->kernelRootkit;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Kubernetes $kubernetes
   */
  public function setKubernetes(GoogleCloudSecuritycenterV2Kubernetes $kubernetes)
  {
    $this->kubernetes = $kubernetes;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Kubernetes
   */
  public function getKubernetes()
  {
    return $this->kubernetes;
  }
  /**
   * @param GoogleCloudSecuritycenterV2LoadBalancer[] $loadBalancers
   */
  public function setLoadBalancers($loadBalancers)
  {
    $this->loadBalancers = $loadBalancers;
  }
  /**
   * @return GoogleCloudSecuritycenterV2LoadBalancer[]
   */
  public function getLoadBalancers()
  {
    return $this->loadBalancers;
  }
  /**
   * @param GoogleCloudSecuritycenterV2LogEntry[] $logEntries
   */
  public function setLogEntries($logEntries)
  {
    $this->logEntries = $logEntries;
  }
  /**
   * @return GoogleCloudSecuritycenterV2LogEntry[]
   */
  public function getLogEntries()
  {
    return $this->logEntries;
  }
  /**
   * @param GoogleCloudSecuritycenterV2MitreAttack $mitreAttack
   */
  public function setMitreAttack(GoogleCloudSecuritycenterV2MitreAttack $mitreAttack)
  {
    $this->mitreAttack = $mitreAttack;
  }
  /**
   * @return GoogleCloudSecuritycenterV2MitreAttack
   */
  public function getMitreAttack()
  {
    return $this->mitreAttack;
  }
  /**
   * @param string $moduleName
   */
  public function setModuleName($moduleName)
  {
    $this->moduleName = $moduleName;
  }
  /**
   * @return string
   */
  public function getModuleName()
  {
    return $this->moduleName;
  }
  /**
   * @param self::MUTE_* $mute
   */
  public function setMute($mute)
  {
    $this->mute = $mute;
  }
  /**
   * @return self::MUTE_*
   */
  public function getMute()
  {
    return $this->mute;
  }
  /**
   * @param GoogleCloudSecuritycenterV2MuteInfo $muteInfo
   */
  public function setMuteInfo(GoogleCloudSecuritycenterV2MuteInfo $muteInfo)
  {
    $this->muteInfo = $muteInfo;
  }
  /**
   * @return GoogleCloudSecuritycenterV2MuteInfo
   */
  public function getMuteInfo()
  {
    return $this->muteInfo;
  }
  /**
   * @param string $muteInitiator
   */
  public function setMuteInitiator($muteInitiator)
  {
    $this->muteInitiator = $muteInitiator;
  }
  /**
   * @return string
   */
  public function getMuteInitiator()
  {
    return $this->muteInitiator;
  }
  /**
   * @param string $muteUpdateTime
   */
  public function setMuteUpdateTime($muteUpdateTime)
  {
    $this->muteUpdateTime = $muteUpdateTime;
  }
  /**
   * @return string
   */
  public function getMuteUpdateTime()
  {
    return $this->muteUpdateTime;
  }
  /**
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
   * @param GoogleCloudSecuritycenterV2Network[] $networks
   */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Network[]
   */
  public function getNetworks()
  {
    return $this->networks;
  }
  /**
   * @param string $nextSteps
   */
  public function setNextSteps($nextSteps)
  {
    $this->nextSteps = $nextSteps;
  }
  /**
   * @return string
   */
  public function getNextSteps()
  {
    return $this->nextSteps;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Notebook $notebook
   */
  public function setNotebook(GoogleCloudSecuritycenterV2Notebook $notebook)
  {
    $this->notebook = $notebook;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Notebook
   */
  public function getNotebook()
  {
    return $this->notebook;
  }
  /**
   * @param GoogleCloudSecuritycenterV2OrgPolicy[] $orgPolicies
   */
  public function setOrgPolicies($orgPolicies)
  {
    $this->orgPolicies = $orgPolicies;
  }
  /**
   * @return GoogleCloudSecuritycenterV2OrgPolicy[]
   */
  public function getOrgPolicies()
  {
    return $this->orgPolicies;
  }
  /**
   * @param string $parent
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * @param string $parentDisplayName
   */
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /**
   * @return string
   */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /**
   * @param GoogleCloudSecuritycenterV2PolicyViolationSummary $policyViolationSummary
   */
  public function setPolicyViolationSummary(GoogleCloudSecuritycenterV2PolicyViolationSummary $policyViolationSummary)
  {
    $this->policyViolationSummary = $policyViolationSummary;
  }
  /**
   * @return GoogleCloudSecuritycenterV2PolicyViolationSummary
   */
  public function getPolicyViolationSummary()
  {
    return $this->policyViolationSummary;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Process[] $processes
   */
  public function setProcesses($processes)
  {
    $this->processes = $processes;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Process[]
   */
  public function getProcesses()
  {
    return $this->processes;
  }
  /**
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Secret $secret
   */
  public function setSecret(GoogleCloudSecuritycenterV2Secret $secret)
  {
    $this->secret = $secret;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Secret
   */
  public function getSecret()
  {
    return $this->secret;
  }
  /**
   * @param GoogleCloudSecuritycenterV2SecurityMarks $securityMarks
   */
  public function setSecurityMarks(GoogleCloudSecuritycenterV2SecurityMarks $securityMarks)
  {
    $this->securityMarks = $securityMarks;
  }
  /**
   * @return GoogleCloudSecuritycenterV2SecurityMarks
   */
  public function getSecurityMarks()
  {
    return $this->securityMarks;
  }
  /**
   * @param GoogleCloudSecuritycenterV2SecurityPosture $securityPosture
   */
  public function setSecurityPosture(GoogleCloudSecuritycenterV2SecurityPosture $securityPosture)
  {
    $this->securityPosture = $securityPosture;
  }
  /**
   * @return GoogleCloudSecuritycenterV2SecurityPosture
   */
  public function getSecurityPosture()
  {
    return $this->securityPosture;
  }
  /**
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * @param array[] $sourceProperties
   */
  public function setSourceProperties($sourceProperties)
  {
    $this->sourceProperties = $sourceProperties;
  }
  /**
   * @return array[]
   */
  public function getSourceProperties()
  {
    return $this->sourceProperties;
  }
  /**
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
   * @param GoogleCloudSecuritycenterV2ToxicCombination $toxicCombination
   */
  public function setToxicCombination(GoogleCloudSecuritycenterV2ToxicCombination $toxicCombination)
  {
    $this->toxicCombination = $toxicCombination;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ToxicCombination
   */
  public function getToxicCombination()
  {
    return $this->toxicCombination;
  }
  /**
   * @param GoogleCloudSecuritycenterV2VertexAi $vertexAi
   */
  public function setVertexAi(GoogleCloudSecuritycenterV2VertexAi $vertexAi)
  {
    $this->vertexAi = $vertexAi;
  }
  /**
   * @return GoogleCloudSecuritycenterV2VertexAi
   */
  public function getVertexAi()
  {
    return $this->vertexAi;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Vulnerability $vulnerability
   */
  public function setVulnerability(GoogleCloudSecuritycenterV2Vulnerability $vulnerability)
  {
    $this->vulnerability = $vulnerability;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Vulnerability
   */
  public function getVulnerability()
  {
    return $this->vulnerability;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2Finding::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Finding');
