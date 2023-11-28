<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => 'Angel Sullon',
            'email' => 'angelSullon@gmail.com',
            'password' => bcrypt('12345678'), // password

            //Factorys para crear muchos datos
            /*
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,

            //Nuevos atributos
            'ap_paterno'=>$this->faker->word(),
            'ap_materno'=>$this->faker->word(),
            'fecha_de_nacimiento'=>$this->faker->dateTime(),
            'genero'=>$this->faker->numberBetween(1,5),
            'direccion'=>$this->faker->word(),
            'telefono'=>$this->faker->numberBetween(100000000, 999999999),
            'DNI'=>$this->faker->numberBetween(10000000, 99999999),
            'pais_de_origen'=>$this->faker->word(),
            'ciudad'=>$this->faker->word(),
            'estado_civil'=>$this->faker->numberBetween(1,5),
            'nacionalidad'=>$this->faker->word(),
            */
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     */
    public function withPersonalTeam(callable $callback = null): static
    {
        if (!Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(fn (array $attributes, User $user) => [
                    'name' => $user->name . '\'s Team',
                    'user_id' => $user->id,
                    'personal_team' => true,
                ])
                ->when(is_callable($callback), $callback),
            'ownedTeams'
        );
    }
}
