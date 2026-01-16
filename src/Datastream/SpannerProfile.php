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

namespace Google\Service\Datastream;

class SpannerProfile extends \Google\Model
{
  /**
   * Required. Immutable. Cloud Spanner database resource. This field is
   * immutable. Must be in the format:
   * projects/{project}/instances/{instance}/databases/{database_id}.
   *
   * @var string
   */
  public $database;
  /**
   * Optional. The Spanner endpoint to connect to. Defaults to the global
   * endpoint (https://spanner.googleapis.com). Must be in the format:
   * https://spanner.{region}.rep.googleapis.com.
   *
   * @var string
   */
  public $host;

  /**
   * Required. Immutable. Cloud Spanner database resource. This field is
   * immutable. Must be in the format:
   * projects/{project}/instances/{instance}/databases/{database_id}.
   *
   * @param string $database
   */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /**
   * @return string
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * Optional. The Spanner endpoint to connect to. Defaults to the global
   * endpoint (https://spanner.googleapis.com). Must be in the format:
   * https://spanner.{region}.rep.googleapis.com.
   *
   * @param string $host
   */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /**
   * @return string
   */
  public function getHost()
  {
    return $this->host;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpannerProfile::class, 'Google_Service_Datastream_SpannerProfile');
