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

class GenaiVertexV1Function extends \Google\Model
{
  /**
   * A description of the function.
   *
   * @var string
   */
  public $description;
  /**
   * The name of the function.
   *
   * @var string
   */
  public $name;
  protected $parametersType = GenaiVertexV1Value::class;
  protected $parametersDataType = '';

  /**
   * A description of the function.
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
   * The name of the function.
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
   * The JSON Schema for the function's parameters. Supports a subset of JSON
   * Schema. `minLength`, `maxLength`, `minProperties`, `maxProperties`,
   * `uniqueItems`, `contains`, `minContains`, and `maxContains` are ignored and
   * not enforced.
   *
   * @param GenaiVertexV1Value $parameters
   */
  public function setParameters(GenaiVertexV1Value $parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return GenaiVertexV1Value
   */
  public function getParameters()
  {
    return $this->parameters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1Function::class, 'Google_Service_Aiplatform_GenaiVertexV1Function');
