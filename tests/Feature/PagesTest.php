<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_every_page_loads(): void
    {
        foreach (['/', '/about', '/services', '/businesses', '/contact'] as $uri) {
            $this->get($uri)->assertOk();
        }
    }

    public function test_contact_page_accepts_a_service_preselection(): void
    {
        $this->get('/contact?service=VexoBiz')
            ->assertOk()
            ->assertSee('VexoBiz');
    }

    public function test_unknown_page_returns_not_found(): void
    {
        $this->get('/does-not-exist')->assertNotFound();
    }
}
