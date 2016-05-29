<?php
class WebUser extends CWebUser
{
    /**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
    public function checkAccess($operation, $params = [])
    {
        if (empty($this->id)) {
            // Not identified => no rights
            return false;
        }

        $roleCode = $this->getState("role_code");

        $roles = ['SUPER_ADMIN','ADMIN','STAFF'];

        if (in_array($roleCode, $roles)) {
            return true; // admin role has access to everything
        }

        // allow access if the operation request is the current user's role
        return ($operation == $roleCode);
    }
}
