<?php

class Questionnaire
{
    private Organisation $organisation;


    public function __construct(Organisation $organisation)
    {
        $this->organisation = $organisation;
    }


    public function getOrganisation(): Organisation
    {
        return $this->organisation;
    }


}