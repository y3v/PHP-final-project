<?php

class Message{
    private $authorId;
    private $recipientId;
    private $timestamp;
    private $message;
    private $isDeleted;
    private $wasViewed;
  
    public function __construct($authorId,$recipientId,$timestamp,$message,$isDeleted,$wasViewed){
        $this->authorId=$authorId;
        $this->recipientId=$recipientId;
        $this->timestamp=$timestamp;
        $this->message=$message;
        $this->isDeleted=$isDeleted;
        $this->wasViewed=$wasViewed;
    }
    
    public function getAuthorId()
    {
        return $this->authorId;
    }

    public function getRecipientId()
    {
        return $this->recipientId;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    public function getWasViewed()
    {
        return $this->wasViewed;
    }

    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    public function setWasViewed($wasViewed)
    {
        $this->wasViewed = $wasViewed;
    }

    
}