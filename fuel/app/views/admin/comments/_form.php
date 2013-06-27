<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('name', Input::post('name', isset($comment) ? $comment->name : ''), array('class' => 'span4', 'placeholder'=>'Name')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('email', Input::post('email', isset($comment) ? $comment->email : ''), array('class' => 'span4', 'placeholder'=>'Email')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Website', 'website', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('website', Input::post('website', isset($comment) ? $comment->website : ''), array('class' => 'span4', 'placeholder'=>'Website')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Message', 'message', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('message', Input::post('message', isset($comment) ? $comment->message : ''), array('class' => 'span8', 'rows' => 8, 'placeholder'=>'Message')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Post id', 'post_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('post_id', Input::post('post_id', isset($comment) ? $comment->post_id : ''), array('class' => 'span4', 'placeholder'=>'Post id')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>