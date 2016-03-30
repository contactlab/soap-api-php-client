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

class findSubscribersBy
{

    /**
     * @var AuthToken $token
     * @access public
     */
    public $token = null;

    /**
     * @var int $sourceIdentifier
     * @access public
     */
    public $sourceIdentifier = null;

    /**
     * @var int $filterId
     * @access public
     */
    public $filterId = null;

    /**
     * @var boolean $useBaseFilter
     * @access public
     */
    public $useBaseFilter = null;

    /**
     * @var string[] $selectedAttribute
     * @access public
     */
    public $selectedAttribute = null;

    /**
     * @var SubscriberAttributeFilter[] $whereAttribute
     * @access public
     */
    public $whereAttribute = null;

    /**
     * @var Pagination $pagination
     * @access public
     */
    public $pagination = null;
}
