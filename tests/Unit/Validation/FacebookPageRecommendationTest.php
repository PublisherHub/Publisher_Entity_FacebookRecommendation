<?php

namespace Unit\Validation;

use Unit\Publisher\Mode\Recommendation\Validation\AbstractRecommendationTest;
use Publisher\Entry\Facebook\Mode\Recommendation\FacebookPageRecommendation;
use Publisher\Entry\Facebook\FacebookPageEntry;

class FacebookPageRecommendationTest extends AbstractRecommendationTest
{
    
    /**
     * @inheritDoc
     */
    public function getExceededMessageData()
    {
        $url = 'http://www.example.com'; // max character length unknown
        
        $title = '1234567890';
        /* 
         * Characters arrangement:
         * 10 for title
         * 1 for break between title and message
         */
        $messageLength = FacebookPageEntry::MAX_LENGTH_OF_MESSAGE - 10 - 1;
        $message = '';
        //add one additional character so we exceed maximum message length
        for ($i = 0; $i < $messageLength+1; $i++) {
            $message .= 'c';
        }
        
        return array(
            array(
                array(
                    'message' => $message,
                    'title' => $title,
                    'url' => $url
                )
            ),
            array(
                array( 
                    'message' => $title.'b'.$message.'b', // .'b' => combining break
                    'title' => '',
                    'url' => $url
                )
            )
        );
    }
    
    /**
     * @inheritDoc
     */
    protected function createRecommendation(array $content = array())
    {
        return new FacebookPageRecommendation($content);
    }
    
    /**
     * @inheritDoc
     */
    protected function getYamlValidationPaths()
    {
        $paths = parent::getYamlValidationPaths();
        $paths[] = __DIR__ . '/../../../Resources/config/validation.yml';
        
        return $paths;
    }

}