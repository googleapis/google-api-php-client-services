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

namespace Google\Service\CloudFunctions;

class BuildConfigOverrides extends \Google\Model
{
  /**
   * Optional. Specifies the desired runtime for the new Cloud Run function.
   * (e.g., `"nodejs20"`, `"python312"`). Constraints: 1. This field CANNOT be
   * used to change the runtime language (e.g., from `NODEJS` to `PYTHON`). The
   * backend will enforce this. 2. This field can ONLY be used to upgrade the
   * runtime version (e.g., `nodejs18` to `nodejs20`). Downgrading the version
   * is not permitted. The backend will validate the version change. If provided
   * and valid, this overrides the runtime of the Gen1 function.
   *
   * @var string
   */
  public $runtime;

  /**
   * Optional. Specifies the desired runtime for the new Cloud Run function.
   * (e.g., `"nodejs20"`, `"python312"`). Constraints: 1. This field CANNOT be
   * used to change the runtime language (e.g., from `NODEJS` to `PYTHON`). The
   * backend will enforce this. 2. This field can ONLY be used to upgrade the
   * runtime version (e.g., `nodejs18` to `nodejs20`). Downgrading the version
   * is not permitted. The backend will validate the version change. If provided
   * and valid, this overrides the runtime of the Gen1 function.
   *
   * @param string $runtime
   */
  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;
  }
  /**
   * @return string
   */
  public function getRuntime()
  {
    return $this->runtime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BuildConfigOverrides::class, 'Google_Service_CloudFunctions_BuildConfigOverrides');
