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

class publishOnWeb
{

    /**
     * @var AuthToken $token
     * @access public
     */
    public $token = null;

    /**
     * @var int $campaignIdentifier
     * @access public
     */
    public $campaignIdentifier = null;

    /**
     * @var int $testCampaignIdentifier
     * @access public
     */
    public $testCampaignIdentifier = null;

    /**
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @var base64Binary $content
     * @access public
     */
    public $content = null;

    /**
     * @var boolean $overwrite
     * @access public
     */
    public $overwrite = null;
}
