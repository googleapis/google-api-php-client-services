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

class Frontmatter extends \Google\Model
{
  /**
   * Optional. Environmental dependencies or companion services.
   *
   * @var string
   */
  public $compatibility;
  /**
   * Required. Functional description.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. License.
   *
   * @var string
   */
  public $license;
  /**
   * Optional. Extensible flattened map mapping custom tags, authors, and
   * version parameters.
   *
   * @var string[]
   */
  public $metadata;
  /**
   * Required. The name of the skill.
   *
   * @var string
   */
  public $name;

  /**
   * Optional. Environmental dependencies or companion services.
   *
   * @param string $compatibility
   */
  public function setCompatibility($compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /**
   * @return string
   */
  public function getCompatibility()
  {
    return $this->compatibility;
  }
  /**
   * Required. Functional description.
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
   * Optional. License.
   *
   * @param string $license
   */
  public function setLicense($license)
  {
    $this->license = $license;
  }
  /**
   * @return string
   */
  public function getLicense()
  {
    return $this->license;
  }
  /**
   * Optional. Extensible flattened map mapping custom tags, authors, and
   * version parameters.
   *
   * @param string[] $metadata
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return string[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Required. The name of the skill.
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
class_alias(Frontmatter::class, 'Google_Service_AgentRegistry_Frontmatter');
