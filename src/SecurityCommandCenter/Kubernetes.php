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

namespace Google\Service\SecurityCommandCenter;

class Kubernetes extends \Google\Collection
{
  protected $collection_key = 'roles';
  /**
   * @var AccessReview[]
   */
  public $accessReviews;
  protected $accessReviewsType = AccessReview::class;
  protected $accessReviewsDataType = 'array';
  /**
   * @var GoogleCloudSecuritycenterV1Binding[]
   */
  public $bindings;
  protected $bindingsType = GoogleCloudSecuritycenterV1Binding::class;
  protected $bindingsDataType = 'array';
  /**
   * @var NodePool[]
   */
  public $nodePools;
  protected $nodePoolsType = NodePool::class;
  protected $nodePoolsDataType = 'array';
  /**
   * @var Node[]
   */
  public $nodes;
  protected $nodesType = Node::class;
  protected $nodesDataType = 'array';
  /**
   * @var SecuritycenterObject[]
   */
  public $objects;
  protected $objectsType = SecuritycenterObject::class;
  protected $objectsDataType = 'array';
  /**
   * @var Pod[]
   */
  public $pods;
  protected $podsType = Pod::class;
  protected $podsDataType = 'array';
  /**
   * @var Role[]
   */
  public $roles;
  protected $rolesType = Role::class;
  protected $rolesDataType = 'array';

  /**
   * @param AccessReview[]
   */
  public function setAccessReviews($accessReviews)
  {
    $this->accessReviews = $accessReviews;
  }
  /**
   * @return AccessReview[]
   */
  public function getAccessReviews()
  {
    return $this->accessReviews;
  }
  /**
   * @param GoogleCloudSecuritycenterV1Binding[]
   */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /**
   * @return GoogleCloudSecuritycenterV1Binding[]
   */
  public function getBindings()
  {
    return $this->bindings;
  }
  /**
   * @param NodePool[]
   */
  public function setNodePools($nodePools)
  {
    $this->nodePools = $nodePools;
  }
  /**
   * @return NodePool[]
   */
  public function getNodePools()
  {
    return $this->nodePools;
  }
  /**
   * @param Node[]
   */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /**
   * @return Node[]
   */
  public function getNodes()
  {
    return $this->nodes;
  }
  /**
   * @param SecuritycenterObject[]
   */
  public function setObjects($objects)
  {
    $this->objects = $objects;
  }
  /**
   * @return SecuritycenterObject[]
   */
  public function getObjects()
  {
    return $this->objects;
  }
  /**
   * @param Pod[]
   */
  public function setPods($pods)
  {
    $this->pods = $pods;
  }
  /**
   * @return Pod[]
   */
  public function getPods()
  {
    return $this->pods;
  }
  /**
   * @param Role[]
   */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /**
   * @return Role[]
   */
  public function getRoles()
  {
    return $this->roles;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Kubernetes::class, 'Google_Service_SecurityCommandCenter_Kubernetes');
