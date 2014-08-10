<?php

namespace OdinsHat\FreeAgentApiV2\FreeagentApi;

abstract class Notes extends FreeAgentApiV2
{
    abstract public function all();
    abstract public function allByProjectId(int $id);
    abstract public function allByProjectUrl(string $url);
    abstract public function allByProject();
    abstract public function getContact();
}
