
                <div class="page-header justify-content-between">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            @if (isset($category))
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}"> {{ config('app.name') }} </a>
                            </li>
                            @if (isset($app))
                            <li class="breadcrumb-item">
                                <a href="{{ route('category', ['category' => $category]) }}"> {{ $category }} </a>
                            </li>
                            @endif
                            @endif
                            <li class="breadcrumb-item {{ isset($title) ? 'active': 'home' }}" aria-current="page"> @title </li>
                        </ol>
                    </nav>
                </div>