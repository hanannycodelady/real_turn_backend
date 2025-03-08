<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class="fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="nav-item dropdown {{ Request::is('players*', 'tournaments*', 'matches*', 'overviews*', 'bio*', 'stats*', 'ranks*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-user"></i><span>@lang('players')</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('players.index') }}">@lang('players')</a></li>
        <li><a class="nav-link" href="{{ route('tournaments.index') }}">@lang('models/tournaments.plural')</a></li>
        <li><a class="nav-link" href="{{ route('matches.index') }}">@lang('models/matches.plural')</a></li>
        <li><a class="nav-link" href="{{ route('overviews.index') }}">@lang('overviews')</a></li>
        <li><a class="nav-link" href="{{ route('bio.index') }}">@lang('bio')</a></li>
        <li><a class="nav-link" href="{{ route('stats.index') }}">@lang('stats')</a></li>
        <li><a class="nav-link" href="{{ route('ranks.index') }}">@lang('ranks')</a></li>
    </ul>
</li>

<li class="nav-item dropdown {{ Request::is('coachOverviews*', 'coachBios*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-chalkboard-teacher"></i><span>Coaches</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('coachOverviews.index') }}">@lang('coachOverviews')</a></li>
        <li><a class="nav-link" href="{{ route('coachBios.index') }}">@lang('coachBios')</a></li>
    </ul>
</li>

<li class="{{ Request::is('videos*') ? 'active' : '' }}">
    <a href="{{ route('videos.index') }}"><i class="fa fa-video"></i><span>@lang('videos')</span></a>
</li>

<li class="{{ Request::is('galleries*') ? 'active' : '' }}">
    <a href="{{ route('galleries.index') }}"><i class="fa fa-images"></i><span>@lang('models/galleries.plural')</span></a>
</li>

<li class="{{ Request::is('schools*') ? 'active' : '' }}">
    <a href="{{ route('schools.index') }}"><i class="fa fa-school"></i><span>@lang('models/schools.plural')</span></a>
</li>

<li class="{{ Request::is('communities*') ? 'active' : '' }}">
    <a href="{{ route('communities.index') }}"><i class="fa fa-users"></i><span>@lang('models/communities.plural')</span></a>
</li>
<li class="{{ Request::is('scores*') ? 'active' : '' }}">
    <a href="{{ route('scores.index') }}"><i class="fa fa-edit"></i><span>@lang('models/scores.plural')</span></a>
</li>

<li class="{{ Request::is('tickets*') ? 'active' : '' }}">
    <a href="{{ route('tickets.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tickets.plural')</span></a>
</li>

<li class="{{ Request::is('calendars*') ? 'active' : '' }}">
    <a href="{{ route('calendars.index') }}"><i class="fa fa-edit"></i><span>@lang('models/calendars.plural')</span></a>
</li>

<li class="{{ Request::is('calendars*') ? 'active' : '' }}">
    <a href="{{ route('calendars.index') }}"><i class="fa fa-edit"></i><span>@lang('models/calendars.plural')</span></a>
</li>

