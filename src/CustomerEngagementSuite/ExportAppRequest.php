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

class ExportAppRequest extends \Google\Model
{
  /**
   * The export format is unspecified.
   */
  public const EXPORT_FORMAT_EXPORT_FORMAT_UNSPECIFIED = 'EXPORT_FORMAT_UNSPECIFIED';
  /**
   * The export format is JSON.
   */
  public const EXPORT_FORMAT_JSON = 'JSON';
  /**
   * The export format is YAML.
   */
  public const EXPORT_FORMAT_YAML = 'YAML';
  /**
   * Required. The format to export the app in.
   *
   * @var string
   */
  public $exportFormat;
  /**
   * Optional. The [Google Cloud
   * Storage](https://cloud.google.com/storage/docs/) URI to which to export the
   * app. The format of this URI must be `gs:`. The exported app archive will be
   * written directly to the specified GCS object.
   *
   * @var string
   */
  public $gcsUri;

  /**
   * Required. The format to export the app in.
   *
   * Accepted values: EXPORT_FORMAT_UNSPECIFIED, JSON, YAML
   *
   * @param self::EXPORT_FORMAT_* $exportFormat
   */
  public function setExportFormat($exportFormat)
  {
    $this->exportFormat = $exportFormat;
  }
  /**
   * @return self::EXPORT_FORMAT_*
   */
  public function getExportFormat()
  {
    return $this->exportFormat;
  }
  /**
   * Optional. The [Google Cloud
   * Storage](https://cloud.google.com/storage/docs/) URI to which to export the
   * app. The format of this URI must be `gs:`. The exported app archive will be
   * written directly to the specified GCS object.
   *
   * @param string $gcsUri
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportAppRequest::class, 'Google_Service_CustomerEngagementSuite_ExportAppRequest');
