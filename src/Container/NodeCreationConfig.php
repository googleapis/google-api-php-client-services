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

namespace Google\Service\Container;

class NodeCreationConfig extends \Google\Model
{
  /**
   * When no user input is provided.
   */
  public const NODE_CREATION_MODE_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * Kubelet registers itself.
   */
  public const NODE_CREATION_MODE_VIA_KUBELET = 'VIA_KUBELET';
  /**
   * gcp-controller-manager automatically creates the node object after CSR
   * approval.
   */
  public const NODE_CREATION_MODE_VIA_CONTROL_PLANE = 'VIA_CONTROL_PLANE';
  /**
   * The mode of node creation.
   *
   * @var string
   */
  public $nodeCreationMode;

  /**
   * The mode of node creation.
   *
   * Accepted values: MODE_UNSPECIFIED, VIA_KUBELET, VIA_CONTROL_PLANE
   *
   * @param self::NODE_CREATION_MODE_* $nodeCreationMode
   */
  public function setNodeCreationMode($nodeCreationMode)
  {
    $this->nodeCreationMode = $nodeCreationMode;
  }
  /**
   * @return self::NODE_CREATION_MODE_*
   */
  public function getNodeCreationMode()
  {
    return $this->nodeCreationMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NodeCreationConfig::class, 'Google_Service_Container_NodeCreationConfig');
