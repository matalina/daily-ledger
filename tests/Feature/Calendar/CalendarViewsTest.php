<?php

namespace Tests\Feature\Calendar;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;
use Carbon\Carbon;

class CalendarViewsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function calendar_dashboard_valid()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('dashboard.calendar'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function calendar_year_view()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('dashboard.calendar',['type' => 'year', 'year' => 2020]));

        $response->assertStatus(200);    
        $response->assertViewHasAll([
            'start' => Carbon::createFromDate(2020,1,1)->startOfDay(),
            'end' => Carbon::createFromDate(2020,12,31)->endOfDay(),
        ]);
        
        $response->assertSee(2020);
        $response->assertSee(2019);
        $response->assertSee(2021);
    
    }
}
