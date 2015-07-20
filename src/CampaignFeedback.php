<?php

/**
 * Copyright 2012-2015 ContactLab, Italy
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class CampaignFeedback
{
    /**
     * @var int $campaignIdentifier
     * @access public
     */
    public $campaignIdentifier = null;

    /**
     * @var int $campaignSize
     * @access public
     */
    public $campaignSize = null;

    /**
     * @var int $views
     * @access public
     */
    public $views = null;

    /**
     * @var int $uniqueViews
     * @access public
     */
    public $uniqueViews = null;

    /**
     * @var int $hiddenViews
     * @access public
     */
    public $hiddenViews = null;

    /**
     * @var int $webMailViews
     * @access public
     */
    public $webMailViews = null;

    /**
     * @var int $clicks
     * @access public
     */
    public $clicks = null;

    /**
     * @var int $uniqueClicks
     * @access public
     */
    public $uniqueClicks = null;

    /**
     * @var int $bounces
     * @access public
     */
    public $bounces = null;

    /**
     * @var int $fblComplaints
     * @access public
     */
    public $fblComplaints = null;

    /**
     * @var int $tafClicks
     * @access public
     */
    public $tafClicks = null;

    /**
     * @var int $uniqueTafClicks
     * @access public
     */
    public $uniqueTafClicks = null;

    /**
     * @var int $blacklistMatches
     * @access public
     */
    public $blacklistMatches = null;

    /**
     * @var int $listunsubscribe
     * @access public
     */
    public $listunsubscribe = null;

    /**
     * @var int $delivered
     * @access public
     */
    public $delivered = null;

    /**
     * @var int $cancelled
     * @access public
     */
    public $cancelled = null;

    /**
     * @var int $temporaryBlacklistMatches
     * @access public
     */
    public $temporaryBlacklistMatches = null;

    /**
     * @var int $errors
     * @access public
     */
    public $errors = null;

    /**
     * @var int $unsubscribed
     * @access public
     */
    public $unsubscribed = null;

    /**
     * @var int $updates
     * @access public
     */
    public $updates = null;

    /**
     * @var int $temporaryBlacklisted
     * @access public
     */
    public $temporaryBlacklisted = null;

    /**
     * @var int $blacklisted
     * @access public
     */
    public $blacklisted = null;

    /**
     * @var TrackedLink[] $trackingDetails
     * @access public
     */
    public $trackingDetails = null;

    /**
     * @var BounceDetail[] $bounceDetails
     * @access public
     */
    public $bounceDetails = null;
}
