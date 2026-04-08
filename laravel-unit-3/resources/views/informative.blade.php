<div>
    <h1>This view is returned by controller</h1>
    <a href="{{url('/second')}}">Click here for url</a>
    <a href="{{action([App\Http\Controllers\MyDemoController::class, 'second'])}}">Click here for action</a>
</div>
