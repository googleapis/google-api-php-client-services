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

class Infrastructure extends \Google\Model
{
  protected $certificateDetailsType = CertificateDetails::class;
  protected $certificateDetailsDataType = '';
  /**
   * Optional. The raw URL response string.
   *
   * @var string
   */
  public $urlResponse;

  /**
   * Optional. SSL certificate details.
   *
   * @param CertificateDetails $certificateDetails
   */
  public function setCertificateDetails(CertificateDetails $certificateDetails)
  {
    $this->certificateDetails = $certificateDetails;
  }
  /**
   * @return CertificateDetails
   */
  public function getCertificateDetails()
  {
    return $this->certificateDetails;
  }
  /**
   * Optional. The raw URL response string.
   *
   * @param string $urlResponse
   */
  public function setUrlResponse($urlResponse)
  {
    $this->urlResponse = $urlResponse;
  }
  /**
   * @return string
   */
  public function getUrlResponse()
  {
    return $this->urlResponse;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Infrastructure::class, 'Google_Service_ThreatIntelligenceService_Infrastructure');
