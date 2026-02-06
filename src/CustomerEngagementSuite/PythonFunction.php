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

class PythonFunction extends \Google\Model
{
  /**
   * Output only. The description of the Python function, parsed from the python
   * code's docstring.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The name of the Python function to execute. Must match a Python
   * function name defined in the python code. Case sensitive. If the name is
   * not provided, the first function defined in the python code will be used.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The Python code to execute for the tool.
   *
   * @var string
   */
  public $pythonCode;

  /**
   * Output only. The description of the Python function, parsed from the python
   * code's docstring.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. The name of the Python function to execute. Must match a Python
   * function name defined in the python code. Case sensitive. If the name is
   * not provided, the first function defined in the python code will be used.
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
   * Optional. The Python code to execute for the tool.
   *
   * @param string $pythonCode
   */
  public function setPythonCode($pythonCode)
  {
    $this->pythonCode = $pythonCode;
  }
  /**
   * @return string
   */
  public function getPythonCode()
  {
    return $this->pythonCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PythonFunction::class, 'Google_Service_CustomerEngagementSuite_PythonFunction');
