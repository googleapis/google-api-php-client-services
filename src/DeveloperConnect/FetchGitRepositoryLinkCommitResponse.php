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

namespace Google\Service\DeveloperConnect;

class FetchGitRepositoryLinkCommitResponse extends \Google\Collection
{
  protected $collection_key = 'files';
  protected $commitType = SCMCommit::class;
  protected $commitDataType = '';
  protected $filesType = FileDiff::class;
  protected $filesDataType = 'array';

  /**
   * The commit metadata.
   *
   * @param SCMCommit $commit
   */
  public function setCommit(SCMCommit $commit)
  {
    $this->commit = $commit;
  }
  /**
   * @return SCMCommit
   */
  public function getCommit()
  {
    return $this->commit;
  }
  /**
   * List of file changes and patch diffs. Omitted when view is `BASIC`. Patch
   * diffs (`FileDiff.patch`) are only populated when `path_filters` is
   * specified in the request.
   *
   * @param FileDiff[] $files
   */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /**
   * @return FileDiff[]
   */
  public function getFiles()
  {
    return $this->files;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FetchGitRepositoryLinkCommitResponse::class, 'Google_Service_DeveloperConnect_FetchGitRepositoryLinkCommitResponse');
