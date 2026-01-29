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

namespace Google\Service\DatabaseMigrationService;

class ResourceInfo extends \Google\Model
{
  /**
   * Describes what error is encountered when accessing this resource. For
   * example, updating a cloud project may require the `writer` permission on
   * the developer console project.
   *
   * @var string
   */
  public $description;
  /**
   * The owner of the resource (optional). For example, "user:" or "project:".
   *
   * @var string
   */
  public $owner;
  /**
   * The name of the resource being accessed. For example, a shared calendar
   * name: "example.com_4fghdhgsrgh@group.calendar.google.com", if the current
   * error is google.rpc.Code.PERMISSION_DENIED.
   *
   * @var string
   */
  public $resourceName;
  /**
   * A name for the type of resource being accessed, e.g. "sql table", "cloud
   * storage bucket", "file", "Google calendar"; or the type URL of the
   * resource: e.g. "type.googleapis.com/google.pubsub.v1.Topic".
   *
   * @var string
   */
  public $resourceType;

  /**
   * Describes what error is encountered when accessing this resource. For
   * example, updating a cloud project may require the `writer` permission on
   * the developer console project.
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
   * The owner of the resource (optional). For example, "user:" or "project:".
   *
   * @param string $owner
   */
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  /**
   * @return string
   */
  public function getOwner()
  {
    return $this->owner;
  }
  /**
   * The name of the resource being accessed. For example, a shared calendar
   * name: "example.com_4fghdhgsrgh@group.calendar.google.com", if the current
   * error is google.rpc.Code.PERMISSION_DENIED.
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * A name for the type of resource being accessed, e.g. "sql table", "cloud
   * storage bucket", "file", "Google calendar"; or the type URL of the
   * resource: e.g. "type.googleapis.com/google.pubsub.v1.Topic".
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceInfo::class, 'Google_Service_DatabaseMigrationService_ResourceInfo');
