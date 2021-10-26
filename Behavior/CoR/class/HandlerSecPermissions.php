<?php

class HandlerSecPermissions extends AbstractHandler
{
    public function handleRequest(array $request): ?string
    {
        if($request['permissions'] === "root") {
            echo "<br>Hi, root user";
            return parent::handleRequest($request);
        } else {
            return "I don't know your permissions";
        }
    }
}