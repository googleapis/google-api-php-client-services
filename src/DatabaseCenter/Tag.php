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

namespace Google\Service\DatabaseCenter;

class Tag extends \Google\Model
{
  /**
   * Indicates the inheritance status of a tag value attached to the given
   * resource. If the tag value is inherited from one of the resource's
   * ancestors, inherited will be true. If false, then the tag value is directly
   * attached to the resource.
   *
   * @var bool
   */
  public $inherited;
  /**
   * @var string
   */
  public $key;
  /**
   * The source of the tag. According to https://cloud.google.com/resource-
   * manager/docs/tags/tags-overview#tags_and_labels, tags can be created only
   * at the project or organization level. Tags can be inherited from different
   * project as well not just the current project where the database resource is
   * present. Format: "projects/{PROJECT_ID}", "projects/{PROJECT_NUMBER}",
   * "organizations/{ORGANIZATION_ID}"
   *
   * @var string
   */
  public $source;
  /**
   * The value part of the tag.
   *
   * @var string
   */
  public $value;

  /**
   * Indicates the inheritance status of a tag value attached to the given
   * resource. If the tag value is inherited from one of the resource's
   * ancestors, inherited will be true. If false, then the tag value is directly
   * attached to the resource.
   *
   * @param bool $inherited
   */
  public function setInherited($inherited)
  {
    $this->inherited = $inherited;
  }
  /**
   * @return bool
   */
  public function getInherited()
  {
    return $this->inherited;
  }
  /**
   * @param string $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * The source of the tag. According to https://cloud.google.com/resource-
   * manager/docs/tags/tags-overview#tags_and_labels, tags can be created only
   * at the project or organization level. Tags can be inherited from different
   * project as well not just the current project where the database resource is
   * present. Format: "projects/{PROJECT_ID}", "projects/{PROJECT_NUMBER}",
   * "organizations/{ORGANIZATION_ID}"
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * The value part of the tag.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Tag::class, 'Google_Service_DatabaseCenter_Tag');
