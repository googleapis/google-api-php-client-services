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

class ClientFunction extends \Google\Model
{
  /**
   * Optional. The function description.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The function name.
   *
   * @var string
   */
  public $name;
  protected $parametersType = Schema::class;
  protected $parametersDataType = '';
  protected $responseType = Schema::class;
  protected $responseDataType = '';

  /**
   * Optional. The function description.
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
   * Required. The function name.
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
   * Optional. The schema of the function parameters.
   *
   * @param Schema $parameters
   */
  public function setParameters(Schema $parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return Schema
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * Optional. The schema of the function response.
   *
   * @param Schema $response
   */
  public function setResponse(Schema $response)
  {
    $this->response = $response;
  }
  /**
   * @return Schema
   */
  public function getResponse()
  {
    return $this->response;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClientFunction::class, 'Google_Service_CustomerEngagementSuite_ClientFunction');
