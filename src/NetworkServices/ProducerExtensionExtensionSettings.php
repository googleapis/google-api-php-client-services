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

namespace Google\Service\NetworkServices;

class ProducerExtensionExtensionSettings extends \Google\Collection
{
  protected $collection_key = 'supportedEvents';
  /**
   * Optional. The `:authority` header in the request sent to the extension
   * service.
   *
   * @var string
   */
  public $authority;
  /**
   * Optional. This field is not supported.
   *
   * @var bool
   */
  public $observabilityMode;
  /**
   * Required. The URI of the Private Service Connect (PSC) attachment.
   *
   * @var string
   */
  public $service;
  /**
   * Required. The event types supported by the extension.
   *
   * @var string[]
   */
  public $supportedEvents;

  /**
   * Optional. The `:authority` header in the request sent to the extension
   * service.
   *
   * @param string $authority
   */
  public function setAuthority($authority)
  {
    $this->authority = $authority;
  }
  /**
   * @return string
   */
  public function getAuthority()
  {
    return $this->authority;
  }
  /**
   * Optional. This field is not supported.
   *
   * @param bool $observabilityMode
   */
  public function setObservabilityMode($observabilityMode)
  {
    $this->observabilityMode = $observabilityMode;
  }
  /**
   * @return bool
   */
  public function getObservabilityMode()
  {
    return $this->observabilityMode;
  }
  /**
   * Required. The URI of the Private Service Connect (PSC) attachment.
   *
   * @param string $service
   */
  public function setService($service)
  {
    $this->service = $service;
  }
  /**
   * @return string
   */
  public function getService()
  {
    return $this->service;
  }
  /**
   * Required. The event types supported by the extension.
   *
   * @param string[] $supportedEvents
   */
  public function setSupportedEvents($supportedEvents)
  {
    $this->supportedEvents = $supportedEvents;
  }
  /**
   * @return string[]
   */
  public function getSupportedEvents()
  {
    return $this->supportedEvents;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProducerExtensionExtensionSettings::class, 'Google_Service_NetworkServices_ProducerExtensionExtensionSettings');
