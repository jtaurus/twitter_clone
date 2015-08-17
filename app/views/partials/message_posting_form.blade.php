 <div class="form-group">
  <label for="comment">Message:</label>
  {{Form::open(array('url' => route('post_message'), "class" => "form-control"));}}
  {{Form::label('message', 'Message')}}
  {{Form::text('message', 'Message')}}
  {{Form::submit('Submit', array('class' => 'btn btn-default'));}}
  {{Form::close();}}
</div>