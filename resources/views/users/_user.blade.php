<div class="list-group-item">
    <img src="https://cdn.learnku.com/uploads/sites/KDiyAbV0hj1ytHpRTOlVpucbLebonxeX.png" width="32"  alt="{{ $user->name }}" class="gravatar">
    <a href="{{ route('users.show',$user) }}">
       {{ $user->name }}
    </a>
    @can('destroy', $user)
        <form method="POST" action="{{ route('users.destroy',$user->id) }}" class="float-end">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button class="btn btn-sm btn-danger delete-ben" type="submit">删除</button>
        </form>
    @endcan
</div>
