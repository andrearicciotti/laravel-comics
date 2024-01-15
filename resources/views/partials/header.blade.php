<header>
    <div class="header-top">
        <div class="ms_container">
            <span class="mx-5">dc power&#8482; visa&#174;</span>
            <span>additional dc sites&#9662;</span>
        </div>
    </div>

    <nav class="navbar header-bottom">

        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">
        </div>
        <div class="options">
            <ul class="options-list">
                @foreach ($navbar_options as $option)
                    <li class="list-item"><a href="@php echo $option['option'] @endphp">{{ $option['option'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="searchbar">
            <input class="searchbar" placeholder="Search" type="text">
        </div>
    </nav>

</header>
