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

class PartnerMetadata extends \Google\Model
{
  /**
   * Instance-level hash to be used for optimistic locking.
   *
   * @var string
   */
  public $fingerprint;
  protected $partnerMetadataType = StructuredEntries::class;
  protected $partnerMetadataDataType = 'map';

  /**
   * Instance-level hash to be used for optimistic locking.
   *
   * @param string $fingerprint
   */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /**
   * @return string
   */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /**
   * Partner Metadata assigned to the instance. A map from a subdomain to
   * entries map. Subdomain name must be compliant withRFC1035 definition. The
   * total size of all keys and values must be less than 2MB. Subdomain
   * 'metadata.compute.googleapis.com' is reserverd for instance's metadata.
   *
   * @param StructuredEntries[] $partnerMetadata
   */
  public function setPartnerMetadata($partnerMetadata)
  {
    $this->partnerMetadata = $partnerMetadata;
  }
  /**
   * @return StructuredEntries[]
   */
  public function getPartnerMetadata()
  {
    return $this->partnerMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartnerMetadata::class, 'Google_Service_Compute_PartnerMetadata');
