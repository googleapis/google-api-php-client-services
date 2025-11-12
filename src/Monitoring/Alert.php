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

namespace Google\Service\Monitoring;

class Alert extends \Google\Model
{
  /**
   * @var string
   */
  public $closeTime;
  protected $logType = LogMetadata::class;
  protected $logDataType = '';
  protected $metadataType = MonitoredResourceMetadata::class;
  protected $metadataDataType = '';
  protected $metricType = Metric::class;
  protected $metricDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $openTime;
  protected $policyType = PolicySnapshot::class;
  protected $policyDataType = '';
  protected $resourceType = MonitoredResource::class;
  protected $resourceDataType = '';
  /**
   * @var string
   */
  public $state;

  /**
   * @param string
   */
  public function setCloseTime($closeTime)
  {
    $this->closeTime = $closeTime;
  }
  /**
   * @return string
   */
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  /**
   * @param LogMetadata
   */
  public function setLog(LogMetadata $log)
  {
    $this->log = $log;
  }
  /**
   * @return LogMetadata
   */
  public function getLog()
  {
    return $this->log;
  }
  /**
   * @param MonitoredResourceMetadata
   */
  public function setMetadata(MonitoredResourceMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return MonitoredResourceMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param Metric
   */
  public function setMetric(Metric $metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return Metric
   */
  public function getMetric()
  {
    return $this->metric;
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
  public function setOpenTime($openTime)
  {
    $this->openTime = $openTime;
  }
  /**
   * @return string
   */
  public function getOpenTime()
  {
    return $this->openTime;
  }
  /**
   * @param PolicySnapshot
   */
  public function setPolicy(PolicySnapshot $policy)
  {
    $this->policy = $policy;
  }
  /**
   * @return PolicySnapshot
   */
  public function getPolicy()
  {
    return $this->policy;
  }
  /**
   * @param MonitoredResource
   */
  public function setResource(MonitoredResource $resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return MonitoredResource
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Alert::class, 'Google_Service_Monitoring_Alert');
