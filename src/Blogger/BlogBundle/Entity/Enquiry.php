<?php

namespace Blogger\BlogBundle\Entity;

class Enquiry {
  protected $name;
  protected $email;
  protected $subject;
  protected $body;

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setEmail($email) {
    $this->name = $email;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setSubject($subject) {
    $this->name = $subject;
  }

  public function getSubject() {
    return $this->subject;
  }

  public function setBody($body) {
    $this->name = $body;
  }

  public function getBody() {
    return $this->body;
  }
}