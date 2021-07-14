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

class deliveryStatus
{
    const __default = 'INTERRUPTED';
    const INTERRUPTED = 'INTERRUPTED';
    const DEAD = 'DEAD';
    const FAILED = 'FAILED';
    const aNEW = 'NEW';
    const READY = 'READY';
    const RUNNING = 'RUNNING';
    const FINISHED = 'FINISHED';
    const WAITING = 'WAITING';
    const ALMOST_READY = 'ALMOST_READY';
    const PERIODIC = 'PERIODIC';
    const HIDDEN = 'HIDDEN';
    const TRIGGERED = 'TRIGGERED';
    const SPLIT_RUNNING = 'SPLIT_RUNNING';
    const MASTER_REMOVE = 'MASTER_REMOVE';
    const CLOSING = 'CLOSING';
    const IMMEDIATE = 'IMMEDIATE';
    const SMARTRELAY = 'SMARTRELAY';
}
