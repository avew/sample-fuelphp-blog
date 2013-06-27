<?php

class Controller_Blog extends Controller_Base {

    public function action_index() {
        $view = View::forge('blog/index');
        $view->posts = Model_Post::find('all');
        $this->template->title = 'Welcome to my blog asep rojali';
        $this->template->content = $view;
    }

    public function action_view($slug) {
        $post = Model_Post::find_by_slug($slug, array(
                    'related' => array(
                        'user', 'comments')));

        $this->template->title = $post->title;
        $this->template->content = View::forge('blog/view', array(
                    'post' => $post
        ));
    }

    public function action_comment($slug) {
        $post = Model_Post::find_by_slug($slug);
        //Lazy validation
        if (Input::post('name') AND Input::post('email') AND Input::post('message')) {
            //create new comment
            $post->comments[] = new Model_Comment(array(
                'name' => Input::post('name'),
                'website' => Input::post('website'),
                'email' => Input::post('email'),
                'message' => Input::post('message'),
                'post_id' => Input::post('post_id'),
            ));
            if ($post->save()) {
                $comment = end($post->comments);
                Session::set_flash('success', 'Added comments #' . $comment->id);
            } else {
                Session::set_flash('error', 'Could not save comment');
            }
            Response::redirect('blog/view/' . $slug);
        } else {
            $this->action_view($slug);
        }
    }

}
