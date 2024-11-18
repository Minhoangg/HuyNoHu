<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Game;

class HandleGame extends Component
{
    public $id;
    public $percentage = 0;

    public $isLoading = false; // Trạng thái loading

    public $roundText = ''; // Lưu trữ giá trị Round
    public $startTime;
    public $endTime;

    public $nameGame;
    public $imgGame;

    public function mount($id)
    {
        $this->id = $id; // Ensure the ID is passed correctly when rendering the component

        $dataGame = Game::find($this->id);

        if ($dataGame) {
            $this->nameGame = $dataGame->title;
            $this->imgGame = $dataGame->image;
        } else {
            // Handle the case where no game is found
            $this->nameGame = 'Game Not Found';
            $this->imgGame = 'default-image.jpg'; // Or any fallback image
        }
    }

    public function generateRandomPercentage()
    {
        $dataGame = Game::find($this->id);

        $minRatio = $dataGame->min_ratio;
        $maxRatio = $dataGame->max_ratio;

        $minpercent = $dataGame->min_percent;
        $maxpercent = $dataGame->max_percent;

        sleep(3);

        $min = rand($minRatio, $maxRatio);
        $max = rand($minRatio, $maxRatio);

        // Đảm bảo min luôn nhỏ hơn max
        if ($min > $max) {
            list($min, $max) = [$max, $min]; // Hoán đổi nếu min lớn hơn max
        }

        // Tạo chuỗi hiển thị cho round
        $this->roundText = "Round: $min - $max";

        $this->percentage = rand($minpercent, $maxpercent);

        $this->isLoading = false; // Kết thúc loading

        $currentDate = now();

        $startTime = $currentDate->copy()->addMinutes(5)->format('H:i');

        $endTime = $currentDate->copy()->addMinutes(35)->format('H:i');

        $this->startTime = $startTime;
        $this->endTime = $endTime;

        // Kết thúc quá trình loading
        $this->isLoading = false;
    }

    public function render()
    {
        return view('livewire.handle-game');
    }
}
