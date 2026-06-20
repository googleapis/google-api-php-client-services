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

class Affiliation extends \Google\Collection
{
  protected $collection_key = 'lineages';
  /**
   * Optional. Full resource name
   *
   * @var string
   */
  public $fullResourceName;
  protected $lineagesType = Lineage::class;
  protected $lineagesDataType = 'array';
  /**
   * Optional. resource id of affiliated resource
   *
   * @var string
   */
  public $resourceId;

  /**
   * Optional. Full resource name
   *
   * @param string $fullResourceName
   */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /**
   * @return string
   */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /**
   * Optional. Multiple lineages can be created from a resource. For example, a
   * resource can be replicated to multiple target resources. In this case,
   * there will be multiple lineages for the resource, one for each target
   * resource.
   *
   * @param Lineage[] $lineages
   */
  public function setLineages($lineages)
  {
    $this->lineages = $lineages;
  }
  /**
   * @return Lineage[]
   */
  public function getLineages()
  {
    return $this->lineages;
  }
  /**
   * Optional. resource id of affiliated resource
   *
   * @param string $resourceId
   */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return string
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Affiliation::class, 'Google_Service_DatabaseCenter_Affiliation');
