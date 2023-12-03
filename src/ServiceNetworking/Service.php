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

namespace Google\Service\ServiceNetworking;

class Service extends \Google\Collection
{
  protected $collection_key = 'types';
  /**
   * @var Api[]
   */
  public $apis;
  protected $apisType = Api::class;
  protected $apisDataType = 'array';
  /**
   * @var Authentication
   */
  public $authentication;
  protected $authenticationType = Authentication::class;
  protected $authenticationDataType = '';
  /**
   * @var Backend
   */
  public $backend;
  protected $backendType = Backend::class;
  protected $backendDataType = '';
  /**
   * @var Billing
   */
  public $billing;
  protected $billingType = Billing::class;
  protected $billingDataType = '';
  /**
   * @var string
   */
  public $configVersion;
  /**
   * @var Context
   */
  public $context;
  protected $contextType = Context::class;
  protected $contextDataType = '';
  /**
   * @var Control
   */
  public $control;
  protected $controlType = Control::class;
  protected $controlDataType = '';
  /**
   * @var CustomError
   */
  public $customError;
  protected $customErrorType = CustomError::class;
  protected $customErrorDataType = '';
  /**
   * @var Documentation
   */
  public $documentation;
  protected $documentationType = Documentation::class;
  protected $documentationDataType = '';
  /**
   * @var Endpoint[]
   */
  public $endpoints;
  protected $endpointsType = Endpoint::class;
  protected $endpointsDataType = 'array';
  /**
   * @var Enum[]
   */
  public $enums;
  protected $enumsType = Enum::class;
  protected $enumsDataType = 'array';
  /**
   * @var Http
   */
  public $http;
  protected $httpType = Http::class;
  protected $httpDataType = '';
  /**
   * @var string
   */
  public $id;
  /**
   * @var Logging
   */
  public $logging;
  protected $loggingType = Logging::class;
  protected $loggingDataType = '';
  /**
   * @var LogDescriptor[]
   */
  public $logs;
  protected $logsType = LogDescriptor::class;
  protected $logsDataType = 'array';
  /**
   * @var MetricDescriptor[]
   */
  public $metrics;
  protected $metricsType = MetricDescriptor::class;
  protected $metricsDataType = 'array';
  /**
   * @var MonitoredResourceDescriptor[]
   */
  public $monitoredResources;
  protected $monitoredResourcesType = MonitoredResourceDescriptor::class;
  protected $monitoredResourcesDataType = 'array';
  /**
   * @var Monitoring
   */
  public $monitoring;
  protected $monitoringType = Monitoring::class;
  protected $monitoringDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $producerProjectId;
  /**
   * @var Publishing
   */
  public $publishing;
  protected $publishingType = Publishing::class;
  protected $publishingDataType = '';
  /**
   * @var Quota
   */
  public $quota;
  protected $quotaType = Quota::class;
  protected $quotaDataType = '';
  /**
   * @var SourceInfo
   */
  public $sourceInfo;
  protected $sourceInfoType = SourceInfo::class;
  protected $sourceInfoDataType = '';
  /**
   * @var SystemParameters
   */
  public $systemParameters;
  protected $systemParametersType = SystemParameters::class;
  protected $systemParametersDataType = '';
  /**
   * @var Type[]
   */
  public $systemTypes;
  protected $systemTypesType = Type::class;
  protected $systemTypesDataType = 'array';
  /**
   * @var string
   */
  public $title;
  /**
   * @var Type[]
   */
  public $types;
  protected $typesType = Type::class;
  protected $typesDataType = 'array';
  /**
   * @var Usage
   */
  public $usage;
  protected $usageType = Usage::class;
  protected $usageDataType = '';

