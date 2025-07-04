<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        @if($brand)
            <a class="navbar-brand" href="{{ $brandUrl }}">{{ $brand }}</a>
        @endif
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                {{ $left ?? '' }}
            </ul>
            
            <ul class="navbar-nav">
                {{ $right ?? '' }}
            </ul>
        </div>
    </div>
</nav>