<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html" class="act">Home</a></li>   
                    <!-- Mega Menu -->
                    @foreach ($categories as $category)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $category->name }}<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        <h6>All</h6>
                                        @foreach ($category->groups as $group)
                                        <li>
                                            <a href="{{ route('products.index', 'group='. $group->slug) }}">
                                                {{ $group->name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>  
                                
                            </div> 
                        </ul>
                    </li>
                    @endforeach
                    
                    <li><a href="offers.html">Offers</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>