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

namespace Google\Service\Chromewebstore;

class RatingSummary extends \Google\Model
{
  /**
   * The number of five star ratings.
   *
   * @var string
   */
  public $fiveStarRatingCount;
  /**
   * The number of four star ratings.
   *
   * @var string
   */
  public $fourStarRatingCount;
  /**
   * Identifier. Item rating summary resource name Format:
   * publishers/{publisher}/items/{item}/ratingSummary
   *
   * @var string
   */
  public $name;
  /**
   * The number of ratings with a non-empty review text.
   *
   * @var string
   */
  public $nonEmptyReviewCount;
  /**
   * The number of one star ratings.
   *
   * @var string
   */
  public $oneStarRatingCount;
  /**
   * The rating of the item as shown on the store page, expressed as a double
   * between 1 and 5.
   *
   * @var 
   */
  public $rating;
  /**
   * The total number of ratings for the item.
   *
   * @var string
   */
  public $ratingCount;
  /**
   * The number of three star ratings.
   *
   * @var string
   */
  public $threeStarRatingCount;
  /**
   * The number of two star ratings.
   *
   * @var string
   */
  public $twoStarRatingCount;

  /**
   * The number of five star ratings.
   *
   * @param string $fiveStarRatingCount
   */
  public function setFiveStarRatingCount($fiveStarRatingCount)
  {
    $this->fiveStarRatingCount = $fiveStarRatingCount;
  }
  /**
   * @return string
   */
  public function getFiveStarRatingCount()
  {
    return $this->fiveStarRatingCount;
  }
  /**
   * The number of four star ratings.
   *
   * @param string $fourStarRatingCount
   */
  public function setFourStarRatingCount($fourStarRatingCount)
  {
    $this->fourStarRatingCount = $fourStarRatingCount;
  }
  /**
   * @return string
   */
  public function getFourStarRatingCount()
  {
    return $this->fourStarRatingCount;
  }
  /**
   * Identifier. Item rating summary resource name Format:
   * publishers/{publisher}/items/{item}/ratingSummary
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
  /**
   * The number of ratings with a non-empty review text.
   *
   * @param string $nonEmptyReviewCount
   */
  public function setNonEmptyReviewCount($nonEmptyReviewCount)
  {
    $this->nonEmptyReviewCount = $nonEmptyReviewCount;
  }
  /**
   * @return string
   */
  public function getNonEmptyReviewCount()
  {
    return $this->nonEmptyReviewCount;
  }
  /**
   * The number of one star ratings.
   *
   * @param string $oneStarRatingCount
   */
  public function setOneStarRatingCount($oneStarRatingCount)
  {
    $this->oneStarRatingCount = $oneStarRatingCount;
  }
  /**
   * @return string
   */
  public function getOneStarRatingCount()
  {
    return $this->oneStarRatingCount;
  }
  public function setRating($rating)
  {
    $this->rating = $rating;
  }
  public function getRating()
  {
    return $this->rating;
  }
  /**
   * The total number of ratings for the item.
   *
   * @param string $ratingCount
   */
  public function setRatingCount($ratingCount)
  {
    $this->ratingCount = $ratingCount;
  }
  /**
   * @return string
   */
  public function getRatingCount()
  {
    return $this->ratingCount;
  }
  /**
   * The number of three star ratings.
   *
   * @param string $threeStarRatingCount
   */
  public function setThreeStarRatingCount($threeStarRatingCount)
  {
    $this->threeStarRatingCount = $threeStarRatingCount;
  }
  /**
   * @return string
   */
  public function getThreeStarRatingCount()
  {
    return $this->threeStarRatingCount;
  }
  /**
   * The number of two star ratings.
   *
   * @param string $twoStarRatingCount
   */
  public function setTwoStarRatingCount($twoStarRatingCount)
  {
    $this->twoStarRatingCount = $twoStarRatingCount;
  }
  /**
   * @return string
   */
  public function getTwoStarRatingCount()
  {
    return $this->twoStarRatingCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RatingSummary::class, 'Google_Service_Chromewebstore_RatingSummary');
