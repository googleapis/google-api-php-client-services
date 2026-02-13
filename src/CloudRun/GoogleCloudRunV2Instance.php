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

class GoogleCloudRunV2Instance extends \Google\Collection
{
  /**
   * Unspecified
   */
  public const ENCRYPTION_KEY_REVOCATION_ACTION_ENCRYPTION_KEY_REVOCATION_ACTION_UNSPECIFIED = 'ENCRYPTION_KEY_REVOCATION_ACTION_UNSPECIFIED';
  /**
   * Prevents the creation of new instances.
   */
  public const ENCRYPTION_KEY_REVOCATION_ACTION_PREVENT_NEW = 'PREVENT_NEW';
  /**
   * Shuts down existing instances, and prevents creation of new ones.
   */
  public const ENCRYPTION_KEY_REVOCATION_ACTION_SHUTDOWN = 'SHUTDOWN';
  /**
   * Unspecified
   */
  public const INGRESS_INGRESS_TRAFFIC_UNSPECIFIED = 'INGRESS_TRAFFIC_UNSPECIFIED';
  /**
   * All inbound traffic is allowed.
   */
  public const INGRESS_INGRESS_TRAFFIC_ALL = 'INGRESS_TRAFFIC_ALL';
  /**
   * Only internal traffic is allowed.
   */
  public const INGRESS_INGRESS_TRAFFIC_INTERNAL_ONLY = 'INGRESS_TRAFFIC_INTERNAL_ONLY';
  /**
   * Both internal and Google Cloud Load Balancer traffic is allowed.
   */
  public const INGRESS_INGRESS_TRAFFIC_INTERNAL_LOAD_BALANCER = 'INGRESS_TRAFFIC_INTERNAL_LOAD_BALANCER';
  /**
   * No ingress traffic is allowed.
   */
  public const INGRESS_INGRESS_TRAFFIC_NONE = 'INGRESS_TRAFFIC_NONE';
  /**
   * Do not use this default value.
   */
  public const LAUNCH_STAGE_LAUNCH_STAGE_UNSPECIFIED = 'LAUNCH_STAGE_UNSPECIFIED';
  /**
   * The feature is not yet implemented. Users can not use it.
   */
  public const LAUNCH_STAGE_UNIMPLEMENTED = 'UNIMPLEMENTED';
  /**
   * Prelaunch features are hidden from users and are only visible internally.
   */
  public const LAUNCH_STAGE_PRELAUNCH = 'PRELAUNCH';
  /**
   * Early Access features are limited to a closed group of testers. To use
   * these features, you must sign up in advance and sign a Trusted Tester
   * agreement (which includes confidentiality provisions). These features may
   * be unstable, changed in backward-incompatible ways, and are not guaranteed
   * to be released.
   */
  public const LAUNCH_STAGE_EARLY_ACCESS = 'EARLY_ACCESS';
  /**
   * Alpha is a limited availability test for releases before they are cleared
   * for widespread use. By Alpha, all significant design issues are resolved
   * and we are in the process of verifying functionality. Alpha customers need
   * to apply for access, agree to applicable terms, and have their projects
   * allowlisted. Alpha releases don't have to be feature complete, no SLAs are
   * provided, and there are no technical support obligations, but they will be
   * far enough along that customers can actually use them in test environments
   * or for limited-use tests -- just like they would in normal production
   * cases.
   */
  public const LAUNCH_STAGE_ALPHA = 'ALPHA';
  /**
   * Beta is the point at which we are ready to open a release for any customer
   * to use. There are no SLA or technical support obligations in a Beta
   * release. Products will be complete from a feature perspective, but may have
   * some open outstanding issues. Beta releases are suitable for limited
   * production use cases.
   */
  public const LAUNCH_STAGE_BETA = 'BETA';
  /**
   * GA features are open to all developers and are considered stable and fully
   * qualified for production use.
   */
  public const LAUNCH_STAGE_GA = 'GA';
  /**
   * Deprecated features are scheduled to be shut down and removed. For more
   * information, see the "Deprecation Policy" section of our [Terms of
   * Service](https://cloud.google.com/terms/) and the [Google Cloud Platform
   * Subject to the Deprecation
   * Policy](https://cloud.google.com/terms/deprecation) documentation.
   */
  public const LAUNCH_STAGE_DEPRECATED = 'DEPRECATED';
  protected $collection_key = 'volumes';
  /**
   * @var string[]
   */
  public $annotations;
  protected $binaryAuthorizationType = GoogleCloudRunV2BinaryAuthorization::class;
  protected $binaryAuthorizationDataType = '';
  /**
   * Arbitrary identifier for the API client.
   *
   * @var string
   */
  public $client;
  /**
   * Arbitrary version identifier for the API client.
   *
   * @var string
   */
  public $clientVersion;
  protected $conditionsType = GoogleCloudRunV2Condition::class;
  protected $conditionsDataType = 'array';
  protected $containerStatusesType = GoogleCloudRunV2ContainerStatus::class;
  protected $containerStatusesDataType = 'array';
  protected $containersType = GoogleCloudRunV2Container::class;
  protected $containersDataType = 'array';
  /**
   * Output only. The creation time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Email address of the authenticated creator.
   *
   * @var string
   */
  public $creator;
  /**
   * Output only. The deletion time.
   *
   * @var string
   */
  public $deleteTime;
  /**
   * User-provided description of the Instance. This field currently has a
   * 512-character limit.
   *
   * @var string
   */
  public $description;
  /**
   * A reference to a customer managed encryption key (CMEK) to use to encrypt
   * this container image. For more information, go to
   * https://cloud.google.com/run/docs/securing/using-cmek
   *
   * @var string
   */
  public $encryptionKey;
  /**
   * The action to take if the encryption key is revoked.
   *
   * @var string
   */
  public $encryptionKeyRevocationAction;
  /**
   * If encryption_key_revocation_action is SHUTDOWN, the duration before
   * shutting down all instances. The minimum increment is 1 hour.
   *
   * @var string
   */
  public $encryptionKeyShutdownDuration;
  /**
   * Optional. A system-generated fingerprint for this version of the resource.
   * May be used to detect modification conflict during updates.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. For a deleted resource, the time after which it will be
   * permamently deleted.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Output only. A number that monotonically increases every time the user
   * modifies the desired state. Please note that unlike v1, this is an int64
   * value. As with most Google APIs, its JSON representation will be a `string`
   * instead of an `integer`.
   *
   * @var string
   */
  public $generation;
  /**
   * Optional. True if GPU zonal redundancy is disabled on this instance.
   *
   * @var bool
   */
  public $gpuZonalRedundancyDisabled;
  /**
   * Optional. IAP settings on the Instance.
   *
   * @var bool
   */
  public $iapEnabled;
  /**
   * Optional. Provides the ingress settings for this Instance. On output,
   * returns the currently observed ingress settings, or
   * INGRESS_TRAFFIC_UNSPECIFIED if no revision is active.
   *
   * @var string
   */
  public $ingress;
  /**
   * Optional. Disables IAM permission check for run.routes.invoke for callers
   * of this Instance. For more information, visit
   * https://cloud.google.com/run/docs/securing/managing-access#invoker_check.
   *
   * @var bool
   */
  public $invokerIamDisabled;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * Output only. Email address of the last authenticated modifier.
   *
   * @var string
   */
  public $lastModifier;
  /**
   * The launch stage as defined by [Google Cloud Platform Launch
   * Stages](https://cloud.google.com/terms/launch-stages). Cloud Run supports
   * `ALPHA`, `BETA`, and `GA`. If no value is specified, GA is assumed. Set the
   * launch stage to a preview stage on input to allow use of preview features
   * in that stage. On read (or output), describes whether the resource uses
   * preview features. For example, if ALPHA is provided as input, but only BETA
   * and GA-level features are used, this field will be BETA on output.
   *
   * @var string
   */
  public $launchStage;
  /**
   * Output only. The Google Console URI to obtain logs for the Instance.
   *
   * @var string
   */
  public $logUri;
  /**
   * The fully qualified name of this Instance. In CreateInstanceRequest, this
   * field is ignored, and instead composed from CreateInstanceRequest.parent
   * and CreateInstanceRequest.instance_id. Format:
   * projects/{project}/locations/{location}/instances/{instance_id}
   *
   * @var string
   */
  public $name;
  protected $nodeSelectorType = GoogleCloudRunV2NodeSelector::class;
  protected $nodeSelectorDataType = '';
  /**
   * Output only. The generation of this Instance currently serving traffic. See
   * comments in `reconciling` for additional information on reconciliation
   * process in Cloud Run. Please note that unlike v1, this is an int64 value.
   * As with most Google APIs, its JSON representation will be a `string`
   * instead of an `integer`.
   *
   * @var string
   */
  public $observedGeneration;
  /**
   * Output only. Returns true if the Instance is currently being acted upon by
   * the system to bring it into the desired state. When a new Instance is
   * created, or an existing one is updated, Cloud Run will asynchronously
   * perform all necessary steps to bring the Instance to the desired serving
   * state. This process is called reconciliation. While reconciliation is in
   * process, `observed_generation` will have a transient value that might
   * mismatch the intended state. Once reconciliation is over (and this field is
   * false), there are two possible outcomes: reconciliation succeeded and the
   * serving state matches the Instance, or there was an error, and
   * reconciliation failed. This state can be found in
   * `terminal_condition.state`.
   *
   * @var bool
   */
  public $reconciling;
  /**
   * Output only. Reserved for future use.
   *
   * @var bool
   */
  public $satisfiesPzs;
  /**
   * @var string
   */
  public $serviceAccount;
  protected $terminalConditionType = GoogleCloudRunV2Condition::class;
  protected $terminalConditionDataType = '';
  /**
   * Optional. Duration the instance may be active before the system will shut
   * it down.
   *
   * @var string
   */
  public $timeout;
  /**
   * Output only. Server assigned unique identifier for the trigger. The value
   * is a UUID4 string and guaranteed to remain unchanged until the resource is
   * deleted.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. The last-modified time.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. All URLs serving traffic for this Instance.
   *
   * @var string[]
   */
  public $urls;
  protected $volumesType = GoogleCloudRunV2Volume::class;
  protected $volumesDataType = 'array';
  protected $vpcAccessType = GoogleCloudRunV2VpcAccess::class;
  protected $vpcAccessDataType = '';

