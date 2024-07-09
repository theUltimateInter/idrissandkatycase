
<link rel="stylesheet" href="{{asset('css/clients.css')}}">

<body>

@php
    $logosArray = [
                    ['id' => 1, 'url' => asset('LogosMO/AutoHall.jpg')],
                    ['id' => 3, 'url' => asset('LogosMO/alem.png')],
                    ['id' => 4, 'url' => asset('LogosMO/alomrane.png')],
                    ['id' => 5, 'url' => asset('LogosMO/Addoha.jpg')],
                    ['id' => 6, 'url' => asset('LogosMO/Invest.png')],
                    ['id' => 7, 'url' => asset('LogosMO/cnss.jpg')],
                    ['id' => 8, 'url' => asset('LogosMO/JAMAI.png')],
                    ['id' => 9, 'url' => asset('LogosMO/Moving2.jpeg')]
                ];
@endphp
    
    
    <div class="logos py-2">
    
        @foreach ($logosArray as $image)
            <div class="logo-slides px-3">
                <img src="{{ $image['url'] }}" alt="{{ $image['id'] }}" />
            </div>
        @endforeach    
        @foreach ($logosArray as $image)
            <div class="logo-slides px-3">
                <img src="{{ $image['url'] }}" alt="{{ $image['id'] }}" />
            </div>
        @endforeach
        
    </div>
    

</body>