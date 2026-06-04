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

namespace Google\Service;

use Google\Client;

/**
 * Service definition for SA360 (v23).
 *
 * <p>
 * The Search Ads 360 API allows developers to automate downloading reports from
 * Search Ads 360.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/search-ads/reporting" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class SA360 extends \Google\Service
{
  /** View and manage your advertising data in DoubleClick Search. */
  const DOUBLECLICKSEARCH =
      "https://www.googleapis.com/auth/doubleclicksearch";

  public $audienceInsights;
  public $customers;
  public $customers_AdGroupCriterionCustomizers;
  public $customers_CampaignGoalConfigs;
  public $customers_CustomerCustomizers;
  public $customers_Goals;
  public $customers_accountBudgetProposals;
  public $customers_accountLinks;
  public $customers_adGroupAdLabels;
  public $customers_adGroupAds;
  public $customers_adGroupAssetSets;
  public $customers_adGroupAssets;
  public $customers_adGroupBidModifiers;
  public $customers_adGroupCriteria;
  public $customers_adGroupCriterionLabels;
  public $customers_adGroupCustomizers;
  public $customers_adGroupLabels;
  public $customers_adGroups;
  public $customers_adParameters;
  public $customers_ads;
  public $customers_assetGroupAssets;
  public $customers_assetGroupListingGroupFilters;
  public $customers_assetGroupSignals;
  public $customers_assetGroups;
  public $customers_assetSetAssets;
  public $customers_assetSets;
  public $customers_assets;
  public $customers_audiences;
  public $customers_batchJobs;
  public $customers_biddingDataExclusions;
  public $customers_biddingSeasonalityAdjustments;
  public $customers_biddingStrategies;
  public $customers_billingSetups;
  public $customers_campaignAssetSets;
  public $customers_campaignAssets;
  public $customers_campaignBidModifiers;
  public $customers_campaignBudgets;
  public $customers_campaignConversionGoals;
  public $customers_campaignCriteria;
  public $customers_campaignCustomizers;
  public $customers_campaignDrafts;
  public $customers_campaignGroups;
  public $customers_campaignLabels;
  public $customers_campaignLifecycleGoal;
  public $customers_campaignSharedSets;
  public $customers_campaigns;
  public $customers_conversionActions;
  public $customers_conversionCustomVariables;
  public $customers_conversionGoalCampaignConfigs;
  public $customers_conversionValueRuleSets;
  public $customers_conversionValueRules;
  public $customers_customAudiences;
  public $customers_customColumns;
  public $customers_customConversionGoals;
  public $customers_customInterests;
  public $customers_customerAssetSets;
  public $customers_customerAssets;
  public $customers_customerClientLinks;
  public $customers_customerConversionGoals;
  public $customers_customerLabels;
  public $customers_customerLifecycleGoal;
  public $customers_customerManagerLinks;
  public $customers_customerNegativeCriteria;
  public $customers_customerSkAdNetworkConversionValueSchemas;
  public $customers_customerUserAccessInvitations;
  public $customers_customerUserAccesses;
  public $customers_customizerAttributes;
  public $customers_dataLinks;
  public $customers_experimentArms;
  public $customers_experiments;
  public $customers_incentives;
  public $customers_invoices;
  public $customers_keywordPlanAdGroupKeywords;
  public $customers_keywordPlanAdGroups;
  public $customers_keywordPlanCampaignKeywords;
  public $customers_keywordPlanCampaigns;
  public $customers_keywordPlans;
  public $customers_labels;
  public $customers_localServices;
  public $customers_localServicesLeads;
  public $customers_offlineUserDataJobs;
  public $customers_paymentsAccounts;
  public $customers_productLinkInvitations;
  public $customers_productLinks;
  public $customers_recommendationSubscriptions;
  public $customers_recommendations;
  public $customers_remarketingActions;
  public $customers_searchAds360;
  public $customers_sharedCriteria;
  public $customers_sharedSets;
  public $customers_smartCampaignSettings;
  public $customers_thirdPartyAppAnalyticsLinks;
  public $customers_userListCustomerTypes;
  public $customers_userLists;
  public $geoTargetConstants;
  public $incentives;
  public $keywordThemeConstants;
  public $searchAds360Fields;
  public $v23;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the SA360 service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://searchads360.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://searchads360.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v23';
    $this->serviceName = 'searchads360';

    $this->audienceInsights = new SA360\Resource\AudienceInsights(
        $this,
        $this->serviceName,
        'audienceInsights',
        [
          'methods' => [
            'listInsightsEligibleDates' => [
              'path' => 'v23/audienceInsights:listInsightsEligibleDates',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
    $this->customers = new SA360\Resource\Customers(
        $this,
        $this->serviceName,
        'customers',
        [
          'methods' => [
            'createCustomerClient' => [
              'path' => 'v23/customers/{+customerId}:createCustomerClient',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateAdGroupThemes' => [
              'path' => 'v23/customers/{+customerId}:generateAdGroupThemes',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateAudienceCompositionInsights' => [
              'path' => 'v23/customers/{+customerId}:generateAudienceCompositionInsights',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateAudienceDefinition' => [
              'path' => 'v23/customers/{+customerId}:generateAudienceDefinition',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateAudienceOverlapInsights' => [
              'path' => 'v23/customers/{+customerId}:generateAudienceOverlapInsights',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateBenchmarksMetrics' => [
              'path' => 'v23/customers/{+customerId}:generateBenchmarksMetrics',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateInsightsFinderReport' => [
              'path' => 'v23/customers/{+customerId}:generateInsightsFinderReport',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateKeywordForecastMetrics' => [
              'path' => 'v23/customers/{+customerId}:generateKeywordForecastMetrics',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateKeywordHistoricalMetrics' => [
              'path' => 'v23/customers/{+customerId}:generateKeywordHistoricalMetrics',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateKeywordIdeas' => [
              'path' => 'v23/customers/{+customerId}:generateKeywordIdeas',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateReachForecast' => [
              'path' => 'v23/customers/{+customerId}:generateReachForecast',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateSuggestedTargetingInsights' => [
              'path' => 'v23/customers/{+customerId}:generateSuggestedTargetingInsights',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateTargetingSuggestionMetrics' => [
              'path' => 'v23/customers/{+customerId}:generateTargetingSuggestionMetrics',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'getIdentityVerification' => [
              'path' => 'v23/customers/{+customerId}/getIdentityVerification',
              'httpMethod' => 'GET',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'listAccessibleCustomers' => [
              'path' => 'v23/customers:listAccessibleCustomers',
              'httpMethod' => 'GET',
              'parameters' => [],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'removeCampaignAutomaticallyCreatedAsset' => [
              'path' => 'v23/customers/{+customerId}:removeCampaignAutomaticallyCreatedAsset',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'searchAudienceInsightsAttributes' => [
              'path' => 'v23/customers/{+customerId}:searchAudienceInsightsAttributes',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'startIdentityVerification' => [
              'path' => 'v23/customers/{+customerId}:startIdentityVerification',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'suggestKeywordThemes' => [
              'path' => 'v23/customers/{+customerId}:suggestKeywordThemes',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'suggestSmartCampaignAd' => [
              'path' => 'v23/customers/{+customerId}:suggestSmartCampaignAd',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'suggestSmartCampaignBudgetOptions' => [
              'path' => 'v23/customers/{+customerId}:suggestSmartCampaignBudgetOptions',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'suggestTravelAssets' => [
              'path' => 'v23/customers/{+customerId}:suggestTravelAssets',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'uploadUserData' => [
              'path' => 'v23/customers/{+customerId}:uploadUserData',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_AdGroupCriterionCustomizers = new SA360\Resource\CustomersAdGroupCriterionCustomizers(
        $this,
        $this->serviceName,
        'AdGroupCriterionCustomizers',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/AdGroupCriterionCustomizers:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_CampaignGoalConfigs = new SA360\Resource\CustomersCampaignGoalConfigs(
        $this,
        $this->serviceName,
        'CampaignGoalConfigs',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/CampaignGoalConfigs:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_CustomerCustomizers = new SA360\Resource\CustomersCustomerCustomizers(
        $this,
        $this->serviceName,
        'CustomerCustomizers',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/CustomerCustomizers:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_Goals = new SA360\Resource\CustomersGoals(
        $this,
        $this->serviceName,
        'Goals',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/Goals:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_accountBudgetProposals = new SA360\Resource\CustomersAccountBudgetProposals(
        $this,
        $this->serviceName,
        'accountBudgetProposals',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/accountBudgetProposals:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_accountLinks = new SA360\Resource\CustomersAccountLinks(
        $this,
        $this->serviceName,
        'accountLinks',
        [
          'methods' => [
            'create' => [
              'path' => 'v23/customers/{+customerId}/accountLinks:create',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}/accountLinks:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupAdLabels = new SA360\Resource\CustomersAdGroupAdLabels(
        $this,
        $this->serviceName,
        'adGroupAdLabels',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupAdLabels:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupAds = new SA360\Resource\CustomersAdGroupAds(
        $this,
        $this->serviceName,
        'adGroupAds',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupAds:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'removeAutomaticallyCreatedAssets' => [
              'path' => 'v23/{+adGroupAd}:removeAutomaticallyCreatedAssets',
              'httpMethod' => 'POST',
              'parameters' => [
                'adGroupAd' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupAssetSets = new SA360\Resource\CustomersAdGroupAssetSets(
        $this,
        $this->serviceName,
        'adGroupAssetSets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupAssetSets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupAssets = new SA360\Resource\CustomersAdGroupAssets(
        $this,
        $this->serviceName,
        'adGroupAssets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupAssets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupBidModifiers = new SA360\Resource\CustomersAdGroupBidModifiers(
        $this,
        $this->serviceName,
        'adGroupBidModifiers',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupBidModifiers:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupCriteria = new SA360\Resource\CustomersAdGroupCriteria(
        $this,
        $this->serviceName,
        'adGroupCriteria',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupCriteria:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupCriterionLabels = new SA360\Resource\CustomersAdGroupCriterionLabels(
        $this,
        $this->serviceName,
        'adGroupCriterionLabels',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupCriterionLabels:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupCustomizers = new SA360\Resource\CustomersAdGroupCustomizers(
        $this,
        $this->serviceName,
        'adGroupCustomizers',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupCustomizers:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroupLabels = new SA360\Resource\CustomersAdGroupLabels(
        $this,
        $this->serviceName,
        'adGroupLabels',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroupLabels:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adGroups = new SA360\Resource\CustomersAdGroups(
        $this,
        $this->serviceName,
        'adGroups',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adGroups:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_adParameters = new SA360\Resource\CustomersAdParameters(
        $this,
        $this->serviceName,
        'adParameters',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/adParameters:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_ads = new SA360\Resource\CustomersAds(
        $this,
        $this->serviceName,
        'ads',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/ads:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_assetGroupAssets = new SA360\Resource\CustomersAssetGroupAssets(
        $this,
        $this->serviceName,
        'assetGroupAssets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/assetGroupAssets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_assetGroupListingGroupFilters = new SA360\Resource\CustomersAssetGroupListingGroupFilters(
        $this,
        $this->serviceName,
        'assetGroupListingGroupFilters',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/assetGroupListingGroupFilters:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_assetGroupSignals = new SA360\Resource\CustomersAssetGroupSignals(
        $this,
        $this->serviceName,
        'assetGroupSignals',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/assetGroupSignals:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_assetGroups = new SA360\Resource\CustomersAssetGroups(
        $this,
        $this->serviceName,
        'assetGroups',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/assetGroups:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_assetSetAssets = new SA360\Resource\CustomersAssetSetAssets(
        $this,
        $this->serviceName,
        'assetSetAssets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/assetSetAssets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_assetSets = new SA360\Resource\CustomersAssetSets(
        $this,
        $this->serviceName,
        'assetSets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/assetSets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_assets = new SA360\Resource\CustomersAssets(
        $this,
        $this->serviceName,
        'assets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/assets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_audiences = new SA360\Resource\CustomersAudiences(
        $this,
        $this->serviceName,
        'audiences',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/audiences:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_batchJobs = new SA360\Resource\CustomersBatchJobs(
        $this,
        $this->serviceName,
        'batchJobs',
        [
          'methods' => [
            'addOperations' => [
              'path' => 'v23/{+resourceName}:addOperations',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'listResults' => [
              'path' => 'v23/{+resourceName}:listResults',
              'httpMethod' => 'GET',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'pageSize' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'pageToken' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'responseContentType' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}/batchJobs:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'run' => [
              'path' => 'v23/{+resourceName}:run',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_biddingDataExclusions = new SA360\Resource\CustomersBiddingDataExclusions(
        $this,
        $this->serviceName,
        'biddingDataExclusions',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/biddingDataExclusions:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_biddingSeasonalityAdjustments = new SA360\Resource\CustomersBiddingSeasonalityAdjustments(
        $this,
        $this->serviceName,
        'biddingSeasonalityAdjustments',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/biddingSeasonalityAdjustments:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_biddingStrategies = new SA360\Resource\CustomersBiddingStrategies(
        $this,
        $this->serviceName,
        'biddingStrategies',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/biddingStrategies:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_billingSetups = new SA360\Resource\CustomersBillingSetups(
        $this,
        $this->serviceName,
        'billingSetups',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/billingSetups:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignAssetSets = new SA360\Resource\CustomersCampaignAssetSets(
        $this,
        $this->serviceName,
        'campaignAssetSets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignAssetSets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignAssets = new SA360\Resource\CustomersCampaignAssets(
        $this,
        $this->serviceName,
        'campaignAssets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignAssets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignBidModifiers = new SA360\Resource\CustomersCampaignBidModifiers(
        $this,
        $this->serviceName,
        'campaignBidModifiers',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignBidModifiers:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignBudgets = new SA360\Resource\CustomersCampaignBudgets(
        $this,
        $this->serviceName,
        'campaignBudgets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignBudgets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignConversionGoals = new SA360\Resource\CustomersCampaignConversionGoals(
        $this,
        $this->serviceName,
        'campaignConversionGoals',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignConversionGoals:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignCriteria = new SA360\Resource\CustomersCampaignCriteria(
        $this,
        $this->serviceName,
        'campaignCriteria',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignCriteria:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignCustomizers = new SA360\Resource\CustomersCampaignCustomizers(
        $this,
        $this->serviceName,
        'campaignCustomizers',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignCustomizers:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignDrafts = new SA360\Resource\CustomersCampaignDrafts(
        $this,
        $this->serviceName,
        'campaignDrafts',
        [
          'methods' => [
            'listAsyncErrors' => [
              'path' => 'v23/{+resourceName}:listAsyncErrors',
              'httpMethod' => 'GET',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'pageSize' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'pageToken' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignDrafts:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'promote' => [
              'path' => 'v23/{+campaignDraft}:promote',
              'httpMethod' => 'POST',
              'parameters' => [
                'campaignDraft' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignGroups = new SA360\Resource\CustomersCampaignGroups(
        $this,
        $this->serviceName,
        'campaignGroups',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignGroups:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignLabels = new SA360\Resource\CustomersCampaignLabels(
        $this,
        $this->serviceName,
        'campaignLabels',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignLabels:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignLifecycleGoal = new SA360\Resource\CustomersCampaignLifecycleGoal(
        $this,
        $this->serviceName,
        'campaignLifecycleGoal',
        [
          'methods' => [
            'configureCampaignLifecycleGoals' => [
              'path' => 'v23/customers/{+customerId}/campaignLifecycleGoal:configureCampaignLifecycleGoals',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaignSharedSets = new SA360\Resource\CustomersCampaignSharedSets(
        $this,
        $this->serviceName,
        'campaignSharedSets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaignSharedSets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_campaigns = new SA360\Resource\CustomersCampaigns(
        $this,
        $this->serviceName,
        'campaigns',
        [
          'methods' => [
            'enablePMaxBrandGuidelines' => [
              'path' => 'v23/customers/{+customerId}/campaigns:enablePMaxBrandGuidelines',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}/campaigns:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_conversionActions = new SA360\Resource\CustomersConversionActions(
        $this,
        $this->serviceName,
        'conversionActions',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/conversionActions:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_conversionCustomVariables = new SA360\Resource\CustomersConversionCustomVariables(
        $this,
        $this->serviceName,
        'conversionCustomVariables',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/conversionCustomVariables:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_conversionGoalCampaignConfigs = new SA360\Resource\CustomersConversionGoalCampaignConfigs(
        $this,
        $this->serviceName,
        'conversionGoalCampaignConfigs',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/conversionGoalCampaignConfigs:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_conversionValueRuleSets = new SA360\Resource\CustomersConversionValueRuleSets(
        $this,
        $this->serviceName,
        'conversionValueRuleSets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/conversionValueRuleSets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_conversionValueRules = new SA360\Resource\CustomersConversionValueRules(
        $this,
        $this->serviceName,
        'conversionValueRules',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/conversionValueRules:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customAudiences = new SA360\Resource\CustomersCustomAudiences(
        $this,
        $this->serviceName,
        'customAudiences',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customAudiences:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customColumns = new SA360\Resource\CustomersCustomColumns(
        $this,
        $this->serviceName,
        'customColumns',
        [
          'methods' => [
            'get' => [
              'path' => 'v23/{+resourceName}',
              'httpMethod' => 'GET',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'list' => [
              'path' => 'v23/customers/{+customerId}/customColumns',
              'httpMethod' => 'GET',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customConversionGoals = new SA360\Resource\CustomersCustomConversionGoals(
        $this,
        $this->serviceName,
        'customConversionGoals',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customConversionGoals:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customInterests = new SA360\Resource\CustomersCustomInterests(
        $this,
        $this->serviceName,
        'customInterests',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customInterests:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerAssetSets = new SA360\Resource\CustomersCustomerAssetSets(
        $this,
        $this->serviceName,
        'customerAssetSets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerAssetSets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerAssets = new SA360\Resource\CustomersCustomerAssets(
        $this,
        $this->serviceName,
        'customerAssets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerAssets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerClientLinks = new SA360\Resource\CustomersCustomerClientLinks(
        $this,
        $this->serviceName,
        'customerClientLinks',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerClientLinks:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerConversionGoals = new SA360\Resource\CustomersCustomerConversionGoals(
        $this,
        $this->serviceName,
        'customerConversionGoals',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerConversionGoals:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerLabels = new SA360\Resource\CustomersCustomerLabels(
        $this,
        $this->serviceName,
        'customerLabels',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerLabels:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerLifecycleGoal = new SA360\Resource\CustomersCustomerLifecycleGoal(
        $this,
        $this->serviceName,
        'customerLifecycleGoal',
        [
          'methods' => [
            'configureCustomerLifecycleGoals' => [
              'path' => 'v23/customers/{+customerId}/customerLifecycleGoal:configureCustomerLifecycleGoals',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerManagerLinks = new SA360\Resource\CustomersCustomerManagerLinks(
        $this,
        $this->serviceName,
        'customerManagerLinks',
        [
          'methods' => [
            'moveManagerLink' => [
              'path' => 'v23/customers/{+customerId}/customerManagerLinks:moveManagerLink',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerManagerLinks:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerNegativeCriteria = new SA360\Resource\CustomersCustomerNegativeCriteria(
        $this,
        $this->serviceName,
        'customerNegativeCriteria',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerNegativeCriteria:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerSkAdNetworkConversionValueSchemas = new SA360\Resource\CustomersCustomerSkAdNetworkConversionValueSchemas(
        $this,
        $this->serviceName,
        'customerSkAdNetworkConversionValueSchemas',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerSkAdNetworkConversionValueSchemas:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerUserAccessInvitations = new SA360\Resource\CustomersCustomerUserAccessInvitations(
        $this,
        $this->serviceName,
        'customerUserAccessInvitations',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerUserAccessInvitations:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customerUserAccesses = new SA360\Resource\CustomersCustomerUserAccesses(
        $this,
        $this->serviceName,
        'customerUserAccesses',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customerUserAccesses:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_customizerAttributes = new SA360\Resource\CustomersCustomizerAttributes(
        $this,
        $this->serviceName,
        'customizerAttributes',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/customizerAttributes:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_dataLinks = new SA360\Resource\CustomersDataLinks(
        $this,
        $this->serviceName,
        'dataLinks',
        [
          'methods' => [
            'create' => [
              'path' => 'v23/customers/{+customerId}/dataLinks:create',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'remove' => [
              'path' => 'v23/customers/{+customerId}/dataLinks:remove',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'update' => [
              'path' => 'v23/customers/{+customerId}/dataLinks:update',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_experimentArms = new SA360\Resource\CustomersExperimentArms(
        $this,
        $this->serviceName,
        'experimentArms',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/experimentArms:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_experiments = new SA360\Resource\CustomersExperiments(
        $this,
        $this->serviceName,
        'experiments',
        [
          'methods' => [
            'endExperiment' => [
              'path' => 'v23/{+experiment}:endExperiment',
              'httpMethod' => 'POST',
              'parameters' => [
                'experiment' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'graduateExperiment' => [
              'path' => 'v23/{+experiment}:graduateExperiment',
              'httpMethod' => 'POST',
              'parameters' => [
                'experiment' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'listExperimentAsyncErrors' => [
              'path' => 'v23/{+resourceName}:listExperimentAsyncErrors',
              'httpMethod' => 'GET',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'pageSize' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'pageToken' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}/experiments:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'promoteExperiment' => [
              'path' => 'v23/{+resourceName}:promoteExperiment',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'scheduleExperiment' => [
              'path' => 'v23/{+resourceName}:scheduleExperiment',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_incentives = new SA360\Resource\CustomersIncentives(
        $this,
        $this->serviceName,
        'incentives',
        [
          'methods' => [
            'applyIncentive' => [
              'path' => 'v23/customers/{+customerId}/incentives/{+selectedIncentiveId}:applyIncentive',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'selectedIncentiveId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_invoices = new SA360\Resource\CustomersInvoices(
        $this,
        $this->serviceName,
        'invoices',
        [
          'methods' => [
            'list' => [
              'path' => 'v23/customers/{+customerId}/invoices',
              'httpMethod' => 'GET',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'billingSetup' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'includeGranularLevelInvoiceDetails' => [
                  'location' => 'query',
                  'type' => 'boolean',
                ],
                'issueMonth' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'issueYear' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_keywordPlanAdGroupKeywords = new SA360\Resource\CustomersKeywordPlanAdGroupKeywords(
        $this,
        $this->serviceName,
        'keywordPlanAdGroupKeywords',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/keywordPlanAdGroupKeywords:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_keywordPlanAdGroups = new SA360\Resource\CustomersKeywordPlanAdGroups(
        $this,
        $this->serviceName,
        'keywordPlanAdGroups',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/keywordPlanAdGroups:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_keywordPlanCampaignKeywords = new SA360\Resource\CustomersKeywordPlanCampaignKeywords(
        $this,
        $this->serviceName,
        'keywordPlanCampaignKeywords',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/keywordPlanCampaignKeywords:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_keywordPlanCampaigns = new SA360\Resource\CustomersKeywordPlanCampaigns(
        $this,
        $this->serviceName,
        'keywordPlanCampaigns',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/keywordPlanCampaigns:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_keywordPlans = new SA360\Resource\CustomersKeywordPlans(
        $this,
        $this->serviceName,
        'keywordPlans',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/keywordPlans:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_labels = new SA360\Resource\CustomersLabels(
        $this,
        $this->serviceName,
        'labels',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/labels:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_localServices = new SA360\Resource\CustomersLocalServices(
        $this,
        $this->serviceName,
        'localServices',
        [
          'methods' => [
            'appendLeadConversation' => [
              'path' => 'v23/customers/{+customerId}/localServices:appendLeadConversation',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_localServicesLeads = new SA360\Resource\CustomersLocalServicesLeads(
        $this,
        $this->serviceName,
        'localServicesLeads',
        [
          'methods' => [
            'provideLeadFeedback' => [
              'path' => 'v23/{+resourceName}:provideLeadFeedback',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_offlineUserDataJobs = new SA360\Resource\CustomersOfflineUserDataJobs(
        $this,
        $this->serviceName,
        'offlineUserDataJobs',
        [
          'methods' => [
            'addOperations' => [
              'path' => 'v23/{+resourceName}:addOperations',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'create' => [
              'path' => 'v23/customers/{+customerId}/offlineUserDataJobs:create',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'run' => [
              'path' => 'v23/{+resourceName}:run',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_paymentsAccounts = new SA360\Resource\CustomersPaymentsAccounts(
        $this,
        $this->serviceName,
        'paymentsAccounts',
        [
          'methods' => [
            'list' => [
              'path' => 'v23/customers/{+customerId}/paymentsAccounts',
              'httpMethod' => 'GET',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_productLinkInvitations = new SA360\Resource\CustomersProductLinkInvitations(
        $this,
        $this->serviceName,
        'productLinkInvitations',
        [
          'methods' => [
            'create' => [
              'path' => 'v23/customers/{+customerId}/productLinkInvitations:create',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'remove' => [
              'path' => 'v23/customers/{+customerId}/productLinkInvitations:remove',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'update' => [
              'path' => 'v23/customers/{+customerId}/productLinkInvitations:update',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_productLinks = new SA360\Resource\CustomersProductLinks(
        $this,
        $this->serviceName,
        'productLinks',
        [
          'methods' => [
            'create' => [
              'path' => 'v23/customers/{+customerId}/productLinks:create',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'remove' => [
              'path' => 'v23/customers/{+customerId}/productLinks:remove',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_recommendationSubscriptions = new SA360\Resource\CustomersRecommendationSubscriptions(
        $this,
        $this->serviceName,
        'recommendationSubscriptions',
        [
          'methods' => [
            'mutateRecommendationSubscription' => [
              'path' => 'v23/customers/{+customerId}/recommendationSubscriptions:mutateRecommendationSubscription',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_recommendations = new SA360\Resource\CustomersRecommendations(
        $this,
        $this->serviceName,
        'recommendations',
        [
          'methods' => [
            'apply' => [
              'path' => 'v23/customers/{+customerId}/recommendations:apply',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'dismiss' => [
              'path' => 'v23/customers/{+customerId}/recommendations:dismiss',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generate' => [
              'path' => 'v23/customers/{+customerId}/recommendations:generate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_remarketingActions = new SA360\Resource\CustomersRemarketingActions(
        $this,
        $this->serviceName,
        'remarketingActions',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/remarketingActions:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_searchAds360 = new SA360\Resource\CustomersSearchAds360(
        $this,
        $this->serviceName,
        'searchAds360',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/searchAds360:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'search' => [
              'path' => 'v23/customers/{+customerId}/searchAds360:search',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_sharedCriteria = new SA360\Resource\CustomersSharedCriteria(
        $this,
        $this->serviceName,
        'sharedCriteria',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/sharedCriteria:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_sharedSets = new SA360\Resource\CustomersSharedSets(
        $this,
        $this->serviceName,
        'sharedSets',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/sharedSets:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_smartCampaignSettings = new SA360\Resource\CustomersSmartCampaignSettings(
        $this,
        $this->serviceName,
        'smartCampaignSettings',
        [
          'methods' => [
            'getSmartCampaignStatus' => [
              'path' => 'v23/{+resourceName}:getSmartCampaignStatus',
              'httpMethod' => 'GET',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'mutate' => [
              'path' => 'v23/customers/{+customerId}/smartCampaignSettings:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_thirdPartyAppAnalyticsLinks = new SA360\Resource\CustomersThirdPartyAppAnalyticsLinks(
        $this,
        $this->serviceName,
        'thirdPartyAppAnalyticsLinks',
        [
          'methods' => [
            'regenerateShareableLinkId' => [
              'path' => 'v23/{+resourceName}:regenerateShareableLinkId',
              'httpMethod' => 'POST',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_userListCustomerTypes = new SA360\Resource\CustomersUserListCustomerTypes(
        $this,
        $this->serviceName,
        'userListCustomerTypes',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/userListCustomerTypes:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->customers_userLists = new SA360\Resource\CustomersUserLists(
        $this,
        $this->serviceName,
        'userLists',
        [
          'methods' => [
            'mutate' => [
              'path' => 'v23/customers/{+customerId}/userLists:mutate',
              'httpMethod' => 'POST',
              'parameters' => [
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->geoTargetConstants = new SA360\Resource\GeoTargetConstants(
        $this,
        $this->serviceName,
        'geoTargetConstants',
        [
          'methods' => [
            'suggest' => [
              'path' => 'v23/geoTargetConstants:suggest',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
    $this->incentives = new SA360\Resource\Incentives(
        $this,
        $this->serviceName,
        'incentives',
        [
          'methods' => [
            'fetchIncentive' => [
              'path' => 'v23/incentives:fetchIncentive',
              'httpMethod' => 'GET',
              'parameters' => [
                'countryCode' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'email' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'languageCode' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'type' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->keywordThemeConstants = new SA360\Resource\KeywordThemeConstants(
        $this,
        $this->serviceName,
        'keywordThemeConstants',
        [
          'methods' => [
            'suggest' => [
              'path' => 'v23/keywordThemeConstants:suggest',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
    $this->searchAds360Fields = new SA360\Resource\SearchAds360Fields(
        $this,
        $this->serviceName,
        'searchAds360Fields',
        [
          'methods' => [
            'get' => [
              'path' => 'v23/{+resourceName}',
              'httpMethod' => 'GET',
              'parameters' => [
                'resourceName' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'search' => [
              'path' => 'v23/searchAds360Fields:search',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
    $this->v23 = new SA360\Resource\V23(
        $this,
        $this->serviceName,
        'v23',
        [
          'methods' => [
            'generateConversionRates' => [
              'path' => 'v23:generateConversionRates',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listBenchmarksAvailableDates' => [
              'path' => 'v23:listBenchmarksAvailableDates',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listBenchmarksLocations' => [
              'path' => 'v23:listBenchmarksLocations',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listBenchmarksProducts' => [
              'path' => 'v23:listBenchmarksProducts',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listBenchmarksSources' => [
              'path' => 'v23:listBenchmarksSources',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listPlannableLocations' => [
              'path' => 'v23:listPlannableLocations',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listPlannableProducts' => [
              'path' => 'v23:listPlannableProducts',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listPlannableUserInterests' => [
              'path' => 'v23:listPlannableUserInterests',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'listPlannableUserLists' => [
              'path' => 'v23:listPlannableUserLists',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SA360::class, 'Google_Service_SA360');
