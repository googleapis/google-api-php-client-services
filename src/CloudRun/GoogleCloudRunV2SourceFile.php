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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2SourceFile extends \Google\Model
{
  /**
   * Required. Input only. Represents the exact, literal, and complete source
   * code of the file. Placeholders like `...` or comments such as `# [rest of
   * code]` should NEVER be used as omission. Every character in this field will
   * be built into the final container. Any omission will result in a broken
   * application.
   *
   * @var string
   */
  public $content;
  /**
   * Required. Input only. The file name for the source code. e.g., `"index.js"`
   * or `"node_modules/dependency.js"`. The filename must be less than 255
   * characters and cannot contain `..`, `./`, `//`, or end with a `/`. Cloud
   * Run will place the files in the container subdirectories, please use
   * relative path to access the file.
   *
   * @var string
   */
  public $filename;

  /**
   * Required. Input only. Represents the exact, literal, and complete source
   * code of the file. Placeholders like `...` or comments such as `# [rest of
   * code]` should NEVER be used as omission. Every character in this field will
   * be built into the final container. Any omission will result in a broken
   * application.
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
   * Required. Input only. The file name for the source code. e.g., `"index.js"`
   * or `"node_modules/dependency.js"`. The filename must be less than 255
   * characters and cannot contain `..`, `./`, `//`, or end with a `/`. Cloud
   * Run will place the files in the container subdirectories, please use
   * relative path to access the file.
   *
   * @param string $filename
   */
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /**
   * @return string
   */
  public function getFilename()
  {
    return $this->filename;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2SourceFile::class, 'Google_Service_CloudRun_GoogleCloudRunV2SourceFile');
