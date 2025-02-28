- <li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="{{ Request::is('players*') ? 'active' : '' }}">
    <a href="{{ route('players.index') }}"><i class="fa fa-edit"></i><span>@lang('players')</span></a>
</li>

<li class="{{ Request::is('tournaments*') ? 'active' : '' }}">
    <a href="{{ route('tournaments.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tournaments.plural')</span></a>
</li>

<li class="{{ Request::is('matches*') ? 'active' : '' }}">
    <a href="{{ route('matches.index') }}"><i class="fa fa-edit"></i><span>@lang('models/matches.plural')</span></a>
</li>

<li class="{{ Request::is('overviews*') ? 'active' : '' }}">
    <a href="{{ route('overviews.index') }}"><i class="fa fa-edit"></i><span>@lang('overviews')</span></a>
</li>

<li class="{{ Request::is('bio*') ? 'active' : '' }}">
    <a href="{{ route('bio.index') }}"><i class="fa fa-edit"></i><span>@lang('bio')</span></a>
</li>

<li class="{{ Request::is('stats*') ? 'active' : '' }}">
    <a href="{{ route('stats.index') }}"><i class="fa fa-edit"></i><span>@lang('stats')</span></a>
</li>

<li class="{{ Request::is('ranks*') ? 'active' : '' }}">
    <a href="{{ route('ranks.index') }}"><i class="fa fa-edit"></i><span>@lang('models/ranks.plural')</span></a>
</li>

