<?php

namespace App\Livewire;

use Livewire\Component;

class HandleGame extends Component
{
    public $percentage = 0;
    public $isLoading = false; // Trạng thái loading
    public $minRatio = 50; // Tỉ lệ min
    public $maxRatio = 90;
    public $roundText = ''; // Lưu trữ giá trị Round

    public $startTime;
    public $endTime;

    public function generateRandomPercentage($min_percent = 0, $max_percent = 100)
    {
        $this->isLoading = true; // Bắt đầu loading

        // Trì hoãn trong 10 giây để hiển thị hiệu ứng loading
        sleep(3);

        // Sử dụng đúng tên thuộc tính minRatio và maxRatio
        $min = rand($this->minRatio, $this->maxRatio);
        $max = rand($this->minRatio, $this->maxRatio); // Đảm bảo max lớn hơn hoặc bằng min

        // Tạo chuỗi hiển thị cho round
        $this->roundText = "Round: $min - $max";

        // Sinh ra tỉ lệ ngẫu nhiên sau 10 giây
        $this->percentage = rand($min_percent, $max_percent);
        
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
