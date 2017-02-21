<?php
/*
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

class Google_Service_Supportcases_AgentSetting extends Google_Model
{
  public $agentSettingId;
  protected $aliasInfoType = 'Google_Service_Supportcases_AliasInfo';
  protected $aliasInfoDataType = '';
  public $defaultLocale;
  public $defaultProductId;
  protected $focusInfoType = 'Google_Service_Supportcases_FocusInfo';
  protected $focusInfoDataType = '';
  public $includeReassignedInAutoassign;
  public $name;
  public $status;

  public function setAgentSettingId($agentSettingId)
  {
    $this->agentSettingId = $agentSettingId;
  }
  public function getAgentSettingId()
  {
    return $this->agentSettingId;
  }
  public function setAliasInfo(Google_Service_Supportcases_AliasInfo $aliasInfo)
  {
    $this->aliasInfo = $aliasInfo;
  }
  public function getAliasInfo()
  {
    return $this->aliasInfo;
  }
  public function setDefaultLocale($defaultLocale)
  {
    $this->defaultLocale = $defaultLocale;
  }
  public function getDefaultLocale()
  {
    return $this->defaultLocale;
  }
  public function setDefaultProductId($defaultProductId)
  {
    $this->defaultProductId = $defaultProductId;
  }
  public function getDefaultProductId()
  {
    return $this->defaultProductId;
  }
  public function setFocusInfo(Google_Service_Supportcases_FocusInfo $focusInfo)
  {
    $this->focusInfo = $focusInfo;
  }
  public function getFocusInfo()
  {
    return $this->focusInfo;
  }
  public function setIncludeReassignedInAutoassign($includeReassignedInAutoassign)
  {
    $this->includeReassignedInAutoassign = $includeReassignedInAutoassign;
  }
  public function getIncludeReassignedInAutoassign()
  {
    return $this->includeReassignedInAutoassign;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}
