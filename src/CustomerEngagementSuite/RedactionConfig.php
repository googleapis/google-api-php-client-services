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

namespace Google\Service\CustomerEngagementSuite;

class RedactionConfig extends \Google\Model
{
  /**
   * Optional. [DLP](https://cloud.google.com/dlp/docs) deidentify template name
   * to instruct on how to de-identify content. Format: `projects/{project}/loca
   * tions/{location}/deidentifyTemplates/{deidentify_template}`
   *
   * @var string
   */
  public $deidentifyTemplate;
  /**
   * Optional. If true, redaction will be applied in various logging scenarios,
   * including conversation history, Cloud Logging and audio recording.
   *
   * @var bool
   */
  public $enableRedaction;
  /**
   * Optional. [DLP](https://cloud.google.com/dlp/docs) inspect template name to
   * configure detection of sensitive data types. Format: `projects/{project}/lo
   * cations/{location}/inspectTemplates/{inspect_template}`
   *
   * @var string
   */
  public $inspectTemplate;

  /**
   * Optional. [DLP](https://cloud.google.com/dlp/docs) deidentify template name
   * to instruct on how to de-identify content. Format: `projects/{project}/loca
   * tions/{location}/deidentifyTemplates/{deidentify_template}`
   *
   * @param string $deidentifyTemplate
   */
  public function setDeidentifyTemplate($deidentifyTemplate)
  {
    $this->deidentifyTemplate = $deidentifyTemplate;
  }
  /**
   * @return string
   */
  public function getDeidentifyTemplate()
  {
    return $this->deidentifyTemplate;
  }
  /**
   * Optional. If true, redaction will be applied in various logging scenarios,
   * including conversation history, Cloud Logging and audio recording.
   *
   * @param bool $enableRedaction
   */
  public function setEnableRedaction($enableRedaction)
  {
    $this->enableRedaction = $enableRedaction;
  }
  /**
   * @return bool
   */
  public function getEnableRedaction()
  {
    return $this->enableRedaction;
  }
  /**
   * Optional. [DLP](https://cloud.google.com/dlp/docs) inspect template name to
   * configure detection of sensitive data types. Format: `projects/{project}/lo
   * cations/{location}/inspectTemplates/{inspect_template}`
   *
   * @param string $inspectTemplate
   */
  public function setInspectTemplate($inspectTemplate)
  {
    $this->inspectTemplate = $inspectTemplate;
  }
  /**
   * @return string
   */
  public function getInspectTemplate()
  {
    return $this->inspectTemplate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RedactionConfig::class, 'Google_Service_CustomerEngagementSuite_RedactionConfig');