  /**
   * @param string[] $annotations
   */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return string[]
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * Settings for the Binary Authorization feature.
   *
   * @param GoogleCloudRunV2BinaryAuthorization $binaryAuthorization
   */
  public function setBinaryAuthorization(GoogleCloudRunV2BinaryAuthorization $binaryAuthorization)
  {
    $this->binaryAuthorization = $binaryAuthorization;
  }
  /**
   * @return GoogleCloudRunV2BinaryAuthorization
   */
  public function getBinaryAuthorization()
  {
    return $this->binaryAuthorization;
  }
  /**
   * Arbitrary identifier for the API client.
   *
   * @param string $client
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
   * Arbitrary version identifier for the API client.
   *
   * @param string $clientVersion
   */
  public function setClientVersion($clientVersion)
  {
    $this->clientVersion = $clientVersion;
  }
  /**
   * @return string
   */
  public function getClientVersion()
  {
    return $this->clientVersion;
  }
  /**
   * Output only. The Conditions of all other associated sub-resources. They
   * contain additional diagnostics information in case the Instance does not
   * reach its Serving state. See comments in `reconciling` for additional
   * information on reconciliation process in Cloud Run.
   *
   * @param GoogleCloudRunV2Condition[] $conditions
   */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /**
   * @return GoogleCloudRunV2Condition[]
   */
  public function getConditions()
  {
    return $this->conditions;
  }
  /**
   * Output only. Status information for each of the specified containers. The
   * status includes the resolved digest for specified images.
   *
   * @param GoogleCloudRunV2ContainerStatus[] $containerStatuses
   */
  public function setContainerStatuses($containerStatuses)
  {
    $this->containerStatuses = $containerStatuses;
  }
  /**
   * @return GoogleCloudRunV2ContainerStatus[]
   */
  public function getContainerStatuses()
  {
    return $this->containerStatuses;
  }
  /**
   * Required. Holds the single container that defines the unit of execution for
   * this Instance.
   *
   * @param GoogleCloudRunV2Container[] $containers
   */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /**
   * @return GoogleCloudRunV2Container[]
   */
  public function getContainers()
  {
    return $this->containers;
  }
  /**
   * Output only. The creation time.
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
   * Output only. Email address of the authenticated creator.
   *
   * @param string $creator
   */
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /**
   * @return string
   */
  public function getCreator()
  {
    return $this->creator;
  }
  /**
   * Output only. The deletion time.
   *
   * @param string $deleteTime
   */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /**
   * @return string
   */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /**
   * User-provided description of the Instance. This field currently has a
   * 512-character limit.
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
   * A reference to a customer managed encryption key (CMEK) to use to encrypt
   * this container image. For more information, go to
   * https://cloud.google.com/run/docs/securing/using-cmek
   *
   * @param string $encryptionKey
   */
  public function setEncryptionKey($encryptionKey)
  {
    $this->encryptionKey = $encryptionKey;
  }
  /**
   * @return string
   */
  public function getEncryptionKey()
  {
    return $this->encryptionKey;
  }
  /**
   * The action to take if the encryption key is revoked.
   *
   * Accepted values: ENCRYPTION_KEY_REVOCATION_ACTION_UNSPECIFIED, PREVENT_NEW,
   * SHUTDOWN
   *
   * @param self::ENCRYPTION_KEY_REVOCATION_ACTION_* $encryptionKeyRevocationAction
   */
  public function setEncryptionKeyRevocationAction($encryptionKeyRevocationAction)
  {
    $this->encryptionKeyRevocationAction = $encryptionKeyRevocationAction;
  }
  /**
   * @return self::ENCRYPTION_KEY_REVOCATION_ACTION_*
   */
  public function getEncryptionKeyRevocationAction()
  {
    return $this->encryptionKeyRevocationAction;
  }
  /**
   * If encryption_key_revocation_action is SHUTDOWN, the duration before
   * shutting down all instances. The minimum increment is 1 hour.
   *
   * @param string $encryptionKeyShutdownDuration
   */
  public function setEncryptionKeyShutdownDuration($encryptionKeyShutdownDuration)
  {
    $this->encryptionKeyShutdownDuration = $encryptionKeyShutdownDuration;
  }
  /**
   * @return string
   */
  public function getEncryptionKeyShutdownDuration()
  {
    return $this->encryptionKeyShutdownDuration;
  }
  /**
   * Optional. A system-generated fingerprint for this version of the resource.
   * May be used to detect modification conflict during updates.
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
   * Output only. For a deleted resource, the time after which it will be
   * permamently deleted.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Output only. A number that monotonically increases every time the user
   * modifies the desired state. Please note that unlike v1, this is an int64
   * value. As with most Google APIs, its JSON representation will be a `string`
   * instead of an `integer`.
   *
   * @param string $generation
   */
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /**
   * @return string
   */
  public function getGeneration()
  {
    return $this->generation;
  }
  /**
   * Optional. True if GPU zonal redundancy is disabled on this instance.
   *
   * @param bool $gpuZonalRedundancyDisabled
   */
  public function setGpuZonalRedundancyDisabled($gpuZonalRedundancyDisabled)
  {
    $this->gpuZonalRedundancyDisabled = $gpuZonalRedundancyDisabled;
  }
  /**
   * @return bool
   */
  public function getGpuZonalRedundancyDisabled()
  {
    return $this->gpuZonalRedundancyDisabled;
  }
  /**
   * Optional. IAP settings on the Instance.
   *
   * @param bool $iapEnabled
   */
  public function setIapEnabled($iapEnabled)
  {
    $this->iapEnabled = $iapEnabled;
  }
  /**
   * @return bool
   */
  public function getIapEnabled()
  {
    return $this->iapEnabled;
  }
  /**
   * Optional. Provides the ingress settings for this Instance. On output,
   * returns the currently observed ingress settings, or
   * INGRESS_TRAFFIC_UNSPECIFIED if no revision is active.
   *
   * Accepted values: INGRESS_TRAFFIC_UNSPECIFIED, INGRESS_TRAFFIC_ALL,
   * INGRESS_TRAFFIC_INTERNAL_ONLY, INGRESS_TRAFFIC_INTERNAL_LOAD_BALANCER,
   * INGRESS_TRAFFIC_NONE
   *
   * @param self::INGRESS_* $ingress
   */
  public function setIngress($ingress)
  {
    $this->ingress = $ingress;
  }
  /**
   * @return self::INGRESS_*
   */
  public function getIngress()
  {
    return $this->ingress;
  }
  /**
   * Optional. Disables IAM permission check for run.routes.invoke for callers
   * of this Instance. For more information, visit
   * https://cloud.google.com/run/docs/securing/managing-access#invoker_check.
   *
   * @param bool $invokerIamDisabled
   */
  public function setInvokerIamDisabled($invokerIamDisabled)
  {
    $this->invokerIamDisabled = $invokerIamDisabled;
  }
  /**
   * @return bool
   */
  public function getInvokerIamDisabled()
  {
    return $this->invokerIamDisabled;
  }
  /**
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
   * Output only. Email address of the last authenticated modifier.
   *
   * @param string $lastModifier
   */
  public function setLastModifier($lastModifier)
  {
    $this->lastModifier = $lastModifier;
  }
  /**
   * @return string
   */
  public function getLastModifier()
  {
    return $this->lastModifier;
  }
  /**
   * The launch stage as defined by [Google Cloud Platform Launch
   * Stages](https://cloud.google.com/terms/launch-stages). Cloud Run supports
   * `ALPHA`, `BETA`, and `GA`. If no value is specified, GA is assumed. Set the
   * launch stage to a preview stage on input to allow use of preview features
   * in that stage. On read (or output), describes whether the resource uses
   * preview features. For example, if ALPHA is provided as input, but only BETA
   * and GA-level features are used, this field will be BETA on output.
   *
   * Accepted values: LAUNCH_STAGE_UNSPECIFIED, UNIMPLEMENTED, PRELAUNCH,
   * EARLY_ACCESS, ALPHA, BETA, GA, DEPRECATED
   *
   * @param self::LAUNCH_STAGE_* $launchStage
   */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /**
   * @return self::LAUNCH_STAGE_*
   */
  public function getLaunchStage()
  {
    return $this->launchStage;
  }
  /**
   * Output only. The Google Console URI to obtain logs for the Instance.
   *
   * @param string $logUri
   */
  public function setLogUri($logUri)
  {
    $this->logUri = $logUri;
  }
  /**
   * @return string
   */
  public function getLogUri()
  {
    return $this->logUri;
  }
  /**
   * The fully qualified name of this Instance. In CreateInstanceRequest, this
   * field is ignored, and instead composed from CreateInstanceRequest.parent
   * and CreateInstanceRequest.instance_id. Format:
   * projects/{project}/locations/{location}/instances/{instance_id}
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
   * Optional. The node selector for the instance.
   *
   * @param GoogleCloudRunV2NodeSelector $nodeSelector
   */
  public function setNodeSelector(GoogleCloudRunV2NodeSelector $nodeSelector)
  {
    $this->nodeSelector = $nodeSelector;
  }
  /**
   * @return GoogleCloudRunV2NodeSelector
   */
  public function getNodeSelector()
  {
    return $this->nodeSelector;
  }
  /**
   * Output only. The generation of this Instance currently serving traffic. See
   * comments in `reconciling` for additional information on reconciliation
   * process in Cloud Run. Please note that unlike v1, this is an int64 value.
   * As with most Google APIs, its JSON representation will be a `string`
   * instead of an `integer`.
   *
   * @param string $observedGeneration
   */
  public function setObservedGeneration($observedGeneration)
  {
    $this->observedGeneration = $observedGeneration;
  }
  /**
   * @return string
   */
  public function getObservedGeneration()
  {
    return $this->observedGeneration;
  }
  /**
   * Output only. Returns true if the Instance is currently being acted upon by
   * the system to bring it into the desired state. When a new Instance is
   * created, or an existing one is updated, Cloud Run will asynchronously
   * perform all necessary steps to bring the Instance to the desired serving
   * state. This process is called reconciliation. While reconciliation is in
   * process, `observed_generation` will have a transient value that might
   * mismatch the intended state. Once reconciliation is over (and this field is
   * false), there are two possible outcomes: reconciliation succeeded and the
   * serving state matches the Instance, or there was an error, and
   * reconciliation failed. This state can be found in
   * `terminal_condition.state`.
   *
   * @param bool $reconciling
   */
  public function setReconciling($reconciling)
  {
    $this->reconciling = $reconciling;
  }
  /**
   * @return bool
   */
  public function getReconciling()
  {
    return $this->reconciling;
  }
  /**
   * Output only. Reserved for future use.
   *
   * @param bool $satisfiesPzs
   */
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  /**
   * @return bool
   */
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
  }
  /**
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
   * Output only. The Condition of this Instance, containing its readiness
   * status, and detailed error information in case it did not reach a serving
   * state. See comments in `reconciling` for additional information on
   * reconciliation process in Cloud Run.
   *
   * @param GoogleCloudRunV2Condition $terminalCondition
   */
  public function setTerminalCondition(GoogleCloudRunV2Condition $terminalCondition)
  {
    $this->terminalCondition = $terminalCondition;
  }
  /**
   * @return GoogleCloudRunV2Condition
   */
  public function getTerminalCondition()
  {
    return $this->terminalCondition;
  }
  /**
   * Optional. Duration the instance may be active before the system will shut
   * it down.
   *
   * @param string $timeout
   */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /**
   * @return string
   */
  public function getTimeout()
  {
    return $this->timeout;
  }
  /**
   * Output only. Server assigned unique identifier for the trigger. The value
   * is a UUID4 string and guaranteed to remain unchanged until the resource is
   * deleted.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. The last-modified time.
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
  /**
   * Output only. All URLs serving traffic for this Instance.
   *
   * @param string[] $urls
   */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /**
   * @return string[]
   */
  public function getUrls()
  {
    return $this->urls;
  }
  /**
   * A list of Volumes to make available to containers.
   *
   * @param GoogleCloudRunV2Volume[] $volumes
   */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /**
   * @return GoogleCloudRunV2Volume[]
   */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /**
   * Optional. VPC Access configuration to use for this Revision. For more
   * information, visit
   * https://cloud.google.com/run/docs/configuring/connecting-vpc.
   *
   * @param GoogleCloudRunV2VpcAccess $vpcAccess
   */
  public function setVpcAccess(GoogleCloudRunV2VpcAccess $vpcAccess)
  {
    $this->vpcAccess = $vpcAccess;
  }
  /**
   * @return GoogleCloudRunV2VpcAccess
   */
  public function getVpcAccess()
  {
    return $this->vpcAccess;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2Instance::class, 'Google_Service_CloudRun_GoogleCloudRunV2Instance');
