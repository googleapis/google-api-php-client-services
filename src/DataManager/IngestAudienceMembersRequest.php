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

namespace Google\Service\DataManager;

class IngestAudienceMembersRequest extends \Google\Collection
{
  protected $collection_key = 'destinations';
  protected $audienceMembersType = AudienceMember::class;
  protected $audienceMembersDataType = 'array';
  protected $consentType = Consent::class;
  protected $consentDataType = '';
  protected $destinationsType = Destination::class;
  protected $destinationsDataType = 'array';
  /**
   * @var string
   */
  public $encoding;
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = '';
  protected $termsOfServiceType = TermsOfService::class;
  protected $termsOfServiceDataType = '';
  /**
   * @var bool
   */
  public $validateOnly;

  /**
   * @param AudienceMember[]
   */
  public function setAudienceMembers($audienceMembers)
  {
    $this->audienceMembers = $audienceMembers;
  }
  /**
   * @return AudienceMember[]
   */
  public function getAudienceMembers()
  {
    return $this->audienceMembers;
  }
  /**
   * @param Consent
   */
  public function setConsent(Consent $consent)
  {
    $this->consent = $consent;
  }
  /**
   * @return Consent
   */
  public function getConsent()
  {
    return $this->consent;
  }
  /**
   * @param Destination[]
   */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /**
   * @return Destination[]
   */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /**
   * @param string
   */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /**
   * @return string
   */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /**
   * @param EncryptionInfo
   */
  public function setEncryptionInfo(EncryptionInfo $encryptionInfo)
  {
    $this->encryptionInfo = $encryptionInfo;
  }
  /**
   * @return EncryptionInfo
   */
  public function getEncryptionInfo()
  {
    return $this->encryptionInfo;
  }
  /**
   * @param TermsOfService
   */
  public function setTermsOfService(TermsOfService $termsOfService)
  {
    $this->termsOfService = $termsOfService;
  }
  /**
   * @return TermsOfService
   */
  public function getTermsOfService()
  {
    return $this->termsOfService;
  }
  /**
   * @param bool
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IngestAudienceMembersRequest::class, 'Google_Service_DataManager_IngestAudienceMembersRequest');
