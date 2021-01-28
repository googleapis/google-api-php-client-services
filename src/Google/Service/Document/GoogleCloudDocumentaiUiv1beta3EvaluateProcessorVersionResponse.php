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

class Google_Service_Document_GoogleCloudDocumentaiUiv1beta3EvaluateProcessorVersionResponse extends Google_Model
{
  protected $evaluationType = 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3Evaluation';
  protected $evaluationDataType = '';

  /**
   * @param Google_Service_Document_GoogleCloudDocumentaiUiv1beta3Evaluation
   */
  public function setEvaluation(Google_Service_Document_GoogleCloudDocumentaiUiv1beta3Evaluation $evaluation)
  {
    $this->evaluation = $evaluation;
  }
  /**
   * @return Google_Service_Document_GoogleCloudDocumentaiUiv1beta3Evaluation
   */
  public function getEvaluation()
  {
    return $this->evaluation;
  }
}
