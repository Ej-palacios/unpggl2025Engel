<div {{ $attributes->merge(['class' => 'card mb-4 shadow-sm']) }}>
    @if($title)
        <div class="card-header {{ $headerClass }}">
            <h5 class="card-title mb-0">{{ $title }}</h5>
        </div>
    @endif
    
    <div class="card-body {{ $bodyClass }}">
        {{ $slot }}
    </div>
    
    @if(isset($footer))
        <div class="card-footer {{ $footerClass }}">
            {{ $footer }}
        </div>
    @endif
</div>