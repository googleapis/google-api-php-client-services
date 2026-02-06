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

namespace Google\Service\CustomerEngagementSuite;

class AppSnapshot extends \Google\Collection
{
  protected $collection_key = 'toolsets';
  protected $agentsType = Agent::class;
  protected $agentsDataType = 'array';
  protected $appType = App::class;
  protected $appDataType = '';
  protected $examplesType = Example::class;
  protected $examplesDataType = 'array';
  protected $guardrailsType = Guardrail::class;
  protected $guardrailsDataType = 'array';
  protected $toolsType = Tool::class;
  protected $toolsDataType = 'array';
  protected $toolsetsType = Toolset::class;
  protected $toolsetsDataType = 'array';

  /**
   * Optional. List of agents in the app.
   *
   * @param Agent[] $agents
   */
  public function setAgents($agents)
  {
    $this->agents = $agents;
  }
  /**
   * @return Agent[]
   */
  public function getAgents()
  {
    return $this->agents;
  }
  /**
   * Optional. The basic settings for the app.
   *
   * @param App $app
   */
  public function setApp(App $app)
  {
    $this->app = $app;
  }
  /**
   * @return App
   */
  public function getApp()
  {
    return $this->app;
  }
  /**
   * Optional. List of examples in the app.
   *
   * @param Example[] $examples
   */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /**
   * @return Example[]
   */
  public function getExamples()
  {
    return $this->examples;
  }
  /**
   * Optional. List of guardrails in the app.
   *
   * @param Guardrail[] $guardrails
   */
  public function setGuardrails($guardrails)
  {
    $this->guardrails = $guardrails;
  }
  /**
   * @return Guardrail[]
   */
  public function getGuardrails()
  {
    return $this->guardrails;
  }
  /**
   * Optional. List of tools in the app.
   *
   * @param Tool[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return Tool[]
   */
  public function getTools()
  {
    return $this->tools;
  }
  /**
   * Optional. List of toolsets in the app.
   *
   * @param Toolset[] $toolsets
   */
  public function setToolsets($toolsets)
  {
    $this->toolsets = $toolsets;
  }
  /**
   * @return Toolset[]
   */
  public function getToolsets()
  {
    return $this->toolsets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppSnapshot::class, 'Google_Service_CustomerEngagementSuite_AppSnapshot');
