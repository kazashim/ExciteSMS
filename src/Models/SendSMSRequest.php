<?php

declare(strict_types=1);

/*
 * ExcitesmsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ExcitesmsLib\Models;

class SendSMSRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $recipient;

    /**
     * @var string
     */
    private $senderId;

    /**
     * @var string
     */
    private $message;

    /**
     * @param string $recipient
     * @param string $senderId
     * @param string $message
     */
    public function __construct(string $recipient, string $senderId, string $message)
    {
        $this->recipient = $recipient;
        $this->senderId = $senderId;
        $this->message = $message;
    }

    /**
     * Returns Recipient.
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }

    /**
     * Sets Recipient.
     *
     * @required
     * @maps recipient
     */
    public function setRecipient(string $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * Returns Sender Id.
     */
    public function getSenderId(): string
    {
        return $this->senderId;
    }

    /**
     * Sets Sender Id.
     *
     * @required
     * @maps sender_id
     */
    public function setSenderId(string $senderId): void
    {
        $this->senderId = $senderId;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @required
     * @maps message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['recipient'] = $this->recipient;
        $json['sender_id'] = $this->senderId;
        $json['message']   = $this->message;

        return $json;
    }
}
