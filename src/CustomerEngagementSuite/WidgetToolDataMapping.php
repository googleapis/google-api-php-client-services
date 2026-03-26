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

class WidgetToolDataMapping extends \Google\Model
{
  /**
   * Unspecified mode.
   */
  public const MODE_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * Use the `field_mappings` map for data transformation.
   */
  public const MODE_FIELD_MAPPING = 'FIELD_MAPPING';
  /**
   * Use the `python_script` for data transformation.
   */
  public const MODE_PYTHON_SCRIPT = 'PYTHON_SCRIPT';
  /**
   * Optional. A map of widget input parameter fields to the corresponding
   * output fields of the source tool.
   *
   * @var string[]
   */
  public $fieldMappings;
  /**
   * Optional. The mode of the data mapping.
   *
   * @var string
   */
  public $mode;
  protected $pythonFunctionType = PythonFunction::class;
  protected $pythonFunctionDataType = '';
  /**
   * Deprecated: Use `python_function` instead.
   *
   * @deprecated
   * @var string
   */
  public $pythonScript;
  /**
   * Optional. The resource name of the tool that provides the data for the
   * widget (e.g., a search tool or a custom function). Format:
   * `projects/{project}/locations/{location}/agents/{agent}/tools/{tool}`
   *
   * @var string
   */
  public $sourceToolName;

  /**
   * Optional. A map of widget input parameter fields to the corresponding
   * output fields of the source tool.
   *
   * @param string[] $fieldMappings
   */
  public function setFieldMappings($fieldMappings)
  {
    $this->fieldMappings = $fieldMappings;
  }
  /**
   * @return string[]
   */
  public function getFieldMappings()
  {
    return $this->fieldMappings;
  }
  /**
   * Optional. The mode of the data mapping.
   *
   * Accepted values: MODE_UNSPECIFIED, FIELD_MAPPING, PYTHON_SCRIPT
   *
   * @param self::MODE_* $mode
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return self::MODE_*
   */
  public function getMode()
  {
    return $this->mode;
  }
  /**
   * Optional. Configuration for a Python function used to transform the source
   * tool's output into the widget's input format.
   *
   * @param PythonFunction $pythonFunction
   */
  public function setPythonFunction(PythonFunction $pythonFunction)
  {
    $this->pythonFunction = $pythonFunction;
  }
  /**
   * @return PythonFunction
   */
  public function getPythonFunction()
  {
    return $this->pythonFunction;
  }
  /**
   * Deprecated: Use `python_function` instead.
   *
   * @deprecated
   * @param string $pythonScript
   */
  public function setPythonScript($pythonScript)
  {
    $this->pythonScript = $pythonScript;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getPythonScript()
  {
    return $this->pythonScript;
  }
  /**
   * Optional. The resource name of the tool that provides the data for the
   * widget (e.g., a search tool or a custom function). Format:
   * `projects/{project}/locations/{location}/agents/{agent}/tools/{tool}`
   *
   * @param string $sourceToolName
   */
  public function setSourceToolName($sourceToolName)
  {
    $this->sourceToolName = $sourceToolName;
  }
  /**
   * @return string
   */
  public function getSourceToolName()
  {
    return $this->sourceToolName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WidgetToolDataMapping::class, 'Google_Service_CustomerEngagementSuite_WidgetToolDataMapping');
