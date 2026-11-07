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

namespace Google\Service\BigQueryReservation;

class UpgradeEditionRequest extends \Google\Collection
{
  /**
   * Default value, which will be treated as ENTERPRISE.
   */
  public const TARGET_EDITION_EDITION_UNSPECIFIED = 'EDITION_UNSPECIFIED';
  /**
   * Standard edition.
   */
  public const TARGET_EDITION_STANDARD = 'STANDARD';
  /**
   * Enterprise edition.
   */
  public const TARGET_EDITION_ENTERPRISE = 'ENTERPRISE';
  /**
   * Enterprise Plus edition.
   */
  public const TARGET_EDITION_ENTERPRISE_PLUS = 'ENTERPRISE_PLUS';
  protected $collection_key = 'reservations';
  /**
   * Optional. The resource names of the capacity commitments to upgrade, in the
   * format `projects/{project}/locations/{location}/capacityCommitments/{capaci
   * ty_commitment}`. For example, `projects/myproject/locations/us-
   * west1/capacityCommitments/123`. These capacity commitments must be in the
   * `ACTIVE` state and must exist under the specified `parent`. The
   * `commitment_start_time` and `commitment_end_time` fields don't change after
   * the upgrade.
   *
   * @var string[]
   */
  public $capacityCommitments;
  /**
   * Optional. The resource names of the reservations to upgrade, in the format
   * `projects/{project}/locations/{location}/reservations/{reservation}`. For
   * example, `projects/myproject/locations/us-west1/reservations/team1-prod`.
   * These reservations must exist under the specified `parent`.
   *
   * @var string[]
   */
  public $reservations;
  /**
   * The edition to upgrade the capacity commitments and reservations to.
   * Supported values are `ENTERPRISE` and `ENTERPRISE_PLUS`.
   *
   * @var string
   */
  public $targetEdition;

  /**
   * Optional. The resource names of the capacity commitments to upgrade, in the
   * format `projects/{project}/locations/{location}/capacityCommitments/{capaci
   * ty_commitment}`. For example, `projects/myproject/locations/us-
   * west1/capacityCommitments/123`. These capacity commitments must be in the
   * `ACTIVE` state and must exist under the specified `parent`. The
   * `commitment_start_time` and `commitment_end_time` fields don't change after
   * the upgrade.
   *
   * @param string[] $capacityCommitments
   */
  public function setCapacityCommitments($capacityCommitments)
  {
    $this->capacityCommitments = $capacityCommitments;
  }
  /**
   * @return string[]
   */
  public function getCapacityCommitments()
  {
    return $this->capacityCommitments;
  }
  /**
   * Optional. The resource names of the reservations to upgrade, in the format
   * `projects/{project}/locations/{location}/reservations/{reservation}`. For
   * example, `projects/myproject/locations/us-west1/reservations/team1-prod`.
   * These reservations must exist under the specified `parent`.
   *
   * @param string[] $reservations
   */
  public function setReservations($reservations)
  {
    $this->reservations = $reservations;
  }
  /**
   * @return string[]
   */
  public function getReservations()
  {
    return $this->reservations;
  }
  /**
   * The edition to upgrade the capacity commitments and reservations to.
   * Supported values are `ENTERPRISE` and `ENTERPRISE_PLUS`.
   *
   * Accepted values: EDITION_UNSPECIFIED, STANDARD, ENTERPRISE, ENTERPRISE_PLUS
   *
   * @param self::TARGET_EDITION_* $targetEdition
   */
  public function setTargetEdition($targetEdition)
  {
    $this->targetEdition = $targetEdition;
  }
  /**
   * @return self::TARGET_EDITION_*
   */
  public function getTargetEdition()
  {
    return $this->targetEdition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpgradeEditionRequest::class, 'Google_Service_BigQueryReservation_UpgradeEditionRequest');
