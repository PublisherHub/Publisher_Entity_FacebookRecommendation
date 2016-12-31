<?php

namespace Publisher\Entry\Facebook\Mode\Recommendation;

use Publisher\Mode\Recommendation\AbstractRecommendation;

class FacebookPageRecommendation extends AbstractRecommendation
{
    
    /**
     * @{inheritdoc}
     */
    public function generateBody()
    {
        $body = array();
        
        $body['message'] = $this->title ? $this->title."\n".$this->message : $this->message;
        
        if ($this->url) {
            $body['link'] = $this->url;
        }
        
        return $body;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessagePayload()
    {
        $message = $this->title ? $this->title."\n".$this->message : $this->message;
        
        return $message;
    }

}