<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'phone2' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5151238341864!2d-99.1429395857602!3d19.43334514569404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f92b520ebffb%3A0x4ea88cd2d68ff833!2sEje%20Central%20L%C3%A1zaro%20C%C3%A1rdenas%2010%2C%20Centro%20Hist%C3%B3rico%20de%20la%20Cdad.%20de%20M%C3%A9xico%2C%20Obrera%2C%20Cuauht%C3%A9moc%2C%2006000%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1628466801371!5m2!1ses-419!2smx">',
            'twitter' => $this->faker->text(10),
            'facebook' => $this->faker->text(10),
            'pinterest' => $this->faker->text(10),
            'instagram' => $this->faker->text(10),
            'youtube' => $this->faker->text(10),
            'vk' => $this->faker->text(10),
        ];
    }
}
