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

namespace Google\Service\AgentRegistry;

class Tool extends \Google\Model
{
  protected $annotationsType = Annotations::class;
  protected $annotationsDataType = '';
  /**
   * Output only. Description of what the tool does.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Human-readable name of the tool.
   *
   * @var string
   */
  public $name;

  /**
   * Output only. Annotations associated with the tool.
   *
   * @param Annotations $annotations
   */
  public function setAnnotations(Annotations $annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return Annotations
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * Output only. Description of what the tool does.
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
   * Output only. Human-readable name of the tool.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Tool::class, 'Google_Service_AgentRegistry_Tool');
