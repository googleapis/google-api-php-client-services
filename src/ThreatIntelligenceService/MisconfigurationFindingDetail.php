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

namespace Google\Service\ThreatIntelligenceService;

class MisconfigurationFindingDetail extends \Google\Model
{
  protected $misconfigurationMetadataType = MisconfigurationMetadata::class;
  protected $misconfigurationMetadataDataType = '';

  /**
   * Required. The misconfiguration metadata.
   *
   * @param MisconfigurationMetadata $misconfigurationMetadata
   */
  public function setMisconfigurationMetadata(MisconfigurationMetadata $misconfigurationMetadata)
  {
    $this->misconfigurationMetadata = $misconfigurationMetadata;
  }
  /**
   * @return MisconfigurationMetadata
   */
  public function getMisconfigurationMetadata()
  {
    return $this->misconfigurationMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MisconfigurationFindingDetail::class, 'Google_Service_ThreatIntelligenceService_MisconfigurationFindingDetail');
