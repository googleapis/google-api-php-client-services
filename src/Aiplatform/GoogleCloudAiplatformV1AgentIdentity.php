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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1AgentIdentity extends \Google\Model
{
  /**
   * Optional. The email address representing the agent's principal identity.
   * For Google Workspace agents, the email should be on a verified customer
   * domain.
   *
   * @var string
   */
  public $email;
  /**
   * Output only. The agent's own obfuscated Gaia id. Set only for an A2
   * (CoWorker) agent, which is the only kind that has a first-class Gaia
   * account of its own. An A1 (Personal) agent has no `AgentIdentity` at all:
   * it acts on behalf of its owner, so the identity it runs as is
   * `Agent.owner`, and there is no separate Gaia account to name. Populated
   * asynchronously once the agent identity is provisioned, so it may be absent
   * from the `CreateAgent` LRO response and present on `GetAgent`/`ListAgents`.
   *
   * @var string
   */
  public $gaiaId;
  protected $tenantType = GoogleCloudAiplatformV1Tenant::class;
  protected $tenantDataType = '';

  /**
   * Optional. The email address representing the agent's principal identity.
   * For Google Workspace agents, the email should be on a verified customer
   * domain.
   *
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }
  /**
   * Output only. The agent's own obfuscated Gaia id. Set only for an A2
   * (CoWorker) agent, which is the only kind that has a first-class Gaia
   * account of its own. An A1 (Personal) agent has no `AgentIdentity` at all:
   * it acts on behalf of its owner, so the identity it runs as is
   * `Agent.owner`, and there is no separate Gaia account to name. Populated
   * asynchronously once the agent identity is provisioned, so it may be absent
   * from the `CreateAgent` LRO response and present on `GetAgent`/`ListAgents`.
   *
   * @param string $gaiaId
   */
  public function setGaiaId($gaiaId)
  {
    $this->gaiaId = $gaiaId;
  }
  /**
   * @return string
   */
  public function getGaiaId()
  {
    return $this->gaiaId;
  }
  /**
   * Optional. The tenant / customer context under which this agent runs. For
   * Google Workspace , this is the obfuscated Customer ID (e.g. "C0123abcd").
   *
   * @param GoogleCloudAiplatformV1Tenant $tenant
   */
  public function setTenant(GoogleCloudAiplatformV1Tenant $tenant)
  {
    $this->tenant = $tenant;
  }
  /**
   * @return GoogleCloudAiplatformV1Tenant
   */
  public function getTenant()
  {
    return $this->tenant;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentIdentity::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentIdentity');
