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

namespace Google\Service\DatabaseMigrationService;

class QuotaFailureViolation extends \Google\Model
{
  /**
   * The API Service from which the `QuotaFailure.Violation` orginates. In some
   * cases, Quota issues originate from an API Service other than the one that
   * was called. In other words, a dependency of the called API Service could be
   * the cause of the `QuotaFailure`, and this field would have the dependency
   * API service name. For example, if the called API is Kubernetes Engine API
   * (container.googleapis.com), and a quota violation occurs in the Kubernetes
   * Engine API itself, this field would be "container.googleapis.com". On the
   * other hand, if the quota violation occurs when the Kubernetes Engine API
   * creates VMs in the Compute Engine API (compute.googleapis.com), this field
   * would be "compute.googleapis.com".
   *
   * @var string
   */
  public $apiService;
  /**
   * A description of how the quota check failed. Clients can use this
   * description to find more about the quota configuration in the service's
   * public documentation, or find the relevant quota limit to adjust through
   * developer console. For example: "Service disabled" or "Daily Limit for read
   * operations exceeded".
   *
   * @var string
   */
  public $description;
  /**
   * The new quota value being rolled out at the time of the violation. At the
   * completion of the rollout, this value will be enforced in place of
   * quota_value. If no rollout is in progress at the time of the violation,
   * this field is not set. For example, if at the time of the violation a
   * rollout is in progress changing the number of CPUs quota from 10 to 20, 20
   * would be the value of this field.
   *
   * @var string
   */
  public $futureQuotaValue;
  /**
   * The dimensions of the violated quota. Every non-global quota is enforced on
   * a set of dimensions. While quota metric defines what to count, the
   * dimensions specify for what aspects the counter should be increased. For
   * example, the quota "CPUs per region per VM family" enforces a limit on the
   * metric "compute.googleapis.com/cpus_per_vm_family" on dimensions "region"
   * and "vm_family". And if the violation occurred in region "us-central1" and
   * for VM family "n1", the quota_dimensions would be, { "region": "us-
   * central1", "vm_family": "n1", } When a quota is enforced globally, the
   * quota_dimensions would always be empty.
   *
   * @var string[]
   */
  public $quotaDimensions;
  /**
   * The id of the violated quota. Also know as "limit name", this is the unique
   * identifier of a quota in the context of an API service. For example, "CPUS-
   * PER-VM-FAMILY-per-project-region".
   *
   * @var string
   */
  public $quotaId;
  /**
   * The metric of the violated quota. A quota metric is a named counter to
   * measure usage, such as API requests or CPUs. When an activity occurs in a
   * service, such as Virtual Machine allocation, one or more quota metrics may
   * be affected. For example, "compute.googleapis.com/cpus_per_vm_family",
   * "storage.googleapis.com/internet_egress_bandwidth".
   *
   * @var string
   */
  public $quotaMetric;
  /**
   * The enforced quota value at the time of the `QuotaFailure`. For example, if
   * the enforced quota value at the time of the `QuotaFailure` on the number of
   * CPUs is "10", then the value of this field would reflect this quantity.
   *
   * @var string
   */
  public $quotaValue;
  /**
   * The subject on which the quota check failed. For example, "clientip:" or
   * "project:".
   *
   * @var string
   */
  public $subject;

