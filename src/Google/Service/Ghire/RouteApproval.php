<?php
/*
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

class Google_Service_Ghire_RouteApproval extends Google_Model
{
  public $cancelled;
  public $kind;
  public $showFeedback;

  public function setCancelled($cancelled)
  {
    $this->cancelled = $cancelled;
  }
  public function getCancelled()
  {
    return $this->cancelled;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setShowFeedback($showFeedback)
  {
    $this->showFeedback = $showFeedback;
  }
  public function getShowFeedback()
  {
    return $this->showFeedback;
  }
}
