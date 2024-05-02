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

namespace Google\Service\Contentwarehouse;

class YoutubeCommentsApiCommentEnforcementStatus extends \Google\Model
{
  /**
   * @var string
   */
  public $demotedRestrictionSeverity;
  /**
   * @var bool
   */
  public $exemptFromHold;
  /**
   * @var bool
   */
  public $held;
  /**
   * @var string
   */
  public $heldForCreatorReviewStatus;
  /**
   * @var bool
   */
  public $moderated;
  /**
   * @var bool
   */
  public $moderatedByBlockedWords;
  /**
   * @var bool
   */
  public $moderatedByChatRemoval;
  /**
   * @var bool
   */
  public $moderatedByTns;
  /**
   * @var bool
   */
  public $rejected;
  protected $userModerationDecisionType = YoutubeCommentsApiCommentEnforcementStatusUserModerationDecision::class;
  protected $userModerationDecisionDataType = '';

  /**
   * @param string
   */
  public function setDemotedRestrictionSeverity($demotedRestrictionSeverity)
  {
    $this->demotedRestrictionSeverity = $demotedRestrictionSeverity;
  }
  /**
   * @return string
   */
  public function getDemotedRestrictionSeverity()
  {
    return $this->demotedRestrictionSeverity;
  }
  /**
   * @param bool
   */
  public function setExemptFromHold($exemptFromHold)
  {
    $this->exemptFromHold = $exemptFromHold;
  }
  /**
   * @return bool
   */
  public function getExemptFromHold()
  {
    return $this->exemptFromHold;
  }
  /**
   * @param bool
   */
  public function setHeld($held)
  {
    $this->held = $held;
  }
  /**
   * @return bool
   */
  public function getHeld()
  {
    return $this->held;
  }
  /**
   * @param string
   */
  public function setHeldForCreatorReviewStatus($heldForCreatorReviewStatus)
  {
    $this->heldForCreatorReviewStatus = $heldForCreatorReviewStatus;
  }
  /**
   * @return string
   */
  public function getHeldForCreatorReviewStatus()
  {
    return $this->heldForCreatorReviewStatus;
  }
  /**
   * @param bool
   */
  public function setModerated($moderated)
  {
    $this->moderated = $moderated;
  }
  /**
   * @return bool
   */
  public function getModerated()
  {
    return $this->moderated;
  }
  /**
   * @param bool
   */
  public function setModeratedByBlockedWords($moderatedByBlockedWords)
  {
    $this->moderatedByBlockedWords = $moderatedByBlockedWords;
  }
  /**
   * @return bool
   */
  public function getModeratedByBlockedWords()
  {
    return $this->moderatedByBlockedWords;
  }
  /**
   * @param bool
   */
  public function setModeratedByChatRemoval($moderatedByChatRemoval)
  {
    $this->moderatedByChatRemoval = $moderatedByChatRemoval;
  }
  /**
   * @return bool
   */
  public function getModeratedByChatRemoval()
  {
    return $this->moderatedByChatRemoval;
  }
  /**
   * @param bool
   */
  public function setModeratedByTns($moderatedByTns)
  {
    $this->moderatedByTns = $moderatedByTns;
  }
  /**
   * @return bool
   */
  public function getModeratedByTns()
  {
    return $this->moderatedByTns;
  }
  /**
   * @param bool
   */
  public function setRejected($rejected)
  {
    $this->rejected = $rejected;
  }
  /**
   * @return bool
   */
  public function getRejected()
  {
    return $this->rejected;
  }
  /**
   * @param YoutubeCommentsApiCommentEnforcementStatusUserModerationDecision
   */
  public function setUserModerationDecision(YoutubeCommentsApiCommentEnforcementStatusUserModerationDecision $userModerationDecision)
  {
    $this->userModerationDecision = $userModerationDecision;
  }
  /**
   * @return YoutubeCommentsApiCommentEnforcementStatusUserModerationDecision
   */
  public function getUserModerationDecision()
  {
    return $this->userModerationDecision;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeCommentsApiCommentEnforcementStatus::class, 'Google_Service_Contentwarehouse_YoutubeCommentsApiCommentEnforcementStatus');
