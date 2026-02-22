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

class AspectRule extends \Google\Model
{
  /**
   * Required. Rules of the configuration. The underlying schema should be
   * defined by Aspect owners as protobuf message under
   * `google/api/configaspects/proto`.
   *
   * @var array[]
   */
  public $config;
  /**
   * Required. Selects the RPC methods to which this rule applies. Refer to
   * selector for syntax details.
   *
   * @var string
   */
  public $selector;

  /**
   * Required. Rules of the configuration. The underlying schema should be
   * defined by Aspect owners as protobuf message under
   * `google/api/configaspects/proto`.
   *
   * @param array[] $config
   */
  public function setConfig($config)
  {
    $this->config = $config;
  }
  /**
   * @return array[]
   */
  public function getConfig()
  {
    return $this->config;
  }
  /**
   * Required. Selects the RPC methods to which this rule applies. Refer to
   * selector for syntax details.
   *
   * @param string $selector
   */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /**
   * @return string
   */
  public function getSelector()
  {
    return $this->selector;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AspectRule::class, 'Google_Service_ServiceNetworking_AspectRule');
