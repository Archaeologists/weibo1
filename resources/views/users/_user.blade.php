<div class="list-group-item">
    <img src="https://cdn.learnku.com/uploads/sites/KDiyAbV0hj1ytHpRTOlVpucbLebonxeX.png" width="32"  alt="{{ $user->name }}" class="gravatar">
    <a href="{{ route('users.show',$user) }}">
       {{ $user->name }}
    </a>
</div>
