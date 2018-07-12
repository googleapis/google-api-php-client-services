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

class Google_Service_People_ImClient extends Google_Model
{
  public $formattedProtocol;
  public $formattedType;
  protected $metadataType = 'Google_Service_People_FieldMetadata';
  protected $metadataDataType = '';
  public $protocol;
  public $type;
  public $username;

  public function setFormattedProtocol($formattedProtocol)
  {
    $this->formattedProtocol = $formattedProtocol;
    return $this;
  }
  public function getFormattedProtocol()
  {
    return $this->formattedProtocol;
  }
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
    return $this;
  }
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  public function setMetadata(Google_Service_People_FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
    return $this;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
    return $this;
  }
  public function getProtocol()
  {
    return $this->protocol;
  }
  public function setType($type)
  {
    $this->type = $type;
    return $this;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }
  public function getUsername()
  {
    return $this->username;
  }
}
