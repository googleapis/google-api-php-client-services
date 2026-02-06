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

class Changelog extends \Google\Collection
{
  protected $collection_key = 'dependentResources';
  /**
   * Output only. The action that was performed on the resource.
   *
   * @var string
   */
  public $action;
  /**
   * Output only. Email address of the change author.
   *
   * @var string
   */
  public $author;
  /**
   * Output only. The time when the change was made.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The dependent resources that were changed.
   *
   * @var array[]
   */
  public $dependentResources;
  /**
   * Output only. Description of the change. which typically captures the
   * changed fields in the resource.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Display name of the change. It typically should be the display
   * name of the resource that was changed.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. The unique identifier of the changelog. Format:
   * `projects/{project}/locations/{location}/apps/{app}/changelogs/{changelog}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The new resource after the change.
   *
   * @var array[]
   */
  public $newResource;
  /**
   * Output only. The original resource before the change.
   *
   * @var array[]
   */
  public $originalResource;
  /**
   * Output only. The resource that was changed.
   *
   * @var string
   */
  public $resource;
  /**
   * Output only. The type of the resource that was changed.
   *
   * @var string
   */
  public $resourceType;
  /**
   * Output only. The monotonically increasing sequence number of the changelog.
   *
   * @var string
   */
  public $sequenceNumber;

  /**
   * Output only. The action that was performed on the resource.
   *
   * @param string $action
   */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /**
   * @return string
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Output only. Email address of the change author.
   *
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * Output only. The time when the change was made.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. The dependent resources that were changed.
   *
   * @param array[] $dependentResources
   */
  public function setDependentResources($dependentResources)
  {
    $this->dependentResources = $dependentResources;
  }
  /**
   * @return array[]
   */
  public function getDependentResources()
  {
    return $this->dependentResources;
  }
  /**
   * Output only. Description of the change. which typically captures the
   * changed fields in the resource.
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
   * Output only. Display name of the change. It typically should be the display
   * name of the resource that was changed.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Identifier. The unique identifier of the changelog. Format:
   * `projects/{project}/locations/{location}/apps/{app}/changelogs/{changelog}`
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
   * Output only. The new resource after the change.
   *
   * @param array[] $newResource
   */
  public function setNewResource($newResource)
  {
    $this->newResource = $newResource;
  }
  /**
   * @return array[]
   */
  public function getNewResource()
  {
    return $this->newResource;
  }
  /**
   * Output only. The original resource before the change.
   *
   * @param array[] $originalResource
   */
  public function setOriginalResource($originalResource)
  {
    $this->originalResource = $originalResource;
  }
  /**
   * @return array[]
   */
  public function getOriginalResource()
  {
    return $this->originalResource;
  }
  /**
   * Output only. The resource that was changed.
   *
   * @param string $resource
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * Output only. The type of the resource that was changed.
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Output only. The monotonically increasing sequence number of the changelog.
   *
   * @param string $sequenceNumber
   */
  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }
  /**
   * @return string
   */
  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Changelog::class, 'Google_Service_CustomerEngagementSuite_Changelog');
