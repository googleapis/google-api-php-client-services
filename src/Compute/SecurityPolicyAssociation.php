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

namespace Google\Service\Compute;

class SecurityPolicyAssociation extends \Google\Collection
{
  protected $collection_key = 'excludedProjects';
  /**
   * @var string
   */
  public $attachmentId;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string[]
   */
  public $excludedFolders;
  /**
   * @var string[]
   */
  public $excludedProjects;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $securityPolicyId;
  /**
   * @var string
   */
  public $shortName;

  /**
   * @param string
   */
  public function setAttachmentId($attachmentId)
  {
    $this->attachmentId = $attachmentId;
  }
  /**
   * @return string
   */
  public function getAttachmentId()
  {
    return $this->attachmentId;
  }
  /**
   * @param string
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
   * @param string[]
   */
  public function setExcludedFolders($excludedFolders)
  {
    $this->excludedFolders = $excludedFolders;
  }
  /**
   * @return string[]
   */
  public function getExcludedFolders()
  {
    return $this->excludedFolders;
  }
  /**
   * @param string[]
   */
  public function setExcludedProjects($excludedProjects)
  {
    $this->excludedProjects = $excludedProjects;
  }
  /**
   * @return string[]
   */
  public function getExcludedProjects()
  {
    return $this->excludedProjects;
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
   * @param string
   */
  public function setSecurityPolicyId($securityPolicyId)
  {
    $this->securityPolicyId = $securityPolicyId;
  }
  /**
   * @return string
   */
  public function getSecurityPolicyId()
  {
    return $this->securityPolicyId;
  }
  /**
   * @param string
   */
  public function setShortName($shortName)
  {
    $this->shortName = $shortName;
  }
  /**
   * @return string
   */
  public function getShortName()
  {
    return $this->shortName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecurityPolicyAssociation::class, 'Google_Service_Compute_SecurityPolicyAssociation');
