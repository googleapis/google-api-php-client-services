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

class Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Certificate extends Google_Collection
{
  protected $collection_key = 'subjectAlternativeName';
  public $expireTime;
  protected $issuingCertificateType = 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Certificate';
  protected $issuingCertificateDataType = '';
  public $subject;
  public $subjectAlternativeName;
  public $thumbprint;

  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * @param Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Certificate
   */
  public function setIssuingCertificate(Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Certificate $issuingCertificate)
  {
    $this->issuingCertificate = $issuingCertificate;
  }
  /**
   * @return Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Certificate
   */
  public function getIssuingCertificate()
  {
    return $this->issuingCertificate;
  }
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  public function getSubject()
  {
    return $this->subject;
  }
  public function setSubjectAlternativeName($subjectAlternativeName)
  {
    $this->subjectAlternativeName = $subjectAlternativeName;
  }
  public function getSubjectAlternativeName()
  {
    return $this->subjectAlternativeName;
  }
  public function setThumbprint($thumbprint)
  {
    $this->thumbprint = $thumbprint;
  }
  public function getThumbprint()
  {
    return $this->thumbprint;
  }
}
