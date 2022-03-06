@if ((count($menu->children) == 0))
  <li class="scroll"><a href="{{ url($menu->slug) }}"><i class="{{ $menu->icon }}"></i><span>{{ $menu->menu_title }}</span></a></li>
@else
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="{{ $menu->icon }}"></i><span>{{ $menu->menu_title }}</span></a>
    <ul class="dropdown-menu">
      @foreach($menu->children as $submenu)
      <li class="@if ((count($submenu->children) > 0)) dropdown @endif">
      <a href="{{ url($submenu->slug) }}" class="dropdown-toggle" data-toggle="dropdown">{{ $submenu->menu_title }}</a>
        @if ((count($submenu->children) > 0))
          <ul class="dropdown-menu">
            @foreach($submenu->children as $submenu2)
            <li><a href="{{ url($submenu2->slug) }}">{{ $submenu2->menu_title }}</a></li>
            @endforeach
          </ul>
        @endif
      @endforeach
    </ul>    
  </li>
@endif



