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

namespace Google\Service\Bigquery;

class GeneratedExpressionInfo extends \Google\Model
{
  /**
   * Optional. Whether the column generation is done asynchronously.
   *
   * @var bool
   */
  public $asynchronous;
  /**
   * Optional. The generation expression (e.g. AI.EMBED(...)) used to generate
   * the field.
   *
   * @var string
   */
  public $generationExpression;
  /**
   * Optional. Whether the generated column is stored in the table.
   *
   * @var bool
   */
  public $stored;

  /**
   * Optional. Whether the column generation is done asynchronously.
   *
   * @param bool $asynchronous
   */
  public function setAsynchronous($asynchronous)
  {
    $this->asynchronous = $asynchronous;
  }
  /**
   * @return bool
   */
  public function getAsynchronous()
  {
    return $this->asynchronous;
  }
  /**
   * Optional. The generation expression (e.g. AI.EMBED(...)) used to generate
   * the field.
   *
   * @param string $generationExpression
   */
  public function setGenerationExpression($generationExpression)
  {
    $this->generationExpression = $generationExpression;
  }
  /**
   * @return string
   */
  public function getGenerationExpression()
  {
    return $this->generationExpression;
  }
  /**
   * Optional. Whether the generated column is stored in the table.
   *
   * @param bool $stored
   */
  public function setStored($stored)
  {
    $this->stored = $stored;
  }
  /**
   * @return bool
   */
  public function getStored()
  {
    return $this->stored;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeneratedExpressionInfo::class, 'Google_Service_Bigquery_GeneratedExpressionInfo');
