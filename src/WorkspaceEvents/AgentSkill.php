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

namespace Google\Service\WorkspaceEvents;

class AgentSkill extends \Google\Collection
{
  protected $collection_key = 'tags';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string[]
   */
  public $examples;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string[]
   */
  public $inputModes;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string[]
   */
  public $outputModes;
  protected $securityType = Security::class;
  protected $securityDataType = 'array';
  /**
   * @var string[]
   */
  public $tags;

  /**
   * @param string
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
   * @param string[]
   */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /**
   * @return string[]
   */
  public function getExamples()
  {
    return $this->examples;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string[]
   */
  public function setInputModes($inputModes)
  {
    $this->inputModes = $inputModes;
  }
  /**
   * @return string[]
   */
  public function getInputModes()
  {
    return $this->inputModes;
  }
  /**
   * @param string
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
   * @param string[]
   */
  public function setOutputModes($outputModes)
  {
    $this->outputModes = $outputModes;
  }
  /**
   * @return string[]
   */
  public function getOutputModes()
  {
    return $this->outputModes;
  }
  /**
   * @param Security[]
   */
  public function setSecurity($security)
  {
    $this->security = $security;
  }
  /**
   * @return Security[]
   */
  public function getSecurity()
  {
    return $this->security;
  }
  /**
   * @param string[]
   */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /**
   * @return string[]
   */
  public function getTags()
  {
    return $this->tags;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentSkill::class, 'Google_Service_WorkspaceEvents_AgentSkill');
