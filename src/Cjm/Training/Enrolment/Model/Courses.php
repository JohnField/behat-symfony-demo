<?php

namespace Cjm\Training\Enrolment\Model;

use Cjm\Training\Enrolment\Model\Course;

interface Courses
{
    public function add(Course $course) : void;

    public function findByTitle(string $title) : ?Course;

    public function persist(Course $course) : void;
}
