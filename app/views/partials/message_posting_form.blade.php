 <div class="form-group">
  {{Form::open(array('url' => route('post_message', Auth::user()->username), "class" => "navbar-form navbar-right"));}}
  {{Form::textarea('message', 'Post update', array('rows' => 2))}}
  {{Form::submit('Submit', array('class' => 'btn btn-default'));}}
  {{Form::close();}}
</div>