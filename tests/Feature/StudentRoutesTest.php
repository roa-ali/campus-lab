<?php

namespace Tests\Feature;

use Tests\TestCase;

class StudentRoutesTest extends TestCase
{
    public function test_students_index(): void
    {
        $this->get('/students')
            ->assertStatus(200)
            ->assertSee('All Students');
    }

    public function test_student_show(): void
    {
        $this->get('/students/5')
            ->assertStatus(200)
            ->assertSee('Student ID: 5');
    }

    public function test_student_store(): void
    {
        $this->post('/students')
            ->assertStatus(200)
            ->assertSee('Student Created');
    }

    public function test_student_update(): void
    {
        $this->put('/students/5')
            ->assertStatus(200)
            ->assertSee('Student Updated: 5');
    }

    public function test_student_destroy(): void
    {
        $this->delete('/students/5')
            ->assertStatus(200)
            ->assertSee('Student Deleted: 5');
    }

    public function test_course_students(): void
    {
        $this->get('/courses/3/students')
            ->assertStatus(200)
            ->assertSee('Course ID: 3');
    }

    public function test_product_id_must_be_numeric(): void
    {
        $this->get('/products/25')
            ->assertStatus(200)
            ->assertSee('Product ID: 25');

        $this->get('/products/abc')
            ->assertStatus(404);
    }

    public function test_student_edit(): void
    {
        $this->get('/students/5/edit')
            ->assertStatus(200)
            ->assertSee('Edit Student: 5');
    }
}
