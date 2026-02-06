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

class AppVariableDeclaration extends \Google\Model
{
  /**
   * Required. The description of the variable.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The name of the variable. The name must start with a letter or
   * underscore and contain only letters, numbers, or underscores.
   *
   * @var string
   */
  public $name;
  protected $schemaType = Schema::class;
  protected $schemaDataType = '';

  /**
   * Required. The description of the variable.
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
   * Required. The name of the variable. The name must start with a letter or
   * underscore and contain only letters, numbers, or underscores.
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
   * Required. The schema of the variable.
   *
   * @param Schema $schema
   */
  public function setSchema(Schema $schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return Schema
   */
  public function getSchema()
  {
    return $this->schema;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppVariableDeclaration::class, 'Google_Service_CustomerEngagementSuite_AppVariableDeclaration');
