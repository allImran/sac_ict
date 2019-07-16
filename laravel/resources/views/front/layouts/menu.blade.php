<div class="nav-outer clearfix">
    <!-- Main Menu -->
    
            <nav class="main-menu">
        <div class="navbar-header">
            <!-- Toggle Button -->      
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
        <div class="navbar-collapse collapse clearfix">
            <ul class="navigation clearfix">
                <li class="@if(isset($current)) {{ 'current' }} @endif" ><a href="{{ route( 'home.front') }}"><i class="fa fa-home fa-2x"></i></a>
                <li class="dropdown @if(isset($history)) {{ 'current' }} @endif"><a href="#">About Us</a>
                    <ul>
                        <li><a href="{{ route( 'history') }}">History</a></li>
                        <li><a href="{{ route( 'mission') }}">Mission/Vision</a></li>
                        <li><a href="{{ route( 'values') }}">Values</a></li>
                        <li><a href="{{ route( 'board') }}">Board Members</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($choir)) {{ 'current' }} @endif"><a href="#">Sacrifice Choir</a>
                    <ul>
                    <li><a href="{{route('choir')}}">Choir</a></li>
                    <li><a href="{{route('choir-volunteer')}}">Choir Membership</a></li>
                    <li><a href="{{route('choir-events')}}">Upcoming Event</a></li>
                    <li><a href="{{route('choir-testimony')}}">Testimony</a></li>

                    </ul>
                </li>
                <li class="dropdown @if(isset($sow)) {{ 'current' }} @endif"><a href="#">SOW</a>
                    <ul>
                    <li><a href="{{route('sow')}}">School of Worship</a></li>
                        <li class="dropdown" ><a href="">Impact Story(Video)</a>
                            <ul>
                                <li><a href="{{route('imp_in')}}">India</a></li>
                                <li><a href="{{route('imp_bn')}}">Bangladesh</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="{{route('wme')}}">WME Course</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($live)) {{ 'current' }} @endif"><a href="#">Creative Arts</a>
                    <ul>
                        <li><a href="{{route('live_drama')}}">Live Drama</a></li>
                        <li><a href="{{route('ttc')}}">TTC Training</a></li>
                        <li><a href="{{route('case')}}">CASE Seminar</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($pro)) {{ 'current' }} @endif"><a href="#">PM Music</a>
                    <ul>
                        <li ><a href="{{ route('product.all') }}">In-House</a></li>
                        <li><a href="{{ route('advartise.all') }}">Out-House</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($impact)) {{ 'current' }} @endif"><a href="">Impact Nation</a>
                    <ul>
                        <li><a href="{{ route('npwc') }}">NPWC</a></li>
                        <li><a href="{{ route('rt') }}">RockTeens</a></li>
                        <li><a href="{{ route('gcec') }}">GCEC</a></li>
                        <li><a href="{{ route('sol') }}">Source Of Life</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($lfu)) {{ 'current' }} @endif"><a href="#">LFU</a>
                    <ul>
                        
                        <li><a href="{{ route('flood') }}">Support in Disaster</a></li>
                        <li><a href="{{ route( 'child') }}">Gift For Children</a></li>
                    </ul>
                </li>
                
                <li class="@if(isset($contact)) {{ 'current' }} @endif"><a href="{{ route( 'contact') }}">Contact</a></li>
                {{-- <li class="@if(isset($vol)) {{ 'current' }} @endif"><a class=" current" href="{{route('volunteer')}}">Become a Volunteer</a></li> --}}
                <li class="@if(isset($vol)) {{ 'current' }} @endif">
                    <cart-count  :cartcount="totalItems" cartclick="{{ route('cart.Detail') }}"> </cart-count>
                </li>
                
            </ul>

            
        </div>
    </nav>
    
    <!-- Main Menu End-->
            
            <!-- Outer Box -->
            {{-- <div class="outer-box">
                <ul class="social-icon-one">
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>




<!--End Header Upper-->

<!-- Sticky Header -->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="#" title=""><img width="50" src="{{ asset( 'assets/front') }}/images/sictsmall.png" alt="" title=""></a>
        </div>
        <!--Right Col-->
        <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-collapse collapse clearfix">
            <ul class="navigation clearfix">
                <li class="@if(isset($current)) {{ 'current' }} @endif" ><a href="{{ route( 'home.front') }}"><i class="fa fa-home fa-2x"></i></a>
                <li class="dropdown @if(isset($history)) {{ 'current' }} @endif"><a href="#">About Us</a>
                    <ul>
                        <li><a href="{{ route( 'history') }}">History</a></li>
                        <li><a href="{{ route( 'mission') }}">Mission/Vision</a></li>
                        <li><a href="{{ route( 'values') }}">Values</a></li>
                        <li><a href="{{ route( 'board') }}">Board Members</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($choir)) {{ 'current' }} @endif"><a href="#">Sacrifice Choir</a>
                    <ul>
                    <li><a href="{{route('choir')}}">Choir</a></li>
                    <li><a href="{{route('choir-volunteer')}}">Choir Membership</a></li>
                    <li><a href="{{route('choir-events')}}">Upcoming Event</a></li>
                    <li><a href="{{route('choir-testimony')}}">Testimony</a></li>

                    </ul>
                </li>
                <li class="dropdown @if(isset($sow)) {{ 'current' }} @endif"><a href="#">SOW</a>
                    <ul>
                    <li><a href="{{route('sow')}}">School of Worship</a></li>
                        <li class="dropdown" ><a href="">Impact Story(Video)</a>
                            <ul>
                                <li><a href="{{route('imp_in')}}">India</a></li>
                                <li><a href="{{route('imp_bn')}}">Bangladesh</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="{{route('wme')}}">WME Course</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($live)) {{ 'current' }} @endif"><a href="#">Creative Arts</a>
                    <ul>
                        <li><a href="{{route('live_drama')}}">Live Drama</a></li>
                        <li><a href="{{route('ttc')}}">TTC Training</a></li>
                        <li><a href="{{route('case')}}">CASE Seminar</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($pro)) {{ 'current' }} @endif"><a href="#">PM Music</a>
                    <ul>
                        <li ><a href="{{ route('product.all') }}">In-House</a></li>
                        <li><a href="{{ route('advartise.all') }}">Out-House</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($impact)) {{ 'current' }} @endif"><a href="">Impact Nation</a>
                    <ul>
                        <li><a href="{{ route('npwc') }}">NPWC</a></li>
                        <li><a href="{{ route('rt') }}">RockTeens</a></li>
                        <li><a href="{{ route('gcec') }}">GCEC</a></li>
                        <li><a href="{{ route('sol') }}">Source Of Life</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($lfu)) {{ 'current' }} @endif"><a href="#">LFU</a>
                    <ul>
                        <li><a href="{{ route('flood') }}">Support in Disaster</a></li>
                        <li><a href="{{ route( 'child') }}">Gift For Children</a></li>
                    </ul>
                </li>
                
                <li class="@if(isset($contact)) {{ 'current' }} @endif"><a href="{{ route( 'contact') }}">Contact</a></li>
                <li class="@if(isset($vol)) {{ 'current' }} @endif">
                    <cart-count  :cartcount="totalItems" cartclick="{{ route('cart.Detail') }}"> </cart-count>
                </li>
            </ul>
        </div>
            </nav><!-- Main Menu End-->
        </div>
    </div>
</div>