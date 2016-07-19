<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_CivicInfo_Official extends Google_Collection
{
  protected $collection_key = 'urls';
  public $address;
  public $channels;
  public $emails;
  public $name;
  public $party;
  public $phones;
  public $photoUrl;
  public $urls;

  public function setAddress(array $address)
  {
    foreach ($address as $a) {
      if (!$a instanceof Google_Service_CivicInfo_SimpleAddressType) {
        throw new InvalidArgumentException('First argument to setAddress must be an array of Google_Service_CivicInfo_SimpleAddressType');
      }
    }
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setChannels(array $channels)
  {
    foreach ($channels as $c) {
      if (!$c instanceof Google_Service_CivicInfo_Channel) {
        throw new InvalidArgumentException('First argument to setChannels must be an array of Google_Service_CivicInfo_Channel');
      }
    }
    $this->channels = $channels;
  }
  public function getChannels()
  {
    return $this->channels;
  }
  public function setEmails(array $emails)
  {
    $this->emails = $emails;
  }
  public function getEmails()
  {
    return $this->emails;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setParty($party)
  {
    $this->party = $party;
  }
  public function getParty()
  {
    return $this->party;
  }
  public function setPhones(array $phones)
  {
    $this->phones = $phones;
  }
  public function getPhones()
  {
    return $this->phones;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setUrls(array $urls)
  {
    $this->urls = $urls;
  }
  public function getUrls()
  {
    return $this->urls;
  }
}
