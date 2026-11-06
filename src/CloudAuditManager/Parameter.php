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

class Parameter extends \Google\Model
{
  /**
   * Required. The name or key of the parameter.
   *
   * @var string
   */
  public $name;
  protected $parameterValueType = ParamValue::class;
  protected $parameterValueDataType = '';

  /**
   * Required. The name or key of the parameter.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. The value of the parameter.
   *
   * @param ParamValue $parameterValue
   */
  public function setParameterValue(ParamValue $parameterValue)
  {
    $this->parameterValue = $parameterValue;
  }
  /**
   * @return ParamValue
   */
  public function getParameterValue()
  {
    return $this->parameterValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Parameter::class, 'Google_Service_CloudAuditManager_Parameter');
