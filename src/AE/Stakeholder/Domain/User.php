<?php
/**
 * Created by dgoosens on 26/01/21 14:46
 */

namespace AE\Stakeholder\Domain;


class User
{
    private UserId $userId;

    private Email $email;

    private Password $password;
}