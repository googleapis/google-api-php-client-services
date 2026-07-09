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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveSourceFile extends \Google\Model
{
  /**
   * Required. The raw content of the file. This is a string and not bytes,
   * because it should be ultimately processed by the LLM as text.
   *
   * @var string
   */
  public $content;
  /**
   * Optional. Additional description of the file.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The relative path of the file, including the filename. e.g.,
   * "src/main.py", "utils/helpers.js", "README.md"
   *
   * @var string
   */
  public $path;
  /**
   * Optional. The programming language of the file.
   *
   * @var string
   */
  public $programLanguage;

  /**
   * Required. The raw content of the file. This is a string and not bytes,
   * because it should be ultimately processed by the LLM as text.
   *
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Optional. Additional description of the file.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The relative path of the file, including the filename. e.g.,
   * "src/main.py", "utils/helpers.js", "README.md"
   *
   * @param string $path
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * Optional. The programming language of the file.
   *
   * @param string $programLanguage
   */
  public function setProgramLanguage($programLanguage)
  {
    $this->programLanguage = $programLanguage;
  }
  /**
   * @return string
   */
  public function getProgramLanguage()
  {
    return $this->programLanguage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveSourceFile::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveSourceFile');
