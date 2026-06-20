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

class DatabaseResourceGroup extends \Google\Collection
{
  protected $collection_key = 'signalGroups';
  protected $rootResourcesType = DatabaseResource::class;
  protected $rootResourcesDataType = 'array';
  protected $signalGroupsType = IssueCount::class;
  protected $signalGroupsDataType = 'array';

  /**
   * A database resource that serves as a root of the group of database
   * resources. It is repeated just in case we have the concept of multiple
   * roots in the future, however, it will only be populated with a single value
   * for now.
   *
   * @param DatabaseResource[] $rootResources
   */
  public function setRootResources($rootResources)
  {
    $this->rootResources = $rootResources;
  }
  /**
   * @return DatabaseResource[]
   */
  public function getRootResources()
  {
    return $this->rootResources;
  }
  /**
   * The filtered signal groups and the count of issues associated with the
   * resources that have been filtered in.
   *
   * @param IssueCount[] $signalGroups
   */
  public function setSignalGroups($signalGroups)
  {
    $this->signalGroups = $signalGroups;
  }
  /**
   * @return IssueCount[]
   */
  public function getSignalGroups()
  {
    return $this->signalGroups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseResourceGroup::class, 'Google_Service_DatabaseCenter_DatabaseResourceGroup');
