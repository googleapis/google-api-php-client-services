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

namespace Google\Service\HomeGraphService;

class QueryRequest extends \Google\Collection
{
  /**
   * Default value. Equivalent to SMART_HOME_TRAIT_ONLY.
   */
  public const DEVICE_VIEW_DEVICE_VIEW_UNSPECIFIED = 'DEVICE_VIEW_UNSPECIFIED';
  /**
   * Return only standard Smart Home traits in the `devices` map.
   */
  public const DEVICE_VIEW_SMART_HOME_TRAIT_ONLY = 'SMART_HOME_TRAIT_ONLY';
  /**
   * Return only Unified Device Data Model (UDDM) traits in the
   * `home_trait_payload` map.
   */
  public const DEVICE_VIEW_HOME_TRAIT_ONLY = 'HOME_TRAIT_ONLY';
  /**
   * Return both standard Smart Home traits and UDDM traits.
   */
  public const DEVICE_VIEW_HOME_TRAIT_AND_SMART_HOME_TRAIT = 'HOME_TRAIT_AND_SMART_HOME_TRAIT';
  protected $collection_key = 'inputs';
  /**
   * Required. Third-party user ID.
   *
   * @var string
   */
  public $agentUserId;
  /**
   * Optional. Specifies the type of device data to be returned in the response.
   * This allows callers to request traditional Smart Home traits, Unified
   * Device Data Model (UDDM) traits, or both. If unspecified, defaults to
   * SMART_HOME_TRAIT_ONLY.
   *
   * @var string
   */
  public $deviceView;
  /**
   * Optional. If true, the response will include device metadata in the
   * device_metadata field.
   *
   * @var bool
   */
  public $includeDeviceMetadata;
  protected $inputsType = QueryRequestInput::class;
  protected $inputsDataType = 'array';
  /**
   * Request ID used for debugging.
   *
   * @var string
   */
  public $requestId;

  /**
   * Required. Third-party user ID.
   *
   * @param string $agentUserId
   */
  public function setAgentUserId($agentUserId)
  {
    $this->agentUserId = $agentUserId;
  }
  /**
   * @return string
   */
  public function getAgentUserId()
  {
    return $this->agentUserId;
  }
  /**
   * Optional. Specifies the type of device data to be returned in the response.
   * This allows callers to request traditional Smart Home traits, Unified
   * Device Data Model (UDDM) traits, or both. If unspecified, defaults to
   * SMART_HOME_TRAIT_ONLY.
   *
   * Accepted values: DEVICE_VIEW_UNSPECIFIED, SMART_HOME_TRAIT_ONLY,
   * HOME_TRAIT_ONLY, HOME_TRAIT_AND_SMART_HOME_TRAIT
   *
   * @param self::DEVICE_VIEW_* $deviceView
   */
  public function setDeviceView($deviceView)
  {
    $this->deviceView = $deviceView;
  }
  /**
   * @return self::DEVICE_VIEW_*
   */
  public function getDeviceView()
  {
    return $this->deviceView;
  }
  /**
   * Optional. If true, the response will include device metadata in the
   * device_metadata field.
   *
   * @param bool $includeDeviceMetadata
   */
  public function setIncludeDeviceMetadata($includeDeviceMetadata)
  {
    $this->includeDeviceMetadata = $includeDeviceMetadata;
  }
  /**
   * @return bool
   */
  public function getIncludeDeviceMetadata()
  {
    return $this->includeDeviceMetadata;
  }
  /**
   * Required. Inputs containing third-party device IDs for which to get the
   * device states.
   *
   * @param QueryRequestInput[] $inputs
   */
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  /**
   * @return QueryRequestInput[]
   */
  public function getInputs()
  {
    return $this->inputs;
  }
  /**
   * Request ID used for debugging.
   *
   * @param string $requestId
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryRequest::class, 'Google_Service_HomeGraphService_QueryRequest');
