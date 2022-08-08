@if ((count($menu->children) == 0))
  <li class="scroll"><a href="{{ url($menu->slug) }}"><i class="{{ $menu->icon }}"></i><span>{{ $menu->menu_title }}</span></a></li>
@else
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="{{ $menu->icon }}"></i><span>{{ $menu->menu_title }}</span></a>
    <ul class="dropdown-menu">
      @foreach($menu->children as $submenu)
      @if ((count($submenu->children) > 0))
        <li class="dropdown">
          <a href="{{ url($submenu->slug) }}" class="dropdown-toggle" data-toggle="dropdown" >{{ $submenu->menu_title }}</a>
          <ul class="dropdown-menu">
            @foreach($submenu->children as $submenu2)
            <li><a href="{{ url($submenu2->slug) }}">{{ $submenu2->menu_title }}</a></li>
            @endforeach
          </ul>
        </li>
      @else
        <li><a href="{{ url($submenu->slug) }}">{{ $submenu->menu_title }}</a></li>
      @endif
      @endforeach
    </ul>
  </li> 
@endif



