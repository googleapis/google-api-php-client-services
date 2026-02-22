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

namespace Google\Service\NetworkManagement;

class NgfwPacketInspectionInfo extends \Google\Model
{
  /**
   * URI of the security profile group associated with this firewall packet
   * inspection.
   *
   * @var string
   */
  public $securityProfileGroupUri;

  /**
   * URI of the security profile group associated with this firewall packet
   * inspection.
   *
   * @param string $securityProfileGroupUri
   */
  public function setSecurityProfileGroupUri($securityProfileGroupUri)
  {
    $this->securityProfileGroupUri = $securityProfileGroupUri;
  }
  /**
   * @return string
   */
  public function getSecurityProfileGroupUri()
  {
    return $this->securityProfileGroupUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NgfwPacketInspectionInfo::class, 'Google_Service_NetworkManagement_NgfwPacketInspectionInfo');
