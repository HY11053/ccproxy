@inject('headers',App\Header')
    <div class="i_menu left">
        <ul class="left">
            <li @if(Request::getrequesturi()=='/') class="current" @endif><a href="/">首页</a></li>
            <li class="menuLine">|</li>
            @foreach($headers->HeaderLists() as $real_path=>$header)
                <li @if(Request::getrequesturi()==$real_path) class="current" @endif><a href="/{{$real_path}}/" >{{$header}}</a></li>
                <li class="menuLine">|</li>
            @endforeach
        </ul>
    </div>

</div>
