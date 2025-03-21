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

namespace Google\Service\CivicInfo;

class CivicinfoSchemaV2ElectionOfficial extends \Google\Model
{
  /**
   * @var string
   */
  public $emailAddress;
  /**
   * @var string
   */
  public $faxNumber;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $officePhoneNumber;
  /**
   * @var string
   */
  public $title;

  /**
   * @param string
   */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /**
   * @return string
   */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /**
   * @param string
   */
  public function setFaxNumber($faxNumber)
  {
    $this->faxNumber = $faxNumber;
  }
  /**
   * @return string
   */
  public function getFaxNumber()
  {
    return $this->faxNumber;
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
  public function setOfficePhoneNumber($officePhoneNumber)
  {
    $this->officePhoneNumber = $officePhoneNumber;
  }
  /**
   * @return string
   */
  public function getOfficePhoneNumber()
  {
    return $this->officePhoneNumber;
  }
  /**
   * @param string
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CivicinfoSchemaV2ElectionOfficial::class, 'Google_Service_CivicInfo_CivicinfoSchemaV2ElectionOfficial');
