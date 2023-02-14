<?php

namespace ThinkReaXMLParser\Objects;

class Attachment
{
    protected $attachments = [];

    public function __construct(\SimpleXMLElement $xml)
    {
        $temp_attachments = [];

        if (!count($xml->media)) {
            return;
        }

        $objects = $xml->media->children();

        foreach ($objects as $object) {
            $temp_objects[] = $object;
        }

        foreach ($temp_attachments as $object) {
            $this->setAttachment($object);
        }
    }

    public function setAttachment($object)
    {
        $this->attachments[] = $object;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

}