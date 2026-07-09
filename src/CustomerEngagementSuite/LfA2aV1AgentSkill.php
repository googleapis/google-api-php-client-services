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

class LfA2aV1AgentSkill extends \Google\Collection
{
  protected $collection_key = 'tags';
  /**
   * Required. A detailed description of the skill.
   *
   * @var string
   */
  public $description;
  /**
   * Example prompts or scenarios that this skill can handle.
   *
   * @var string[]
   */
  public $examples;
  /**
   * Required. A unique identifier for the agent's skill.
   *
   * @var string
   */
  public $id;
  /**
   * The set of supported input media types for this skill, overriding the
   * agent's defaults.
   *
   * @var string[]
   */
  public $inputModes;
  /**
   * Required. A human-readable name for the skill.
   *
   * @var string
   */
  public $name;
  /**
   * The set of supported output media types for this skill, overriding the
   * agent's defaults.
   *
   * @var string[]
   */
  public $outputModes;
  protected $securityRequirementsType = LfA2aV1SecurityRequirement::class;
  protected $securityRequirementsDataType = 'array';
  /**
   * Required. A set of keywords describing the skill's capabilities.
   *
   * @var string[]
   */
  public $tags;

  /**
   * Required. A detailed description of the skill.
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
   * Example prompts or scenarios that this skill can handle.
   *
   * @param string[] $examples
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
   * Required. A unique identifier for the agent's skill.
   *
   * @param string $id
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
   * The set of supported input media types for this skill, overriding the
   * agent's defaults.
   *
   * @param string[] $inputModes
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
   * Required. A human-readable name for the skill.
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
   * The set of supported output media types for this skill, overriding the
   * agent's defaults.
   *
   * @param string[] $outputModes
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
   * Security schemes necessary for this skill.
   *
   * @param LfA2aV1SecurityRequirement[] $securityRequirements
   */
  public function setSecurityRequirements($securityRequirements)
  {
    $this->securityRequirements = $securityRequirements;
  }
  /**
   * @return LfA2aV1SecurityRequirement[]
   */
  public function getSecurityRequirements()
  {
    return $this->securityRequirements;
  }
  /**
   * Required. A set of keywords describing the skill's capabilities.
   *
   * @param string[] $tags
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
class_alias(LfA2aV1AgentSkill::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AgentSkill');
