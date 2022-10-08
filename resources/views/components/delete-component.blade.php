

<form action="{{ route($action, ["$routeId" => $item]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger" >Delete</button>
</form>