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

class Google_Service_Ghire_InterviewerConstraints extends Google_Collection
{
  protected $collection_key = 'rule';
  public $acceptableKind;
  public $deprecated;
  public $kind;
  protected $ruleType = 'Google_Service_Ghire_RuleForInterval';
  protected $ruleDataType = 'array';

  public function setAcceptableKind($acceptableKind)
  {
    $this->acceptableKind = $acceptableKind;
  }
  public function getAcceptableKind()
  {
    return $this->acceptableKind;
  }
  public function setDeprecated($deprecated)
  {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated()
  {
    return $this->deprecated;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRule($rule)
  {
    $this->rule = $rule;
  }
  public function getRule()
  {
    return $this->rule;
  }
}
