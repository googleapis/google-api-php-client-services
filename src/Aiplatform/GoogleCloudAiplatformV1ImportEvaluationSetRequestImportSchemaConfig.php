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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ImportEvaluationSetRequestImportSchemaConfig extends \Google\Model
{
  /**
   * Unspecified data format.
   */
  public const DATA_FORMAT_DATA_FORMAT_UNSPECIFIED = 'DATA_FORMAT_UNSPECIFIED';
  /**
   * OpenTelemetry Protobuf format (e.g. TracesData).
   */
  public const DATA_FORMAT_OTEL_PROTO = 'OTEL_PROTO';
  /**
   * OpenTelemetry JSON format.
   */
  public const DATA_FORMAT_OTEL_JSON = 'OTEL_JSON';
  /**
   * JSONL format mapping directly to EvaluationItem schema.
   */
  public const DATA_FORMAT_JSONL = 'JSONL';
  /**
   * Required. The format of the input data.
   *
   * @var string
   */
  public $dataFormat;
  /**
   * Optional. Version of the data format.
   *
   * @var string
   */
  public $dataFormatVersion;

  /**
   * Required. The format of the input data.
   *
   * Accepted values: DATA_FORMAT_UNSPECIFIED, OTEL_PROTO, OTEL_JSON, JSONL
   *
   * @param self::DATA_FORMAT_* $dataFormat
   */
  public function setDataFormat($dataFormat)
  {
    $this->dataFormat = $dataFormat;
  }
  /**
   * @return self::DATA_FORMAT_*
   */
  public function getDataFormat()
  {
    return $this->dataFormat;
  }
  /**
   * Optional. Version of the data format.
   *
   * @param string $dataFormatVersion
   */
  public function setDataFormatVersion($dataFormatVersion)
  {
    $this->dataFormatVersion = $dataFormatVersion;
  }
  /**
   * @return string
   */
  public function getDataFormatVersion()
  {
    return $this->dataFormatVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ImportEvaluationSetRequestImportSchemaConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ImportEvaluationSetRequestImportSchemaConfig');
