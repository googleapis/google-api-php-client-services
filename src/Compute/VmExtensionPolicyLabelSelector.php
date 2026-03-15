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

class VmExtensionPolicyLabelSelector extends \Google\Model
{
  /**
   * Optional. A map of key-value pairs representing VM labels. VMs must have
   * all of the labels specified in this map to be selected (logical AND).
   *
   * e.g. If the `inclusion_labels` are {("key1", "value1"), ("key2",
   * "value2")}, the VM labels must contain both ("key1", "value1") and ("key2",
   * "value2") to be selected. If the VM labels are ("key1", "value1") and
   * ("something", "else"), it will not be selected.
   *
   * If the map is empty, it's considered a match.
   *
   * @var string[]
   */
  public $inclusionLabels;

  /**
   * Optional. A map of key-value pairs representing VM labels. VMs must have
   * all of the labels specified in this map to be selected (logical AND).
   *
   * e.g. If the `inclusion_labels` are {("key1", "value1"), ("key2",
   * "value2")}, the VM labels must contain both ("key1", "value1") and ("key2",
   * "value2") to be selected. If the VM labels are ("key1", "value1") and
   * ("something", "else"), it will not be selected.
   *
   * If the map is empty, it's considered a match.
   *
   * @param string[] $inclusionLabels
   */
  public function setInclusionLabels($inclusionLabels)
  {
    $this->inclusionLabels = $inclusionLabels;
  }
  /**
   * @return string[]
   */
  public function getInclusionLabels()
  {
    return $this->inclusionLabels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VmExtensionPolicyLabelSelector::class, 'Google_Service_Compute_VmExtensionPolicyLabelSelector');
