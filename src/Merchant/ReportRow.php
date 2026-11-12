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

namespace Google\Service\Merchant;

class ReportRow extends \Google\Model
{
  protected $bestSellersBrandViewType = BestSellersBrandView::class;
  protected $bestSellersBrandViewDataType = '';
  protected $bestSellersProductClusterViewType = BestSellersProductClusterView::class;
  protected $bestSellersProductClusterViewDataType = '';
  protected $competitiveVisibilityBenchmarkViewType = CompetitiveVisibilityBenchmarkView::class;
  protected $competitiveVisibilityBenchmarkViewDataType = '';
  protected $competitiveVisibilityCompetitorViewType = CompetitiveVisibilityCompetitorView::class;
  protected $competitiveVisibilityCompetitorViewDataType = '';
  protected $competitiveVisibilityTopMerchantViewType = CompetitiveVisibilityTopMerchantView::class;
  protected $competitiveVisibilityTopMerchantViewDataType = '';
  protected $nonProductPerformanceViewType = NonProductPerformanceView::class;
  protected $nonProductPerformanceViewDataType = '';
  protected $priceCompetitivenessProductViewType = PriceCompetitivenessProductView::class;
  protected $priceCompetitivenessProductViewDataType = '';
  protected $priceInsightsProductViewType = PriceInsightsProductView::class;
  protected $priceInsightsProductViewDataType = '';
  protected $productPerformanceViewType = ProductPerformanceView::class;
  protected $productPerformanceViewDataType = '';
  protected $productViewType = ProductView::class;
  protected $productViewDataType = '';

  /**
   * Fields available for query in `best_sellers_brand_view` table.
   *
   * @param BestSellersBrandView $bestSellersBrandView
   */
  public function setBestSellersBrandView(BestSellersBrandView $bestSellersBrandView)
  {
    $this->bestSellersBrandView = $bestSellersBrandView;
  }
  /**
   * @return BestSellersBrandView
   */
  public function getBestSellersBrandView()
  {
    return $this->bestSellersBrandView;
  }
  /**
   * Fields available for query in `best_sellers_product_cluster_view` table.
   *
   * @param BestSellersProductClusterView $bestSellersProductClusterView
   */
  public function setBestSellersProductClusterView(BestSellersProductClusterView $bestSellersProductClusterView)
  {
    $this->bestSellersProductClusterView = $bestSellersProductClusterView;
  }
  /**
   * @return BestSellersProductClusterView
   */
  public function getBestSellersProductClusterView()
  {
    return $this->bestSellersProductClusterView;
  }
  /**
   * Fields available for query in `competitive_visibility_benchmark_view`
   * table.
   *
   * @param CompetitiveVisibilityBenchmarkView $competitiveVisibilityBenchmarkView
   */
  public function setCompetitiveVisibilityBenchmarkView(CompetitiveVisibilityBenchmarkView $competitiveVisibilityBenchmarkView)
  {
    $this->competitiveVisibilityBenchmarkView = $competitiveVisibilityBenchmarkView;
  }
  /**
   * @return CompetitiveVisibilityBenchmarkView
   */
  public function getCompetitiveVisibilityBenchmarkView()
  {
    return $this->competitiveVisibilityBenchmarkView;
  }
  /**
   * Fields available for query in `competitive_visibility_competitor_view`
   * table.
   *
   * @param CompetitiveVisibilityCompetitorView $competitiveVisibilityCompetitorView
   */
  public function setCompetitiveVisibilityCompetitorView(CompetitiveVisibilityCompetitorView $competitiveVisibilityCompetitorView)
  {
    $this->competitiveVisibilityCompetitorView = $competitiveVisibilityCompetitorView;
  }
  /**
   * @return CompetitiveVisibilityCompetitorView
   */
  public function getCompetitiveVisibilityCompetitorView()
  {
    return $this->competitiveVisibilityCompetitorView;
  }
  /**
   * Fields available for query in `competitive_visibility_top_merchant_view`
   * table.
   *
   * @param CompetitiveVisibilityTopMerchantView $competitiveVisibilityTopMerchantView
   */
  public function setCompetitiveVisibilityTopMerchantView(CompetitiveVisibilityTopMerchantView $competitiveVisibilityTopMerchantView)
  {
    $this->competitiveVisibilityTopMerchantView = $competitiveVisibilityTopMerchantView;
  }
  /**
   * @return CompetitiveVisibilityTopMerchantView
   */
  public function getCompetitiveVisibilityTopMerchantView()
  {
    return $this->competitiveVisibilityTopMerchantView;
  }
  /**
   * Fields available for query in `non_product_performance_view` table.
   *
   * @param NonProductPerformanceView $nonProductPerformanceView
   */
  public function setNonProductPerformanceView(NonProductPerformanceView $nonProductPerformanceView)
  {
    $this->nonProductPerformanceView = $nonProductPerformanceView;
  }
  /**
   * @return NonProductPerformanceView
   */
  public function getNonProductPerformanceView()
  {
    return $this->nonProductPerformanceView;
  }
  /**
   * Fields available for query in `price_competitiveness_product_view` table.
   *
   * @param PriceCompetitivenessProductView $priceCompetitivenessProductView
   */
  public function setPriceCompetitivenessProductView(PriceCompetitivenessProductView $priceCompetitivenessProductView)
  {
    $this->priceCompetitivenessProductView = $priceCompetitivenessProductView;
  }
  /**
   * @return PriceCompetitivenessProductView
   */
  public function getPriceCompetitivenessProductView()
  {
    return $this->priceCompetitivenessProductView;
  }
  /**
   * Fields available for query in `price_insights_product_view` table.
   *
   * @param PriceInsightsProductView $priceInsightsProductView
   */
  public function setPriceInsightsProductView(PriceInsightsProductView $priceInsightsProductView)
  {
    $this->priceInsightsProductView = $priceInsightsProductView;
  }
  /**
   * @return PriceInsightsProductView
   */
  public function getPriceInsightsProductView()
  {
    return $this->priceInsightsProductView;
  }
  /**
   * Fields available for query in `product_performance_view` table.
   *
   * @param ProductPerformanceView $productPerformanceView
   */
  public function setProductPerformanceView(ProductPerformanceView $productPerformanceView)
  {
    $this->productPerformanceView = $productPerformanceView;
  }
  /**
   * @return ProductPerformanceView
   */
  public function getProductPerformanceView()
  {
    return $this->productPerformanceView;
  }
  /**
   * Fields available for query in `product_view` table.
   *
   * @param ProductView $productView
   */
  public function setProductView(ProductView $productView)
  {
    $this->productView = $productView;
  }
  /**
   * @return ProductView
   */
  public function getProductView()
  {
    return $this->productView;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportRow::class, 'Google_Service_Merchant_ReportRow');
