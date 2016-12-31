<?php

namespace Unit\BodyGeneration;

use Unit\Publisher\Mode\Recommendation\BodyGeneration\RecommendationTest;
use Publisher\Entry\Facebook\Mode\Recommendation\FacebookPageRecommendation;

class FacebookPageRecommendationTest extends RecommendationTest
{   
    
    protected function getTestEntity()
    {
        return new FacebookPageRecommendation();
    }
    
    public function getSampleContentAndBody()
    {
        $contentMinusTitle = array(
            'message' => 'test-message',
            'url' => 'http://www.example.com'
        );
        $content = $contentMinusTitle;
        $content['title'] = 'test-title';
        
        $bodyMinusTitle = array(
            'message' => $content['message'],
            'link' => $content['url']
        );
        $body = $bodyMinusTitle;
        $body['message'] = $content['title'] . "\n" . $content['message'];
        
        return array(
            // only message and url
            array($contentMinusTitle, $bodyMinusTitle),
            // title, message and url
            array($content, $body)
        );
    }
    
}