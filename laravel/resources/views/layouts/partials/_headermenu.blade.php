<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{\Illuminate\Support\Facades\Request::is('/*') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{\Illuminate\Support\Facades\Request::is('about*') ? 'active' : ''}}" href="javascript:void(0)" id="aboutDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
            <a class="dropdown-item {{\Illuminate\Support\Facades\Request::is('about/president-message*') ? 'active' : ''}}" href="{{route('about.president-message')}}">President Message</a>
            <a class="dropdown-item {{\Illuminate\Support\Facades\Request::is('about/company-history*') ? 'active' : ''}}" href="{{route('about.company-history')}}">Company History</a>
            <a class="dropdown-item {{\Illuminate\Support\Facades\Request::is('about/vision-mission*') ? 'active' : ''}}" href="{{route('about.vision-mission')}}">Vision & Mission</a>
            <a class="dropdown-item {{\Illuminate\Support\Facades\Request::is('about/our-values*') ? 'active' : ''}}" href="{{route('about.our-values')}}">Our Values</a>
            <a class="dropdown-item {{\Illuminate\Support\Facades\Request::is('about/organization-chart*') ? 'active' : ''}}" href="{{route('about.organization-chart')}}">Organization Chart</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link {{\Illuminate\Support\Facades\Request::is('epc*') ? 'active' : ''}}" href="{{route('show.epc')}}">EPC</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{\Illuminate\Support\Facades\Request::is('business-sector*') ? 'active' : ''}}" href="javascript:void(0)" id="sectorsDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Business Sectors</a>
        <div class="dropdown-menu" aria-labelledby="sectorsDropdown">
            @foreach(\App\Models\BusinessSectors::all() as $sector)
                <a class="dropdown-item {{\Illuminate\Support\Facades\Request::is('business-sector/'.$sector->uri.'*') ? 'active' : ''}}" href="{{route('show.business-sector', ['sector' => $sector->uri])}}">{{$sector->name}}</a>
            @endforeach
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link {{\Illuminate\Support\Facades\Request::is('qhse-commitment*') ? 'active' : ''}}" href="{{route('show.qhse-commitment')}}">QHSE Commitment</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{\Illuminate\Support\Facades\Request::is('project-experiences*') ? 'active' : ''}}" href="{{route('show.project-experiences')}}">Project Experiences</a>
    </li>
</ul>
