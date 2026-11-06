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

namespace Google\Service\CloudAuditManager;

class ParameterState extends \Google\Model
{
  /**
   * Output only. Whether this parameter was overridden by the user.
   *
   * @var bool
   */
  public $isOverridden;
  protected $parameterType = Parameter::class;
  protected $parameterDataType = '';

  /**
   * Output only. Whether this parameter was overridden by the user.
   *
   * @param bool $isOverridden
   */
  public function setIsOverridden($isOverridden)
  {
    $this->isOverridden = $isOverridden;
  }
  /**
   * @return bool
   */
  public function getIsOverridden()
  {
    return $this->isOverridden;
  }
  /**
   * Output only. The parameter key and value.
   *
   * @param Parameter $parameter
   */
  public function setParameter(Parameter $parameter)
  {
    $this->parameter = $parameter;
  }
  /**
   * @return Parameter
   */
  public function getParameter()
  {
    return $this->parameter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ParameterState::class, 'Google_Service_CloudAuditManager_ParameterState');