  /**
   * The API Service from which the `QuotaFailure.Violation` orginates. In some
   * cases, Quota issues originate from an API Service other than the one that
   * was called. In other words, a dependency of the called API Service could be
   * the cause of the `QuotaFailure`, and this field would have the dependency
   * API service name. For example, if the called API is Kubernetes Engine API
   * (container.googleapis.com), and a quota violation occurs in the Kubernetes
   * Engine API itself, this field would be "container.googleapis.com". On the
   * other hand, if the quota violation occurs when the Kubernetes Engine API
   * creates VMs in the Compute Engine API (compute.googleapis.com), this field
   * would be "compute.googleapis.com".
   *
   * @param string $apiService
   */
  public function setApiService($apiService)
  {
    $this->apiService = $apiService;
  }
  /**
   * @return string
   */
  public function getApiService()
  {
    return $this->apiService;
  }
  /**
   * A description of how the quota check failed. Clients can use this
   * description to find more about the quota configuration in the service's
   * public documentation, or find the relevant quota limit to adjust through
   * developer console. For example: "Service disabled" or "Daily Limit for read
   * operations exceeded".
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
   * The new quota value being rolled out at the time of the violation. At the
   * completion of the rollout, this value will be enforced in place of
   * quota_value. If no rollout is in progress at the time of the violation,
   * this field is not set. For example, if at the time of the violation a
   * rollout is in progress changing the number of CPUs quota from 10 to 20, 20
   * would be the value of this field.
   *
   * @param string $futureQuotaValue
   */
  public function setFutureQuotaValue($futureQuotaValue)
  {
    $this->futureQuotaValue = $futureQuotaValue;
  }
  /**
   * @return string
   */
  public function getFutureQuotaValue()
  {
    return $this->futureQuotaValue;
  }
  /**
   * The dimensions of the violated quota. Every non-global quota is enforced on
   * a set of dimensions. While quota metric defines what to count, the
   * dimensions specify for what aspects the counter should be increased. For
   * example, the quota "CPUs per region per VM family" enforces a limit on the
   * metric "compute.googleapis.com/cpus_per_vm_family" on dimensions "region"
   * and "vm_family". And if the violation occurred in region "us-central1" and
   * for VM family "n1", the quota_dimensions would be, { "region": "us-
   * central1", "vm_family": "n1", } When a quota is enforced globally, the
   * quota_dimensions would always be empty.
   *
   * @param string[] $quotaDimensions
   */
  public function setQuotaDimensions($quotaDimensions)
  {
    $this->quotaDimensions = $quotaDimensions;
  }
  /**
   * @return string[]
   */
  public function getQuotaDimensions()
  {
    return $this->quotaDimensions;
  }
  /**
   * The id of the violated quota. Also know as "limit name", this is the unique
   * identifier of a quota in the context of an API service. For example, "CPUS-
   * PER-VM-FAMILY-per-project-region".
   *
   * @param string $quotaId
   */
  public function setQuotaId($quotaId)
  {
    $this->quotaId = $quotaId;
  }
  /**
   * @return string
   */
  public function getQuotaId()
  {
    return $this->quotaId;
  }
  /**
   * The metric of the violated quota. A quota metric is a named counter to
   * measure usage, such as API requests or CPUs. When an activity occurs in a
   * service, such as Virtual Machine allocation, one or more quota metrics may
   * be affected. For example, "compute.googleapis.com/cpus_per_vm_family",
   * "storage.googleapis.com/internet_egress_bandwidth".
   *
   * @param string $quotaMetric
   */
  public function setQuotaMetric($quotaMetric)
  {
    $this->quotaMetric = $quotaMetric;
  }
  /**
   * @return string
   */
  public function getQuotaMetric()
  {
    return $this->quotaMetric;
  }
  /**
   * The enforced quota value at the time of the `QuotaFailure`. For example, if
   * the enforced quota value at the time of the `QuotaFailure` on the number of
   * CPUs is "10", then the value of this field would reflect this quantity.
   *
   * @param string $quotaValue
   */
  public function setQuotaValue($quotaValue)
  {
    $this->quotaValue = $quotaValue;
  }
  /**
   * @return string
   */
  public function getQuotaValue()
  {
    return $this->quotaValue;
  }
  /**
   * The subject on which the quota check failed. For example, "clientip:" or
   * "project:".
   *
   * @param string $subject
   */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /**
   * @return string
   */
  public function getSubject()
  {
    return $this->subject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuotaFailureViolation::class, 'Google_Service_DatabaseMigrationService_QuotaFailureViolation');
