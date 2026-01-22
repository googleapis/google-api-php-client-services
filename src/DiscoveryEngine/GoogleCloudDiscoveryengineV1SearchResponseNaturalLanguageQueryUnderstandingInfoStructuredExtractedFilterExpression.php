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

class GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterExpression extends \Google\Model
{
  protected $andExprType = GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterAndExpression::class;
  protected $andExprDataType = '';
  protected $geolocationConstraintType = GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterGeolocationConstraint::class;
  protected $geolocationConstraintDataType = '';
  protected $numberConstraintType = GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterNumberConstraint::class;
  protected $numberConstraintDataType = '';
  protected $orExprType = GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterOrExpression::class;
  protected $orExprDataType = '';
  protected $stringConstraintType = GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterStringConstraint::class;
  protected $stringConstraintDataType = '';

  /**
   * Logical "And" compound operator connecting multiple expressions.
   *
   * @param GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterAndExpression $andExpr
   */
  public function setAndExpr(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterAndExpression $andExpr)
  {
    $this->andExpr = $andExpr;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterAndExpression
   */
  public function getAndExpr()
  {
    return $this->andExpr;
  }
  /**
   * Geolocation constraint expression.
   *
   * @param GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterGeolocationConstraint $geolocationConstraint
   */
  public function setGeolocationConstraint(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterGeolocationConstraint $geolocationConstraint)
  {
    $this->geolocationConstraint = $geolocationConstraint;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterGeolocationConstraint
   */
  public function getGeolocationConstraint()
  {
    return $this->geolocationConstraint;
  }
  /**
   * Numerical constraint expression.
   *
   * @param GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterNumberConstraint $numberConstraint
   */
  public function setNumberConstraint(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterNumberConstraint $numberConstraint)
  {
    $this->numberConstraint = $numberConstraint;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterNumberConstraint
   */
  public function getNumberConstraint()
  {
    return $this->numberConstraint;
  }
  /**
   * Logical "Or" compound operator connecting multiple expressions.
   *
   * @param GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterOrExpression $orExpr
   */
  public function setOrExpr(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterOrExpression $orExpr)
  {
    $this->orExpr = $orExpr;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterOrExpression
   */
  public function getOrExpr()
  {
    return $this->orExpr;
  }
  /**
   * String constraint expression.
   *
   * @param GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterStringConstraint $stringConstraint
   */
  public function setStringConstraint(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterStringConstraint $stringConstraint)
  {
    $this->stringConstraint = $stringConstraint;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterStringConstraint
   */
  public function getStringConstraint()
  {
    return $this->stringConstraint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterExpression::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterExpression');
