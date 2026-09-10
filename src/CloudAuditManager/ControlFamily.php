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

namespace Google\Service\CloudAuditManager;

class ControlFamily extends \Google\Model
{
  /**
   * Display name of the regulatory control family.
   *
   * @var string
   */
  public $displayName;
  /**
   * ID of the regulatory control family. To find the list of supported control
   * families, use the ListControls method and review the `control_family` field
   * in the response.
   *
   * @var string
   */
  public $familyId;

  /**
   * Display name of the regulatory control family.
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
   * ID of the regulatory control family. To find the list of supported control
   * families, use the ListControls method and review the `control_family` field
   * in the response.
   *
   * @param string $familyId
   */
  public function setFamilyId($familyId)
  {
    $this->familyId = $familyId;
  }
  /**
   * @return string
   */
  public function getFamilyId()
  {
    return $this->familyId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ControlFamily::class, 'Google_Service_CloudAuditManager_ControlFamily');
