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

        // Sinh ra tỉ lệ ngẫu nhiên sau 10 giây
        $this->percentage = rand($minpercent, $maxpercent);
        
        $this->isLoading = false; // Kết thúc loading


        $currentDate = now();

        // Cộng thêm 5 phút vào thời gian hiện tại để làm thời gian bắt đầu
        $startTime = $currentDate->copy()->addMinutes(5)->format('H:i');

        // Cộng thêm 30 phút vào thời gian bắt đầu để tính thời gian kết thúc
        $endTime = $currentDate->copy()->addMinutes(35)->format('H:i');


        // Gán giá trị cho các biến
        $this->startTime = $startTime;
        $this->endTime = $endTime;

    }

    public function render()
    {
        return view('livewire.handle-game');
    }
}