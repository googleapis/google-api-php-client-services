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

class Finding extends \Google\Collection
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
  protected $accessType = Access::class;
  protected $accessDataType = '';
  protected $affectedResourcesType = AffectedResources::class;
  protected $affectedResourcesDataType = '';
  protected $agentDataAccessEventsType = AgentDataAccessEvent::class;
  protected $agentDataAccessEventsDataType = 'array';
  protected $aiModelType = AiModel::class;
  protected $aiModelDataType = '';
  protected $applicationType = Application::class;
  protected $applicationDataType = '';
  protected $artifactGuardPoliciesType = ArtifactGuardPolicies::class;
  protected $artifactGuardPoliciesDataType = '';
  protected $attackExposureType = AttackExposure::class;
  protected $attackExposureDataType = '';
  protected $backupDisasterRecoveryType = BackupDisasterRecovery::class;
  protected $backupDisasterRecoveryDataType = '';
  /**
   * @var string
   */
  public $canonicalName;
  /**
   * @var string
   */
  public $category;
  protected $chokepointType = Chokepoint::class;
  protected $chokepointDataType = '';
  protected $cloudArmorType = CloudArmor::class;
  protected $cloudArmorDataType = '';
  protected $cloudDlpDataProfileType = CloudDlpDataProfile::class;
  protected $cloudDlpDataProfileDataType = '';
  protected $cloudDlpInspectionType = CloudDlpInspection::class;
  protected $cloudDlpInspectionDataType = '';
  protected $complianceDetailsType = ComplianceDetails::class;
  protected $complianceDetailsDataType = '';
  protected $compliancesType = Compliance::class;
  protected $compliancesDataType = 'array';
  protected $connectionsType = Connection::class;
  protected $connectionsDataType = 'array';
  protected $contactsType = ContactDetails::class;
  protected $contactsDataType = 'map';
  protected $containersType = Container::class;
  protected $containersDataType = 'array';
  /**
   * @var string
   */
  public $createTime;
  protected $dataAccessEventsType = DataAccessEvent::class;
  protected $dataAccessEventsDataType = 'array';
  protected $dataFlowEventsType = DataFlowEvent::class;
  protected $dataFlowEventsDataType = 'array';
  protected $dataRetentionDeletionEventsType = DataRetentionDeletionEvent::class;
  protected $dataRetentionDeletionEventsDataType = 'array';
  protected $databaseType = Database::class;
  protected $databaseDataType = '';
  /**
   * @var string
   */
  public $description;
  protected $discoveredWorkloadType = DiscoveredWorkload::class;
  protected $discoveredWorkloadDataType = '';
  protected $diskType = Disk::class;
  protected $diskDataType = '';
  /**
   * @var string
   */
  public $eventTime;
  protected $exfiltrationType = Exfiltration::class;
  protected $exfiltrationDataType = '';
  protected $externalExposureType = ExternalExposure::class;
  protected $externalExposureDataType = '';
  protected $externalSystemsType = GoogleCloudSecuritycenterV1ExternalSystem::class;
  protected $externalSystemsDataType = 'map';
  /**
   * @var string
   */
  public $externalUri;
  protected $filesType = SecuritycenterFile::class;
  protected $filesDataType = 'array';
  /**
   * @var string
   */
  public $findingClass;
  protected $groupMembershipsType = GroupMembership::class;
  protected $groupMembershipsDataType = 'array';
  protected $iamBindingsType = IamBinding::class;
  protected $iamBindingsDataType = 'array';
  protected $indicatorType = Indicator::class;
  protected $indicatorDataType = '';
  protected $ipRulesType = IpRules::class;
  protected $ipRulesDataType = '';
  protected $jobType = Job::class;
  protected $jobDataType = '';
  protected $kernelRootkitType = KernelRootkit::class;
  protected $kernelRootkitDataType = '';
  protected $kubernetesType = Kubernetes::class;
  protected $kubernetesDataType = '';
  protected $loadBalancersType = LoadBalancer::class;
  protected $loadBalancersDataType = 'array';
  protected $logEntriesType = LogEntry::class;
  protected $logEntriesDataType = 'array';
  protected $mitreAttackType = MitreAttack::class;
  protected $mitreAttackDataType = '';
  /**
   * @var string
   */
  public $moduleName;
  /**
   * @var string
   */
  public $mute;
  protected $muteInfoType = MuteInfo::class;
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
  protected $networksType = Network::class;
  protected $networksDataType = 'array';
  /**
   * @var string
   */
  public $nextSteps;
  protected $notebookType = Notebook::class;
  protected $notebookDataType = '';
  protected $orgPoliciesType = OrgPolicy::class;
  protected $orgPoliciesDataType = 'array';
  /**
   * @var string
   */
  public $parent;
  /**
   * @var string
   */
  public $parentDisplayName;
  protected $policyViolationSummaryType = PolicyViolationSummary::class;
  protected $policyViolationSummaryDataType = '';
  protected $processesType = Process::class;
  protected $processesDataType = 'array';
  /**
   * @var string
   */
  public $resourceName;
  protected $secretType = Secret::class;
  protected $secretDataType = '';
  protected $securityMarksType = SecurityMarks::class;
  protected $securityMarksDataType = '';
  protected $securityPostureType = SecurityPosture::class;
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
  protected $toxicCombinationType = ToxicCombination::class;
  protected $toxicCombinationDataType = '';
  protected $vertexAiType = VertexAi::class;
  protected $vertexAiDataType = '';
  protected $vulnerabilityType = Vulnerability::class;
  protected $vulnerabilityDataType = '';

  /**
   * @param Access $access
   */
  public function setAccess(Access $access)
  {
    $this->access = $access;
  }
  /**
   * @return Access
   */
  public function getAccess()
  {
    return $this->access;
  }
  /**
   * @param AffectedResources $affectedResources
   */
  public function setAffectedResources(AffectedResources $affectedResources)
  {
    $this->affectedResources = $affectedResources;
  }
  /**
   * @return AffectedResources
   */
  public function getAffectedResources()
  {
    return $this->affectedResources;
  }
  /**
   * @param AgentDataAccessEvent[] $agentDataAccessEvents
   */
  public function setAgentDataAccessEvents($agentDataAccessEvents)
  {
    $this->agentDataAccessEvents = $agentDataAccessEvents;
  }
  /**
   * @return AgentDataAccessEvent[]
   */
  public function getAgentDataAccessEvents()
  {
    return $this->agentDataAccessEvents;
  }
  /**
   * @param AiModel $aiModel
   */
  public function setAiModel(AiModel $aiModel)
  {
    $this->aiModel = $aiModel;
  }
  /**
   * @return AiModel
   */
  public function getAiModel()
  {
    return $this->aiModel;
  }
  /**
   * @param Application $application
   */
  public function setApplication(Application $application)
  {
    $this->application = $application;
  }
  /**
   * @return Application
   */
  public function getApplication()
  {
    return $this->application;
  }
  /**
   * @param ArtifactGuardPolicies $artifactGuardPolicies
   */
  public function setArtifactGuardPolicies(ArtifactGuardPolicies $artifactGuardPolicies)
  {
    $this->artifactGuardPolicies = $artifactGuardPolicies;
  }
  /**
   * @return ArtifactGuardPolicies
   */
  public function getArtifactGuardPolicies()
  {
    return $this->artifactGuardPolicies;
  }
  /**
   * @param AttackExposure $attackExposure
   */
  public function setAttackExposure(AttackExposure $attackExposure)
  {
    $this->attackExposure = $attackExposure;
  }
  /**
   * @return AttackExposure
   */
  public function getAttackExposure()
  {
    return $this->attackExposure;
  }
  /**
   * @param BackupDisasterRecovery $backupDisasterRecovery
   */
  public function setBackupDisasterRecovery(BackupDisasterRecovery $backupDisasterRecovery)
  {
    $this->backupDisasterRecovery = $backupDisasterRecovery;
  }
  /**
   * @return BackupDisasterRecovery
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
   * @param Chokepoint $chokepoint
   */
  public function setChokepoint(Chokepoint $chokepoint)
  {
    $this->chokepoint = $chokepoint;
  }
  /**
   * @return Chokepoint
   */
  public function getChokepoint()
  {
    return $this->chokepoint;
  }
  /**
   * @param CloudArmor $cloudArmor
   */
  public function setCloudArmor(CloudArmor $cloudArmor)
  {
    $this->cloudArmor = $cloudArmor;
  }
  /**
   * @return CloudArmor
   */
  public function getCloudArmor()
  {
    return $this->cloudArmor;
  }
  /**
   * @param CloudDlpDataProfile $cloudDlpDataProfile
   */
  public function setCloudDlpDataProfile(CloudDlpDataProfile $cloudDlpDataProfile)
  {
    $this->cloudDlpDataProfile = $cloudDlpDataProfile;
  }
  /**
   * @return CloudDlpDataProfile
   */
  public function getCloudDlpDataProfile()
  {
    return $this->cloudDlpDataProfile;
  }
  /**
   * @param CloudDlpInspection $cloudDlpInspection
   */
  public function setCloudDlpInspection(CloudDlpInspection $cloudDlpInspection)
  {
    $this->cloudDlpInspection = $cloudDlpInspection;
  }
  /**
   * @return CloudDlpInspection
   */
  public function getCloudDlpInspection()
  {
    return $this->cloudDlpInspection;
  }
  /**
   * @param ComplianceDetails $complianceDetails
   */
  public function setComplianceDetails(ComplianceDetails $complianceDetails)
  {
    $this->complianceDetails = $complianceDetails;
  }
  /**
   * @return ComplianceDetails
   */
  public function getComplianceDetails()
  {
    return $this->complianceDetails;
  }
  /**
   * @param Compliance[] $compliances
   */
  public function setCompliances($compliances)
  {
    $this->compliances = $compliances;
  }
  /**
   * @return Compliance[]
   */
  public function getCompliances()
  {
    return $this->compliances;
  }
  /**
   * @param Connection[] $connections
   */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /**
   * @return Connection[]
   */
  public function getConnections()
  {
    return $this->connections;
  }
  /**
   * @param ContactDetails[] $contacts
   */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /**
   * @return ContactDetails[]
   */
  public function getContacts()
  {
    return $this->contacts;
  }
  /**
   * @param Container[] $containers
   */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /**
   * @return Container[]
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
   * @param DataAccessEvent[] $dataAccessEvents
   */
  public function setDataAccessEvents($dataAccessEvents)
  {
    $this->dataAccessEvents = $dataAccessEvents;
  }
  /**
   * @return DataAccessEvent[]
   */
  public function getDataAccessEvents()
  {
    return $this->dataAccessEvents;
  }
  /**
   * @param DataFlowEvent[] $dataFlowEvents
   */
  public function setDataFlowEvents($dataFlowEvents)
  {
    $this->dataFlowEvents = $dataFlowEvents;
  }
  /**
   * @return DataFlowEvent[]
   */
  public function getDataFlowEvents()
  {
    return $this->dataFlowEvents;
  }
  /**
   * @param DataRetentionDeletionEvent[] $dataRetentionDeletionEvents
   */
  public function setDataRetentionDeletionEvents($dataRetentionDeletionEvents)
  {
    $this->dataRetentionDeletionEvents = $dataRetentionDeletionEvents;
  }
  /**
   * @return DataRetentionDeletionEvent[]
   */
  public function getDataRetentionDeletionEvents()
  {
    return $this->dataRetentionDeletionEvents;
  }
  /**
   * @param Database $database
   */
  public function setDatabase(Database $database)
  {
    $this->database = $database;
  }
  /**
   * @return Database
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
   * @param DiscoveredWorkload $discoveredWorkload
   */
  public function setDiscoveredWorkload(DiscoveredWorkload $discoveredWorkload)
  {
    $this->discoveredWorkload = $discoveredWorkload;
  }
  /**
   * @return DiscoveredWorkload
   */
  public function getDiscoveredWorkload()
  {
    return $this->discoveredWorkload;
  }
  /**
   * @param Disk $disk
   */
  public function setDisk(Disk $disk)
  {
    $this->disk = $disk;
  }
  /**
   * @return Disk
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
   * @param Exfiltration $exfiltration
   */
  public function setExfiltration(Exfiltration $exfiltration)
  {
    $this->exfiltration = $exfiltration;
  }
  /**
   * @return Exfiltration
   */
  public function getExfiltration()
  {
    return $this->exfiltration;
  }
  /**
   * @param ExternalExposure $externalExposure
   */
  public function setExternalExposure(ExternalExposure $externalExposure)
  {
    $this->externalExposure = $externalExposure;
  }
  /**
   * @return ExternalExposure
   */
  public function getExternalExposure()
  {
    return $this->externalExposure;
  }
  /**
   * @param GoogleCloudSecuritycenterV1ExternalSystem[] $externalSystems
   */
  public function setExternalSystems($externalSystems)
  {
    $this->externalSystems = $externalSystems;
  }
  /**
   * @return GoogleCloudSecuritycenterV1ExternalSystem[]
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
   * @param SecuritycenterFile[] $files
   */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /**
   * @return SecuritycenterFile[]
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
   * @param GroupMembership[] $groupMemberships
   */
  public function setGroupMemberships($groupMemberships)
  {
    $this->groupMemberships = $groupMemberships;
  }
  /**
   * @return GroupMembership[]
   */
  public function getGroupMemberships()
  {
    return $this->groupMemberships;
  }
  /**
   * @param IamBinding[] $iamBindings
   */
  public function setIamBindings($iamBindings)
  {
    $this->iamBindings = $iamBindings;
  }
  /**
   * @return IamBinding[]
   */
  public function getIamBindings()
  {
    return $this->iamBindings;
  }
  /**
   * @param Indicator $indicator
   */
  public function setIndicator(Indicator $indicator)
  {
    $this->indicator = $indicator;
  }
  /**
   * @return Indicator
   */
  public function getIndicator()
  {
    return $this->indicator;
  }
  /**
   * @param IpRules $ipRules
   */
  public function setIpRules(IpRules $ipRules)
  {
    $this->ipRules = $ipRules;
  }
  /**
   * @return IpRules
   */
  public function getIpRules()
  {
    return $this->ipRules;
  }
  /**
   * @param Job $job
   */
  public function setJob(Job $job)
  {
    $this->job = $job;
  }
  /**
   * @return Job
   */
  public function getJob()
  {
    return $this->job;
  }
  /**
   * @param KernelRootkit $kernelRootkit
   */
  public function setKernelRootkit(KernelRootkit $kernelRootkit)
  {
    $this->kernelRootkit = $kernelRootkit;
  }
  /**
   * @return KernelRootkit
   */
  public function getKernelRootkit()
  {
    return $this->kernelRootkit;
  }
  /**
   * @param Kubernetes $kubernetes
   */
  public function setKubernetes(Kubernetes $kubernetes)
  {
    $this->kubernetes = $kubernetes;
  }
  /**
   * @return Kubernetes
   */
  public function getKubernetes()
  {
    return $this->kubernetes;
  }
  /**
   * @param LoadBalancer[] $loadBalancers
   */
  public function setLoadBalancers($loadBalancers)
  {
    $this->loadBalancers = $loadBalancers;
  }
  /**
   * @return LoadBalancer[]
   */
  public function getLoadBalancers()
  {
    return $this->loadBalancers;
  }
  /**
   * @param LogEntry[] $logEntries
   */
  public function setLogEntries($logEntries)
  {
    $this->logEntries = $logEntries;
  }
  /**
   * @return LogEntry[]
   */
  public function getLogEntries()
  {
    return $this->logEntries;
  }
  /**
   * @param MitreAttack $mitreAttack
   */
  public function setMitreAttack(MitreAttack $mitreAttack)
  {
    $this->mitreAttack = $mitreAttack;
  }
  /**
   * @return MitreAttack
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
   * @param MuteInfo $muteInfo
   */
  public function setMuteInfo(MuteInfo $muteInfo)
  {
    $this->muteInfo = $muteInfo;
  }
  /**
   * @return MuteInfo
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
   * @param Network[] $networks
   */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /**
   * @return Network[]
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
   * @param Notebook $notebook
   */
  public function setNotebook(Notebook $notebook)
  {
    $this->notebook = $notebook;
  }
  /**
   * @return Notebook
   */
  public function getNotebook()
  {
    return $this->notebook;
  }
  /**
   * @param OrgPolicy[] $orgPolicies
   */
  public function setOrgPolicies($orgPolicies)
  {
    $this->orgPolicies = $orgPolicies;
  }
  /**
   * @return OrgPolicy[]
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
   * @param PolicyViolationSummary $policyViolationSummary
   */
  public function setPolicyViolationSummary(PolicyViolationSummary $policyViolationSummary)
  {
    $this->policyViolationSummary = $policyViolationSummary;
  }
  /**
   * @return PolicyViolationSummary
   */
  public function getPolicyViolationSummary()
  {
    return $this->policyViolationSummary;
  }
  /**
   * @param Process[] $processes
   */
  public function setProcesses($processes)
  {
    $this->processes = $processes;
  }
  /**
   * @return Process[]
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
   * @param Secret $secret
   */
  public function setSecret(Secret $secret)
  {
    $this->secret = $secret;
  }
  /**
   * @return Secret
   */
  public function getSecret()
  {
    return $this->secret;
  }
  /**
   * @param SecurityMarks $securityMarks
   */
  public function setSecurityMarks(SecurityMarks $securityMarks)
  {
    $this->securityMarks = $securityMarks;
  }
  /**
   * @return SecurityMarks
   */
  public function getSecurityMarks()
  {
    return $this->securityMarks;
  }
  /**
   * @param SecurityPosture $securityPosture
   */
  public function setSecurityPosture(SecurityPosture $securityPosture)
  {
    $this->securityPosture = $securityPosture;
  }
  /**
   * @return SecurityPosture
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
   * @param ToxicCombination $toxicCombination
   */
  public function setToxicCombination(ToxicCombination $toxicCombination)
  {
    $this->toxicCombination = $toxicCombination;
  }
  /**
   * @return ToxicCombination
   */
  public function getToxicCombination()
  {
    return $this->toxicCombination;
  }
  /**
   * @param VertexAi $vertexAi
   */
  public function setVertexAi(VertexAi $vertexAi)
  {
    $this->vertexAi = $vertexAi;
  }
  /**
   * @return VertexAi
   */
  public function getVertexAi()
  {
    return $this->vertexAi;
  }
  /**
   * @param Vulnerability $vulnerability
   */
  public function setVulnerability(Vulnerability $vulnerability)
  {
    $this->vulnerability = $vulnerability;
  }
  /**
   * @return Vulnerability
   */
  public function getVulnerability()
  {
    return $this->vulnerability;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Finding::class, 'Google_Service_SecurityCommandCenter_Finding');