  /**
   * @param Api[]
   */
  public function setApis($apis)
  {
    $this->apis = $apis;
  }
  /**
   * @return Api[]
   */
  public function getApis()
  {
    return $this->apis;
  }
  /**
   * @param Authentication
   */
  public function setAuthentication(Authentication $authentication)
  {
    $this->authentication = $authentication;
  }
  /**
   * @return Authentication
   */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /**
   * @param Backend
   */
  public function setBackend(Backend $backend)
  {
    $this->backend = $backend;
  }
  /**
   * @return Backend
   */
  public function getBackend()
  {
    return $this->backend;
  }
  /**
   * @param Billing
   */
  public function setBilling(Billing $billing)
  {
    $this->billing = $billing;
  }
  /**
   * @return Billing
   */
  public function getBilling()
  {
    return $this->billing;
  }
  /**
   * @param string
   */
  public function setConfigVersion($configVersion)
  {
    $this->configVersion = $configVersion;
  }
  /**
   * @return string
   */
  public function getConfigVersion()
  {
    return $this->configVersion;
  }
  /**
   * @param Context
   */
  public function setContext(Context $context)
  {
    $this->context = $context;
  }
  /**
   * @return Context
   */
  public function getContext()
  {
    return $this->context;
  }
  /**
   * @param Control
   */
  public function setControl(Control $control)
  {
    $this->control = $control;
  }
  /**
   * @return Control
   */
  public function getControl()
  {
    return $this->control;
  }
  /**
   * @param CustomError
   */
  public function setCustomError(CustomError $customError)
  {
    $this->customError = $customError;
  }
  /**
   * @return CustomError
   */
  public function getCustomError()
  {
    return $this->customError;
  }
  /**
   * @param Documentation
   */
  public function setDocumentation(Documentation $documentation)
  {
    $this->documentation = $documentation;
  }
  /**
   * @return Documentation
   */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /**
   * @param Endpoint[]
   */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /**
   * @return Endpoint[]
   */
  public function getEndpoints()
  {
    return $this->endpoints;
  }
  /**
   * @param Enum[]
   */
  public function setEnums($enums)
  {
    $this->enums = $enums;
  }
  /**
   * @return Enum[]
   */
  public function getEnums()
  {
    return $this->enums;
  }
  /**
   * @param Http
   */
  public function setHttp(Http $http)
  {
    $this->http = $http;
  }
  /**
   * @return Http
   */
  public function getHttp()
  {
    return $this->http;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param Logging
   */
  public function setLogging(Logging $logging)
  {
    $this->logging = $logging;
  }
  /**
   * @return Logging
   */
  public function getLogging()
  {
    return $this->logging;
  }
  /**
   * @param LogDescriptor[]
   */
  public function setLogs($logs)
  {
    $this->logs = $logs;
  }
  /**
   * @return LogDescriptor[]
   */
  public function getLogs()
  {
    return $this->logs;
  }
  /**
   * @param MetricDescriptor[]
   */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return MetricDescriptor[]
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * @param MonitoredResourceDescriptor[]
   */
  public function setMonitoredResources($monitoredResources)
  {
    $this->monitoredResources = $monitoredResources;
  }
  /**
   * @return MonitoredResourceDescriptor[]
   */
  public function getMonitoredResources()
  {
    return $this->monitoredResources;
  }
  /**
   * @param Monitoring
   */
  public function setMonitoring(Monitoring $monitoring)
  {
    $this->monitoring = $monitoring;
  }
  /**
   * @return Monitoring
   */
  public function getMonitoring()
  {
    return $this->monitoring;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setProducerProjectId($producerProjectId)
  {
    $this->producerProjectId = $producerProjectId;
  }
  /**
   * @return string
   */
  public function getProducerProjectId()
  {
    return $this->producerProjectId;
  }
  /**
   * @param Publishing
   */
  public function setPublishing(Publishing $publishing)
  {
    $this->publishing = $publishing;
  }
  /**
   * @return Publishing
   */
  public function getPublishing()
  {
    return $this->publishing;
  }
  /**
   * @param Quota
   */
  public function setQuota(Quota $quota)
  {
    $this->quota = $quota;
  }
  /**
   * @return Quota
   */
  public function getQuota()
  {
    return $this->quota;
  }
  /**
   * @param SourceInfo
   */
  public function setSourceInfo(SourceInfo $sourceInfo)
  {
    $this->sourceInfo = $sourceInfo;
  }
  /**
   * @return SourceInfo
   */
  public function getSourceInfo()
  {
    return $this->sourceInfo;
  }
  /**
   * @param SystemParameters
   */
  public function setSystemParameters(SystemParameters $systemParameters)
  {
    $this->systemParameters = $systemParameters;
  }
  /**
   * @return SystemParameters
   */
  public function getSystemParameters()
  {
    return $this->systemParameters;
  }
  /**
   * @param Type[]
   */
  public function setSystemTypes($systemTypes)
  {
    $this->systemTypes = $systemTypes;
  }
  /**
   * @return Type[]
   */
  public function getSystemTypes()
  {
    return $this->systemTypes;
  }
  /**
   * @param string
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * @param Type[]
   */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /**
   * @return Type[]
   */
  public function getTypes()
  {
    return $this->types;
  }
  /**
   * @param Usage
   */
  public function setUsage(Usage $usage)
  {
    $this->usage = $usage;
  }
  /**
   * @return Usage
   */
  public function getUsage()
  {
    return $this->usage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Service::class, 'Google_Service_ServiceNetworking_Service');
