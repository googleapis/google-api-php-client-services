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

namespace Google\Service\Compute;

class WireGroupEndpointInterconnect extends \Google\Collection
{
  protected $collection_key = 'vlanTags';
  /**
   * @var string
   */
  public $interconnect;
  /**
   * @var int[]
   */
  public $vlanTags;

  /**
   * @param string
   */
  public function setInterconnect($interconnect)
  {
    $this->interconnect = $interconnect;
  }
  /**
   * @return string
   */
  public function getInterconnect()
  {
    return $this->interconnect;
  }
  /**
   * @param int[]
   */
  public function setVlanTags($vlanTags)
  {
    $this->vlanTags = $vlanTags;
  }
  /**
   * @return int[]
   */
  public function getVlanTags()
  {
    return $this->vlanTags;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WireGroupEndpointInterconnect::class, 'Google_Service_Compute_WireGroupEndpointInterconnect');
