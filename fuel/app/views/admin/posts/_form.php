<?php echo Form::open(array("class" => "form-horizontal")); ?>

<fieldset>
    <div class="control-group">
        <?php echo Form::label('Title', 'title', array('class' => 'control-label')); ?>

        <div class="controls">
            <?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : ''), array('class' => 'span4', 'placeholder' => 'Title')); ?>

        </div>
    </div>
    <div class="control-group">
        <?php echo Form::label('Slug', 'slug', array('class' => 'control-label')); ?>

        <div class="controls">
            <?php echo Form::input('slug', Input::post('slug', isset($post) ? $post->slug : ''), array('class' => 'span4', 'placeholder' => 'Slug')); ?>

        </div>
    </div>
    <div class="control-group">
        <?php echo Form::label('Summary', 'summary', array('class' => 'control-label')); ?>

        <div class="controls">
            <?php echo Form::textarea('summary', Input::post('summary', isset($post) ? $post->summary : ''), array('class' => 'span8', 'rows' => 8, 'placeholder' => 'Summary')); ?>

        </div>
    </div>
    <div class="control-group">
        <?php echo Form::label('Body', 'body', array('class' => 'control-label')); ?>

        <div class="controls">
            <?php echo Form::textarea('body', Input::post('body', isset($post) ? $post->body : ''), array('class' => 'span8', 'rows' => 8, 'placeholder' => 'Body')); ?>

        </div>
    </div>
    <div class="control-group">
        <?php echo Form::label('User', 'user_id', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo Form::select('user_id', Input::post('user_id', isset($post) ? $post->user_id : $current_user->id), $users, array('class' => 'span6')); ?>

        </div>
    </div>
    <div class="control-group">
        <label class='control-label'>&nbsp;</label>
        <div class='controls'>
            <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
    </div>
</fieldset>
<?php echo Form::close(); ?>