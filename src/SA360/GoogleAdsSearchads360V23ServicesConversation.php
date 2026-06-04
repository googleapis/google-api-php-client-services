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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesConversation extends \Google\Model
{
  /**
   * Required. The resource name of the local services lead that the
   * conversation should be applied to.
   *
   * @var string
   */
  public $localServicesLead;
  /**
   * Required. Text message that user wanted to append to lead.
   *
   * @var string
   */
  public $text;

  /**
   * Required. The resource name of the local services lead that the
   * conversation should be applied to.
   *
   * @param string $localServicesLead
   */
  public function setLocalServicesLead($localServicesLead)
  {
    $this->localServicesLead = $localServicesLead;
  }
  /**
   * @return string
   */
  public function getLocalServicesLead()
  {
    return $this->localServicesLead;
  }
  /**
   * Required. Text message that user wanted to append to lead.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesConversation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesConversation');
