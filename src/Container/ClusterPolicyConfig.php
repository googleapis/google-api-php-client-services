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

class ClusterPolicyConfig extends \Google\Model
{
  /**
   * Denotes preventing standard node pools and requiring only autopilot node
   * pools.
   *
   * @var bool
   */
  public $noStandardNodePools;
  /**
   * Denotes preventing impersonation and CSRs for GKE System users.
   *
   * @var bool
   */
  public $noSystemImpersonation;
  /**
   * Denotes that preventing creation and mutation of resources in GKE managed
   * namespaces and cluster-scoped GKE managed resources .
   *
   * @var bool
   */
  public $noSystemMutation;
  /**
   * Denotes preventing unsafe webhooks.
   *
   * @var bool
   */
  public $noUnsafeWebhooks;

  /**
   * Denotes preventing standard node pools and requiring only autopilot node
   * pools.
   *
   * @param bool $noStandardNodePools
   */
  public function setNoStandardNodePools($noStandardNodePools)
  {
    $this->noStandardNodePools = $noStandardNodePools;
  }
  /**
   * @return bool
   */
  public function getNoStandardNodePools()
  {
    return $this->noStandardNodePools;
  }
  /**
   * Denotes preventing impersonation and CSRs for GKE System users.
   *
   * @param bool $noSystemImpersonation
   */
  public function setNoSystemImpersonation($noSystemImpersonation)
  {
    $this->noSystemImpersonation = $noSystemImpersonation;
  }
  /**
   * @return bool
   */
  public function getNoSystemImpersonation()
  {
    return $this->noSystemImpersonation;
  }
  /**
   * Denotes that preventing creation and mutation of resources in GKE managed
   * namespaces and cluster-scoped GKE managed resources .
   *
   * @param bool $noSystemMutation
   */
  public function setNoSystemMutation($noSystemMutation)
  {
    $this->noSystemMutation = $noSystemMutation;
  }
  /**
   * @return bool
   */
  public function getNoSystemMutation()
  {
    return $this->noSystemMutation;
  }
  /**
   * Denotes preventing unsafe webhooks.
   *
   * @param bool $noUnsafeWebhooks
   */
  public function setNoUnsafeWebhooks($noUnsafeWebhooks)
  {
    $this->noUnsafeWebhooks = $noUnsafeWebhooks;
  }
  /**
   * @return bool
   */
  public function getNoUnsafeWebhooks()
  {
    return $this->noUnsafeWebhooks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClusterPolicyConfig::class, 'Google_Service_Container_ClusterPolicyConfig');
