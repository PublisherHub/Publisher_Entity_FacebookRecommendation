<?php

namespace Unit;

use Unit\Publisher\Mode\Recommendation\AbstractRecommendationTest;
use Publisher\Entry\Facebook\Mode\Recommendation\FacebookPageRecommendation;

class FacebookPageRecommendationTest extends AbstractRecommendationTest
{
    
    /**
     * @inheritDoc
     */
    protected function createRecommendation(array $content = array())
    {
        return new FacebookPageRecommendation($content);
    }
    
}