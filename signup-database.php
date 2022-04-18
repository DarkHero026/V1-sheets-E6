<?php

class SignupDatabase extends Dbh
{
    protected function setUser($userid, $pwd, $email)
    {
        // Dit maak een user aan de databse.
        $stmt = $this->connect()->prepare('INSERT INTO users (user_userid, user_pwd, user_email) VALUES (?, ?, ?);'); //input statement

        // password voor security
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($userid, $hashedPwd, $email))) {
            $stmt = null;
            header("location: index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }


    protected function checkUser($userid, $email)
    {
        // Dit check als er een bestand gebruik al in de database.
        $stmt = $this->connect()->prepare('SELECT user_userid FROM users WHERE user_userid = ? OR user_email = ?;'); //select statement

        if (!$stmt->execute(array($userid, $email))) {
            $stmt = null;
            header("location: index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}
