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

class GoogleAdsSearchads360V23ServicesUserDataOperation extends \Google\Model
{
  protected $createType = GoogleAdsSearchads360V23CommonUserData::class;
  protected $createDataType = '';
  protected $removeType = GoogleAdsSearchads360V23CommonUserData::class;
  protected $removeDataType = '';

  /**
   * The list of user data to be appended to the user list.
   *
   * @param GoogleAdsSearchads360V23CommonUserData $create
   */
  public function setCreate(GoogleAdsSearchads360V23CommonUserData $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserData
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * The list of user data to be removed from the user list.
   *
   * @param GoogleAdsSearchads360V23CommonUserData $remove
   */
  public function setRemove(GoogleAdsSearchads360V23CommonUserData $remove)
  {
    $this->remove = $remove;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserData
   */
  public function getRemove()
  {
    return $this->remove;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesUserDataOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUserDataOperation');
