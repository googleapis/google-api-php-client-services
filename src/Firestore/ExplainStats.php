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

namespace Google\Service\Firestore;

class ExplainStats extends \Google\Model
{
  /**
   * The format depends on the `output_format` options in the request. Currently
   * there are two supported options: `TEXT` and `JSON`. Both supply a
   * `google.protobuf.StringValue`.
   *
   * @var array[]
   */
  public $data;

  /**
   * The format depends on the `output_format` options in the request. Currently
   * there are two supported options: `TEXT` and `JSON`. Both supply a
   * `google.protobuf.StringValue`.
   *
   * @param array[] $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return array[]
   */
  public function getData()
  {
    return $this->data;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExplainStats::class, 'Google_Service_Firestore_ExplainStats');
