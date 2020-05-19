<div class="wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    @include('admin.layouts.ueditor')
                    <script id="container" name="body" type="text/plain"  >
                        @if(isset($articleinfos->body))
                            {!! $articleinfos->body !!}
                        @endif
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

