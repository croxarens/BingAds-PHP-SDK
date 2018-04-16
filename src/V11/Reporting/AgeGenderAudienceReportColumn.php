<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AgeGenderAudienceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/agegenderaudiencereportcolumn?view=bingads-11 AgeGenderAudienceReportColumn Value Set
     * 
     * @used-by AgeGenderAudienceReportRequest
     */
    final class AgeGenderAudienceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The network where you want your ads to show. */
        const AdDistribution = 'AdDistribution';

        /** The age group of the audience who viewed the ad. */
        const AgeGroup = 'AgeGroup';

        /** The gender (male or female) of the search users to whom the ad was delivered. */
        const Gender = 'Gender';

        /** The number of times an ad has been displayed on search results pages or other sites on the Audience Network. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** A conversion is a click that results in a sale or another measure of success. */
        const Conversions = 'Conversions';

        /** The sum of your cost-per-click (CPC) charges for your ads and keywords. */
        const Spend = 'Spend';

        /** A value that you can collect using universal event tracking. */
        const Revenue = 'Revenue';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an entity (an account, campaign, ad group, or keyword, for example) contributed to a conversion that is associated with a different entity. */
        const Assists = 'Assists';

        /** This is the language of the country the ad is served in. */
        const Language = 'Language';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';
    }

}