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

class Google_Service_Ghire_FeedbackOnFeedback extends Google_Model
{
  public $kind;
  public $qualityRating;
  public $referenceFeedbackId;
  protected $referenceFeedbackReviewerType = 'Google_Service_Ghire_PrincipalWithName';
  protected $referenceFeedbackReviewerDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setQualityRating($qualityRating)
  {
    $this->qualityRating = $qualityRating;
  }
  public function getQualityRating()
  {
    return $this->qualityRating;
  }
  public function setReferenceFeedbackId($referenceFeedbackId)
  {
    $this->referenceFeedbackId = $referenceFeedbackId;
  }
  public function getReferenceFeedbackId()
  {
    return $this->referenceFeedbackId;
  }
  public function setReferenceFeedbackReviewer(Google_Service_Ghire_PrincipalWithName $referenceFeedbackReviewer)
  {
    $this->referenceFeedbackReviewer = $referenceFeedbackReviewer;
  }
  public function getReferenceFeedbackReviewer()
  {
    return $this->referenceFeedbackReviewer;
  }
}
