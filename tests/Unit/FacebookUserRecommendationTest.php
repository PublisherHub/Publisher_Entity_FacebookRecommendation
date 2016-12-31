<?php

namespace Unit;

use Unit\Publisher\Mode\Recommendation\AbstractRecommendationTest;
use Publisher\Entry\Facebook\Mode\Recommendation\FacebookUserRecommendation;

class FacebookUserRecommendationTest extends AbstractRecommendationTest
{
    
    /**
     * @inheritDoc
     */
    protected function createRecommendation(array $content = array())
    {
        return new FacebookUserRecommendation($content);
    }
    
}