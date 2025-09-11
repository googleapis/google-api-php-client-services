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

namespace Google\Service\ParameterManager;

class RenderParameterVersionResponse extends \Google\Model
{
  /**
   * @var string
   */
  public $parameterVersion;
  protected $payloadType = ParameterVersionPayload::class;
  protected $payloadDataType = '';
  /**
   * @var string
   */
  public $renderedPayload;

  /**
   * @param string
   */
  public function setParameterVersion($parameterVersion)
  {
    $this->parameterVersion = $parameterVersion;
  }
  /**
   * @return string
   */
  public function getParameterVersion()
  {
    return $this->parameterVersion;
  }
  /**
   * @param ParameterVersionPayload
   */
  public function setPayload(ParameterVersionPayload $payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return ParameterVersionPayload
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * @param string
   */
  public function setRenderedPayload($renderedPayload)
  {
    $this->renderedPayload = $renderedPayload;
  }
  /**
   * @return string
   */
  public function getRenderedPayload()
  {
    return $this->renderedPayload;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RenderParameterVersionResponse::class, 'Google_Service_ParameterManager_RenderParameterVersionResponse');
