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

class Replica extends \Google\Model
{
  /**
   * Should never be set.
   */
  public const REPLICA_STATE_REPLICA_STATE_UNSPECIFIED = 'REPLICA_STATE_UNSPECIFIED';
  /**
   * Denotes that the replica is the primary. All routing by default goes to the
   * primary and only the primary is writable.
   */
  public const REPLICA_STATE_PRIMARY = 'PRIMARY';
  /**
   * Denotes that the replica is the secondary and is only readable.
   */
  public const REPLICA_STATE_SECONDARY = 'SECONDARY';
  /**
   * This value for the replica where the new primary is going to be. At most
   * one replica can have this value, and its only present when the dataset has
   * a primary switch in progress.
   */
  public const REPLICA_STATE_ASSIGNED_PRIMARY = 'ASSIGNED_PRIMARY';
  /**
   * This value for the replica where the last primary was, but is no longer
   * assigned the primary. All routing still goes to this replica, but it is no
   * longer writable. Only set on the old primary during a primary switch. At
   * most one replica at any moment can have this value.
   */
  public const REPLICA_STATE_PREVIOUSLY_ASSIGNED_PRIMARY = 'PREVIOUSLY_ASSIGNED_PRIMARY';
  /**
   * The replica is not queriable yet since it's still backfilling.
   */
  public const REPLICA_STATE_BACKFILLING = 'BACKFILLING';
  /**
   * Output only. The time when the backfill was completed and replica is ready
   * to use.
   *
   * @var string
   */
  public $backfillCompletionTime;
  /**
   * Output only. The timestamp when the replica was created. For any dataset's
   * first replica, this should be set to the dataset's creation_time.
   *
   * @var string
   */
  public $creationTime;
  /**
   * Output only. Failover reservation ID for the replica's region if this
   * replica is used for DR. Fully-qualified format, e.g. "projects/some-
   * project/locations/US/reservations/some-reservation" The location portion of
   * the format is upper case if "US" or "EU", otherwise a lower case cloud
   * region like "asia-northeast1".
   *
   * @var string
   */
  public $failoverReservationUri;
  /**
   * Required. The user-visible string identifier for this dataset replica. This
   * is generally named after the region.
   *
   * @var string
   */
  public $id;
  /**
   * Required. The logical bigquery region where this replica is located. This
   * is upper case if "US" or "EU", otherwise a lower case cloud region like
   * "asia-northeast1".
   *
   * @var string
   */
  public $location;
  /**
   * Output only. After a new primary assignment is made, this is the time that
   * the dataset's data has been fully replicated to the replica, and after
   * which the system will use current reads in the new primary replica.
   *
   * @var string
   */
  public $primaryAssignmentCompletionTime;
  /**
   * Output only. The time at which the replica was assigned primary. Only one
   * replica will have this field populated at any point.
   *
   * @var string
   */
  public $primaryAssignmentTime;
  protected $replicaOptionsType = ReplicaOptions::class;
  protected $replicaOptionsDataType = '';
  /**
   * Output only. Gives an explicit indicator of the replica primary state.
   *
   * @var string
   */
  public $replicaState;

  /**
   * Output only. The time when the backfill was completed and replica is ready
   * to use.
   *
   * @param string $backfillCompletionTime
   */
  public function setBackfillCompletionTime($backfillCompletionTime)
  {
    $this->backfillCompletionTime = $backfillCompletionTime;
  }
  /**
   * @return string
   */
  public function getBackfillCompletionTime()
  {
    return $this->backfillCompletionTime;
  }
  /**
   * Output only. The timestamp when the replica was created. For any dataset's
   * first replica, this should be set to the dataset's creation_time.
   *
   * @param string $creationTime
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * Output only. Failover reservation ID for the replica's region if this
   * replica is used for DR. Fully-qualified format, e.g. "projects/some-
   * project/locations/US/reservations/some-reservation" The location portion of
   * the format is upper case if "US" or "EU", otherwise a lower case cloud
   * region like "asia-northeast1".
   *
   * @param string $failoverReservationUri
   */
  public function setFailoverReservationUri($failoverReservationUri)
  {
    $this->failoverReservationUri = $failoverReservationUri;
  }
  /**
   * @return string
   */
  public function getFailoverReservationUri()
  {
    return $this->failoverReservationUri;
  }
  /**
   * Required. The user-visible string identifier for this dataset replica. This
   * is generally named after the region.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Required. The logical bigquery region where this replica is located. This
   * is upper case if "US" or "EU", otherwise a lower case cloud region like
   * "asia-northeast1".
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Output only. After a new primary assignment is made, this is the time that
   * the dataset's data has been fully replicated to the replica, and after
   * which the system will use current reads in the new primary replica.
   *
   * @param string $primaryAssignmentCompletionTime
   */
  public function setPrimaryAssignmentCompletionTime($primaryAssignmentCompletionTime)
  {
    $this->primaryAssignmentCompletionTime = $primaryAssignmentCompletionTime;
  }
  /**
   * @return string
   */
  public function getPrimaryAssignmentCompletionTime()
  {
    return $this->primaryAssignmentCompletionTime;
  }
  /**
   * Output only. The time at which the replica was assigned primary. Only one
   * replica will have this field populated at any point.
   *
   * @param string $primaryAssignmentTime
   */
  public function setPrimaryAssignmentTime($primaryAssignmentTime)
  {
    $this->primaryAssignmentTime = $primaryAssignmentTime;
  }
  /**
   * @return string
   */
  public function getPrimaryAssignmentTime()
  {
    return $this->primaryAssignmentTime;
  }
  /**
   * Optional. Contains modify options on the replica such as set a kms key on
   * the replica.
   *
   * @param ReplicaOptions $replicaOptions
   */
  public function setReplicaOptions(ReplicaOptions $replicaOptions)
  {
    $this->replicaOptions = $replicaOptions;
  }
  /**
   * @return ReplicaOptions
   */
  public function getReplicaOptions()
  {
    return $this->replicaOptions;
  }
  /**
   * Output only. Gives an explicit indicator of the replica primary state.
   *
   * Accepted values: REPLICA_STATE_UNSPECIFIED, PRIMARY, SECONDARY,
   * ASSIGNED_PRIMARY, PREVIOUSLY_ASSIGNED_PRIMARY, BACKFILLING
   *
   * @param self::REPLICA_STATE_* $replicaState
   */
  public function setReplicaState($replicaState)
  {
    $this->replicaState = $replicaState;
  }
  /**
   * @return self::REPLICA_STATE_*
   */
  public function getReplicaState()
  {
    return $this->replicaState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Replica::class, 'Google_Service_Bigquery_Replica');
