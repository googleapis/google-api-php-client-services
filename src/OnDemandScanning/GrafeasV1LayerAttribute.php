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

namespace Google\Service\OnDemandScanning;

class GrafeasV1LayerAttribute extends \Google\Model
{
  /**
   * The name of the plugin that generated this attribute.
   *
   * @var string
   */
  public $plugin;
  /**
   * The value of the attribute, with a meaning defined by the plugin.
   *
   * @var string
   */
  public $value;

  /**
   * The name of the plugin that generated this attribute.
   *
   * @param string $plugin
   */
  public function setPlugin($plugin)
  {
    $this->plugin = $plugin;
  }
  /**
   * @return string
   */
  public function getPlugin()
  {
    return $this->plugin;
  }
  /**
   * The value of the attribute, with a meaning defined by the plugin.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GrafeasV1LayerAttribute::class, 'Google_Service_OnDemandScanning_GrafeasV1LayerAttribute');
