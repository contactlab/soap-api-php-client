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

class sendImmediateByCampaignIdToSubscriberId
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $userKey
     * @access public
     */
    public $userKey = null;

    /**
     * @var int $campaignId
     * @access public
     */
    public $campaignId = null;

    /**
     * @var int $sourceId
     * @access public
     */
    public $sourceId = null;

    /**
     * @var int $subscriberId
     * @access public
     */
    public $subscriberId = null;

    /**
     * @var SendImmediateOptions $sendImmediateOptions
     * @access public
     */
    public $sendImmediateOptions = null;
}
