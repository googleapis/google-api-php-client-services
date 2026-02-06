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

class FileSearchTool extends \Google\Model
{
  /**
   * Unspecified corpus type.
   */
  public const CORPUS_TYPE_CORPUS_TYPE_UNSPECIFIED = 'CORPUS_TYPE_UNSPECIFIED';
  /**
   * The corpus is created and owned by the user.
   */
  public const CORPUS_TYPE_USER_OWNED = 'USER_OWNED';
  /**
   * The corpus is created by the agent.
   */
  public const CORPUS_TYPE_FULLY_MANAGED = 'FULLY_MANAGED';
  /**
   * Optional. The type of the corpus. Default is FULLY_MANAGED.
   *
   * @var string
   */
  public $corpusType;
  /**
   * Optional. The tool description.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The corpus where files are stored. Format:
   * projects/{project}/locations/{location}/ragCorpora/{rag_corpus}
   *
   * @var string
   */
  public $fileCorpus;
  /**
   * Required. The tool name.
   *
   * @var string
   */
  public $name;

  /**
   * Optional. The type of the corpus. Default is FULLY_MANAGED.
   *
   * Accepted values: CORPUS_TYPE_UNSPECIFIED, USER_OWNED, FULLY_MANAGED
   *
   * @param self::CORPUS_TYPE_* $corpusType
   */
  public function setCorpusType($corpusType)
  {
    $this->corpusType = $corpusType;
  }
  /**
   * @return self::CORPUS_TYPE_*
   */
  public function getCorpusType()
  {
    return $this->corpusType;
  }
  /**
   * Optional. The tool description.
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
   * Optional. The corpus where files are stored. Format:
   * projects/{project}/locations/{location}/ragCorpora/{rag_corpus}
   *
   * @param string $fileCorpus
   */
  public function setFileCorpus($fileCorpus)
  {
    $this->fileCorpus = $fileCorpus;
  }
  /**
   * @return string
   */
  public function getFileCorpus()
  {
    return $this->fileCorpus;
  }
  /**
   * Required. The tool name.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FileSearchTool::class, 'Google_Service_CustomerEngagementSuite_FileSearchTool');
