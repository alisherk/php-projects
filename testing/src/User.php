<?php

class User {
    public string $first_name;
    public string $surname;
    public string $email;
    protected Mailer $mailer;

    public function setMailer(Mailer $mailer) {
      $this->mailer = $mailer;
    }

    public function getFullName(): string {
        return trim("$this->first_name $this->surname");
    }

    public function notify(string $msg, ?string $email): bool {
       return $this->mailer->sendMessage($email, $msg);
    }
}