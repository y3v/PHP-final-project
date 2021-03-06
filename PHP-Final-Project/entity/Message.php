<?php
/*@Entity @Table(name="message")*/
class Message{
    /*@id @Column(type="integer") @GeneratedValue*/
    private $id;
    
    /*@Column(type="integer")*/
    private $authorId;
    
    /*@Column(type="integer")*/
    private $recipientId;
    
    /*@Column(type="datetime")*/
    private $timestamp;
    
    /*@Column(type="string")*/
    private $message;
    
    /*@Column(type="boolean")*/
    private $isDeleted;
    
    /*@Column(type="boolean")*/
    private $wasViewed;
  
    public function __construct($authorId,$recipientId,$timestamp,$message,$isDeleted,$wasViewed){
        $this->authorId=$authorId;
        $this->recipientId=$recipientId;
        $this->timestamp=$timestamp;
        $this->message=$message;
        $this->isDeleted=$isDeleted;
        $this->wasViewed=$wasViewed;
    }
    
    public function getId()
    {
        return $this->id;
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

    public function setId($id)
    {
        $this->id = $id;
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