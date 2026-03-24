<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Rafael',
    new \DateTimeImmutable('2002-10-29')
);

echo $student->age();
