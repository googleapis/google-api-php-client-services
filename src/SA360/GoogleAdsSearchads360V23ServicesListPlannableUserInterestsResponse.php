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

class GoogleAdsSearchads360V23ServicesListPlannableUserInterestsResponse extends \Google\Collection
{
  protected $collection_key = 'plannableUserInterests';
  protected $plannableUserInterestsType = GoogleAdsSearchads360V23ServicesPlannableUserInterest::class;
  protected $plannableUserInterestsDataType = 'array';

  /**
   * The list of plannable user interests.
   *
   * @param GoogleAdsSearchads360V23ServicesPlannableUserInterest[] $plannableUserInterests
   */
  public function setPlannableUserInterests($plannableUserInterests)
  {
    $this->plannableUserInterests = $plannableUserInterests;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesPlannableUserInterest[]
   */
  public function getPlannableUserInterests()
  {
    return $this->plannableUserInterests;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesListPlannableUserInterestsResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesListPlannableUserInterestsResponse');
