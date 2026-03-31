<?php

namespace Tests\Feature;

use App\Http\Requests\SeriesFormRequest;
use Tests\TestCase;
use App\Repositories\SeriesRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SeriesRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_when_a_series_is_created_its_seasons_and_episodes_must_also_be_created()
    {
        $repository = $this->app->make(SeriesRepository::class);
        $request = new SeriesFormRequest();

        $nomeSerie = 'Série Teste';
        $request->merge([
            'nome' => $nomeSerie,
            'seasonsQty' => 1,
            'episodesPerSeason' => 1,
        ]);

        $repository->add($request);

        $this->assertDatabaseHas('series', ['nome' => $nomeSerie]);
        $this->assertDatabaseHas('seasons', ['number' => 1]);
        $this->assertDatabaseHas('episodes', ['number' => 1]);
    }
}
